/**
 * IMGUR: Clase para subir imágenes a un album anónimo.
 */

function Imgur() {

    this.params = {
        album: {
            hash: 'bBAqLK1G2OvMnmj',
            id: 'zlvtg'
        },
        client_id: 'fc503a6be5a62df',
        token: '6528448c258cff474ca9701c5bab6927',
        url_upload: 'http://api.imgur.com/3/upload.json',
        url_album: ''
    };
    this.on_upload = null;
    this.on_error = null;
    this.on_progress = null;
    this.format_response = true;

    this.sizes = {
        small_square: 's',
        big_square: 'b',
        small_thumbnail: 't',
        medium_thumbnail: 'm',
        largue_thumbnail: 'l',
        huge_thumbnail: 'h'
    };
}
Imgur.prototype.resizeLink = function (size, link) {
    if (link === undefined || link.indexOf("http") < 0)
        return "INVALID URL";
    var p = link.split(".");
    return p[0] + "." + p[1] + "." + p[2] + size + "." + p[3];
}
Imgur.prototype.validateImage = function (img) {
    //var type = "file";// file, base64 or URL
    if (typeof (img) === "string") {
        if (img.indexOf(":image") > -1) {
            img = img.split(",");
            if (img.length < 2) {
                console.log("Formato base64 no válido.");
                return null;
            }
            img = img[1];
            //img = encodeURIComponent(img);
            return {
                type: "base64",
                image: img
            };
        } else if (img.indexOf("http") > -1) {
            return {
                type: "url",
                image: img
            };
        } else {
            console.log("La imagen no es una URL valida.");
            return null;
        }
    } else if (img.type === null || typeof(img.type) === "undefined" || !img || !img.type.match(/image.*/)) {
        console.log("Objeto FILE no válido.");
        return null;
    }
    return {
        type: 'file',
        image: img
    };
}
Imgur.prototype.createAlbum = function (title) {
    var fd = new FormData();
    fd.append("title", title);
    fd.append('layout', 'grid');
    var xhr = new XMLHttpRequest();
    xhr.open("POST", this.params.url_album);
    xhr.setRequestHeader("Authorization", "Client-ID " + this.params.client_id);
    xhr.onload = function () {
        var values = JSON.parse(xhr.responseText);
        console.log("Se ha creado el album:");
        console.log(values);
    };
    xhr.send(fd);
}
Imgur.prototype.formatResponse = function (r) {
    if (typeof (r.data) !== 'undefined') {
        var link = r.data.link;
        r["upload"] = {
            links: {
                n: link,
                original: link,
                small_square: this.resizeLink('s', link),
                big_square: this.resizeLink('b', link),
                small_thumbnail: this.resizeLink('t', link),
                medium_thumbnail: this.resizeLink('m', link),
                largue_thumbnail: this.resizeLink('l', link),
                huge_thumbnail: this.resizeLink('h', link)
            },
            image: r.data
        };
        //Eliminar datos repetidos!
        delete r.data;
    }
    return r;
};
Imgur.prototype.upload = function (image) {
    var result = this.validateImage(image);
    console.log(result);
    if (result === null) {
        return;
    }
    var context = this;
    var fd = new FormData();
    fd.append("key", this.params.token);
    //fd.append("type", result.image);
    fd.append("album", this.params.album.hash);
    fd.append("image", result.image);

    var xhr = new XMLHttpRequest();
    xhr.upload.onprogress = this.on_progress;
    xhr.open("POST", this.params.url_upload);
    xhr.setRequestHeader("Authorization", "Client-ID " + this.params.client_id);
    xhr.onload = function () {
        var values = JSON.parse(xhr.responseText);
        console.log(values);
        if (context.format_response) {
            values = context.formatResponse(values);
        }
        if (context.on_upload !== null) {
            context.on_upload(values);
        }
    };
    xhr.onerror = function (r) {
        console.log(r);
        if (context.on_error !== null) {
            context.on_error(r);
        }
    };
    xhr.send(fd);
};


function ImgurUpload(){
    this.count = 0;
    this.max = 0;
    this.multiple = false;
    this.progressBar = null;
    this.labelDescription = null;
    this.targetOnLoad = null;
}
ImgurUpload.prototype.set = function(progressBar, labelDescription, targetOnLoad, multiple) {
    this.progressBar = document.getElementById(progressBar);
    this.labelDescription = document.getElementById(labelDescription);
    this.targetOnLoad = targetOnLoad;
    this.multiple = multiple;
};
ImgurUpload.prototype.setAndUpload = function(progressBar, labelDescription, targetOnLoad, multiple) {
    this.set(progressBar, labelDescription, targetOnLoad, multiple);
    this.upload();
};
ImgurUpload.prototype.upload = function() {
    var c = this;
    var file = document.createElement("input");
    $(file).css("display", "none");
    $(file).attr("type", "file");
    if (this.multiple) {
        $(file).attr("multiple", "");
    }
    $(file).attr("name", "filesToUpload[]");
    $(file).appendTo("body");
    $(file).change(function(){
        var files = $(this).prop("files");
        c.uploadMulti(files);
        //"ImgurUploader.uploadMulti(this.files)"
    });
    file.click();
};
ImgurUpload.prototype.uploadMulti = function(files) {
    this.count = 0;
    this.max = 0;
    for (var count in files) {
        this.uploadOne(files[count]);
    }
};
ImgurUpload.prototype.uploadOne = function(file) {
    ++this.max;
    var c = this;
    var imgur = new Imgur();
    if (imgur.validateImage(file) === null)
        return;

    imgur.on_progress = function (D) {
        var porcentaje = D.loaded / D.total;
        $(c.labelDescription).html("Subiendo imagen [" + c.count + "/" + c.max + "]: " + file.name + " (" + Math.round(porcentaje * 100) + "%)");
        $(c.progressBar).val(porcentaje);
    };
    imgur.on_upload = function (values) {
        console.log("Se ha subido una imagen.");
        ++c.count;
        if (c.count >= c.max) {
            if (c.count > 1) {
                $(c.labelDescription).html("Se han subido " + c.count + " imagenes.");
            } else {
                $(c.labelDescription).html("Se ha subido la imagen.");
            }
        }
        if(c.targetOnLoad !== null){
            c.targetOnLoad(values);
        }
    };
    imgur.upload(file);
};
ImgurUpload.prototype.createAlbum = function(title) {
    var imgur = new Imgur();
    imgur.createAlbum(title);
};
var ImgurUploader = new ImgurUpload();

/*
var ImgurUploader = {
    count: 0,
    max: 0,
    multiple: false,
    progressBar: null,
    labelDescription: null,
    targetOnLoad: null,
    set: function (progressBar, labelDescription, targetOnLoad, multiple) {
        this.labelDescription = document.getElementById(labelDescription);
        this.progressBar = document.getElementById(progressBar);
        this.targetOnLoad = targetOnLoad;
        this.multiple = multiple;
    },
    setAndUpload: function (progressBar, labelDescription, targetOnLoad, multiple) {
        this.set(progressBar, labelDescription, targetOnLoad, multiple);
        this.upload();
    },
    upload: function () {
        var file = document.createElement("input");
        $(file).css("display", "none");
        $(file).attr("type", "file");
        if (this.multiple) {
            $(file).attr("multiple", "");
        }
        $(file).attr("name", "filesToUpload[]");
        $(file).appendTo("body");
        $(file).attr("onchange", "ImgurUploader.uploadMulti(this.files)");
        file.click();
    },
    uploadMulti: function (files) {
        this.count = 0;
        this.max = 0;
        for (var count in files) {
            this.uploadOne(files[count]);
        }
    },
    uploadOne: function (file) {
        ++this.max;

        var imgur = new Imgur();
        if (imgur.validateImage(file) === null)
            return;

        imgur.on_progress = function (D) {
            var porcentaje = D.loaded / D.total;
            $(ImgurUploader.labelDescription).html("Subiendo imagen [" + ImgurUploader.count + "/" + ImgurUploader.max + "]: " + file.name + " (" + Math.round(porcentaje * 100) + "%)");
            $(ImgurUploader.progressBar).val(porcentaje);
        };
        imgur.on_upload = function (values) {
            console.log("Se ha subido una imagen.");
            ++ImgurUploader.count;
            if (ImgurUploader.count >= ImgurUploader.max) {
                if (ImgurUploader.count > 1) {
                    $(ImgurUploader.labelDescription).html("Se han subido " + ImgurUploader.count + " imagenes.");
                } else {
                    $(ImgurUploader.labelDescription).html("Se ha subido la imagen.");
                }
            }
            ImgurUploader.targetOnLoad(values);
        };
        imgur.upload(file);
    },
    createAlbum: function (title) {
        var imgur = new Imgur();
        imgur.createAlbum(title);
    }
};*/
