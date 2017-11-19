<?php

/* AcmeSFSBundle:Utils:imagenes.html.twig */
class __TwigTemplate_51782ec78aa98f8c00deffbbd3e805726668f9b13667bac3b40262c94d827b45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<div ";
        echo twig_escape_filter($this->env, $this->getContext($context, "title_desc"), "html", null, true);
        echo " id=\"image_uploader_";
        echo twig_escape_filter($this->env, $this->getContext($context, "identifier"), "html", null, true);
        echo "\" style=\"background-color: white;\" class=\"sty-box-padding-5 sty-box-margin-5 sty-box-radius-5 sty-box-dotted\">
    <script type=\"text/javascript\" id=\"script_uploader_";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "identifier"), "html", null, true);
        echo "\">
        /*
         * IMPORTANTE: 
         * 
         * De forma predeterminada los navegadores no dejan subir imagenes
         * desde javascript a los servidores, por ello toca iniciar el navegador
         * con el modificador siguiente (Chrome):
         * 
         * --disable-web-security
         * 
         */

        var Resource_";
        // line 15
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo " = {
            last_uploaded: -1,
            multiple: ";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "multiple"), "html", null, true);
        echo ",
            drop_detail: null,
            upload_detail: null,
            counter: 0,
            elements: 0,
            image_data: [],
            input: null,
            setInput: function(id) {
                this.input = document.getElementById(id);
            }, 
            loadInput: function() {
                if (this.input == null) {
                    return;
                }
                var code = \$(this.input).val();
                try{
                    if(code.charAt(0) !== \"[\"){
                        code = \"[\" + code + \"]\";
                    }
                    this.image_data = JSON.parse(code);
                }catch(e){
                    this.image_data = [];
                    console.log(\"No input-data loaded: \" + code);
                }
                this.saveInput();
                //if(this.image_data.push === undefined){
                //    this.image_data = [this.image_data];
                //}
                this.preLoadImages();
            }, 
            saveInput: function() {
                if (this.input == null) {
                    return;
                }
                var code = JSON.stringify(this.image_data);
                \$(this.input).val(code);
            },
            load: function() {
                this.image_data = ";
        // line 55
        echo $this->getContext($context, "resources");
        echo ";
                if (this.multiple) {
                    document.getElementById(\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "drop_box\").ondragover = function(e) {
                        e.preventDefault();
                    };
                    document.getElementById(\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "drop_box\").ondrop = function(e) {
                        e.preventDefault();
                        
                        var files = drop_detail = e.dataTransfer.files;
                        var urls = drop_detail = e.dataTransfer.getData(\"URL\");
                        console.log(urls)
                        Resource_";
        // line 66
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo ".setToUpload(files);
                        Resource_";
        // line 67
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo ".setToUpload(urls);
                    };
                }

                //this.preLoadImages();
            },
            setToUpload: function(files) {
                if(typeof(files) == \"string\"){
                    this.upload(files);
                    return;
                }
                for (var x = 0; x <= (files.length - 1); x++) {
                    this.upload(files[x]);
                }
            },
            preLoadImages: function() {
                for (var x in this.image_data) {
                    var val = this.image_data[x];
                    if(x == null || val == null){
                        continue;
                    }
                    if(x === undefined || val.upload === undefined){
                        continue;
                    }
                    
                    var index = parseInt(x);
                    if(index > this.counter){
                        this.counter = index;
                    }
                    
                    
                    if (Resource_";
        // line 98
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo ".multiple) {
                        this.createMin(x, true);
                        \$(\"#";
        // line 100
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "image_\" + x).attr(\"src\", val.upload.links.small_square);
                        \$(\"#";
        // line 101
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "image_link_\" + x).attr(\"href\", val.upload.links.original);
                        this.setGoodLoad(x);
                    } else {
                        this.last_uploaded = x;
                        \$(\"#";
        // line 105
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "image_original_-1\").attr(\"src\", val.upload.links.original);
                        \$(\"#";
        // line 106
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "image_-1\").attr(\"src\", val.upload.links.small_square);
                        this.setGoodLoad(-1);
                    }
                }
            },
            upload: function(file) {
                /* Is the file an image? */
                console.log(file);
                var imgur = new Imgur();
                if(imgur.validateImage(file) === null){
                    return;
                }
                
                var id = this.addImage(false);
                var image = document.getElementById(\"";
        // line 120
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "image_\" + id);
                var image_link = document.getElementById(\"";
        // line 121
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "image_link_\" + id);
                var progress_bar = document.getElementById(\"";
        // line 122
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "progress_\" + id);
                if (!this.multiple) {
                    \$(image).attr(\"src\", \"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmesfs/img/loading.gif"), "html", null, true);
        echo "\");
                }

                /* It is! */
                //document.body.className = \"uploading\";
                /* Lets build a FormData object*/
                //var fd = new FormData(); // I wrote about it: https://hacks.mozilla.org/2011/01/how-to-develop-a-html5-image-uploader/
                //fd.append(\"image\", file); // Append the file
                //fd.append(\"key\", \"6528448c258cff474ca9701c5bab6927\"); // Get your own key http://api.imgur.com/
                //var xhr = new XMLHttpRequest(); // Create the XHR (Cross-Domain XHR FTW!!!) Thank you sooooo much imgur.com
                
                //xhr.upload.onprogress = function(D) {
                imgur.on_progress = function(D) {
                    \$(progress_bar).val(D.loaded / D.total);
                }; //.closure(this);

                //xhr.onload = function() {
                imgur.on_upload = function(values) {
                    // Big win!
                    //var values = this.upload_detail = JSON.parse(xhr.responseText);
                    Resource_";
        // line 144
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo ".image_data.push(values);
                    //\$(\"#json\").html(xhr.responseText);

                    \$(\"#";
        // line 147
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "image_original_\" + id).attr(\"src\", values.upload.links.original);
                    \$(image).attr(\"src\", values.upload.links.small_square);
                    \$(image_link).attr(\"href\", values.upload.links.original);
                    Resource_";
        // line 150
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo ".setGoodLoad(id);
                    Resource_";
        // line 151
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo ".saveInput();
                };
                imgur.upload(file);
                //xhr.open(\"POST\", \"http://api.imgur.com/2/upload.json\"); // Boooom!
                //xhr.send(fd);
            },
            setBadLoad: function(id) {
                \$(\"#";
        // line 158
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "min_\" + id).css(\"background-color\", \"#FFE9E4\");
            },
            setGoodLoad: function(id) {
                \$(\"#";
        // line 161
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "min_\" + id).css(\"background-color\", \"#F4FFF9\");
            },
            changeId: function(old, newest) {
                \$(\"#";
        // line 164
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "min_\" + old).attr(\"id\", \"";
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "min_\" + newest);
                \$(\"#";
        // line 165
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "min_close_\" + old).attr(\"onclick\", \"Resource_";
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo ".removeMin(\" + newest + \")\");
            },
            removeAll: function() {
                /*\$('a[id^=";
        // line 168
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "min_close_]').each(function() {
                    \$(this).click();
                });*/
                \$(\"#";
        // line 171
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "image_container\").html(\"\");
                this.image_data = [];
                this.saveInput();
            },
            removeMin: function(id) {
                --this.elements;
                //var data = image_data[id];
                //var url = data.upload.links.delete_page;
                delete this.image_data[id];
                Resource_";
        // line 180
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo ".saveInput();

                if (this.multiple) {
                    removeElement(\"#";
        // line 183
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "min_\" + id);
                }
            },
            imageClick: function(id) {
                var url = \$(\"#";
        // line 187
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "image_link_\" + id).attr(\"href\");
                //if (this.image_click_action) {
                var win = window.open(url, '_blank');
                win.focus();
                //} else {
                //    imageClickAction(url);
                //}
            },
            uploadClick: function() {
                document.getElementById('";
        // line 196
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "upload_button').click();
            },
            addImage: function(state) {
                if (!this.multiple) {
                    return -1;
                }
                ++this.elements;
                ++this.counter;
                var id = this.counter;
                this.createMin(id, state);
                return id;
            },checkHealth:function(data){
                
            },
            createMin: function(id, state) {
                console.log(\"creating: \" + id);
                /*http://i.stack.imgur.com/R7QBbm.jpg*/
                /*http://i.stack.imgur.com/R7QBb<medium>.jpg*/
                var params = {\"id\": id};
                var element = document.createElement(\"div\");
                \$(element).html(proccessTemplate(\"#";
        // line 216
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "image_min_template\", params));
                \$(element).children(\"#";
        // line 217
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "min_\" + id).appendTo(\$(\"#";
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "image_container\"));
                if (state) {
                    \$(\"#";
        // line 219
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "progress_\" + id).val(1);
                }
            }
        };
        /* Drag'n drop stuff */

        /*Cargar imágenes de la lista anterior*/
        //window.onload = function(){
        \$(function() {
                Resource_";
        // line 228
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo ".load();
                
                Resource_";
        // line 230
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo ".setInput(\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "\");
                Resource_";
        // line 231
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo ".loadInput();
                
                //Vigilar los cambios
                \$(\"#";
        // line 234
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "\").change(function(){
                    Resource_";
        // line 235
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo ".setInput(\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "\");
                    Resource_";
        // line 236
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo ".loadInput();
                });
                
                \$(\"#";
        // line 239
        echo twig_escape_filter($this->env, $this->getContext($context, "form"), "html", null, true);
        echo "\").submit(function(event) {
                    Resource_";
        // line 240
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo ".saveInput();
                    return true;
                });
         });
       // }
    </script>
    <style type=\"text/css\">
        .preview-container {
            overflow: hidden;
        }
        .image-min-box{
            width: 110px;
            height: 121px;
            overflow: hidden;
        }
    </style>
    <script type=\"text/html\" id=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "image_min_template\">
        <div id=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "min_<%=id%>\" class=\"image-min-box sty-float-left sty-box-padding-10 sty-box-dotted sty-box-radius-5 sty-box-margin-5\" style=\"background-color:white;\">
            <a id=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "min_close_<%=id%>\" class=\"closeButton\" style=\"position:absolute;margin-left:70px;\" onclick=\"Resource_";
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo ".removeMin(<%=id%>)\"></a>
            <a id=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "image_link_<%=id%>\" target=\"_blank\"></a><img onclick=\"Resource_";
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo ".imageClick(<%=id%>)\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmesfs/img/loading.gif"), "html", null, true);
        echo "\" class=\"sty-box-radius-5\" width=\"90px\" height=\"90px\" id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "image_<%=id%>\" style=\"margin-bottom:5px;\"/>
            <progress id=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "progress_<%=id%>\" style=\"width: 100%;height:5px;\"></progress>
        </div>
    </script>
    <div id=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "drop_box\" style=\"min-height: 100px;background-color: whitesmoke;\" class=\"sty-box-padding-10 sty-box-floatcontainer sty-box-dotted sty-box-margin-10\">
        <div id=\"drop_label\" class=\"sty-box-text-center\">
            <span class=\"sty-label-gray sty-font-20\">Arrastre las imágenes o haga <a href=\"javascript:Resource_";
        // line 265
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo ".uploadClick()\" class=\"sty-label-blue\">click aquí</a> para cargarlas...</span>
        </div>
        <div id='";
        // line 267
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "image_container'></div>
    </div>  
    <div id=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "upload_message\"></div>

    <div id=\"drop_label\" class=\"sty-box-text-center\">
        <a href=\"javascript:Resource_";
        // line 272
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo ".removeAll()\" class=\"sty-label-gray sty-label-blue-hover\">Eliminar todo</a>
    </div>
    <input id=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "upload_button\" name=\"filesToUpload[]\" style=\"visibility: collapse; width: 0px;display: none;\" type=\"file\" multiple=\"\" onchange=\"Resource_";
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo ".setToUpload(this.files)\">
    <div style=\"display: none\">
        <div id=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "min_<%=id%>\" class=\"image-min-box sty-float-left sty-box-padding-10 sty-box-dotted sty-box-radius-5 sty-box-margin-5\" style=\"background-color:white;\">
            <a id=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "min_close_<%=id%>\" class=\"closeButton\" style=\"position:absolute;margin-left:70px;\" onclick=\"Resource_";
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo ".removeMin(<%=id%>)\"></a>
            <a id=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "image_link_<%=id%>\" target=\"_blank\"></a><img onclick=\"Resource_";
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo ".imageClick(<%=id%>)\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmesfs/img/loading.gif"), "html", null, true);
        echo "\" class=\"sty-box-radius-5\" width=\"90px\" height=\"90px\" id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "image_<%=id%>\" style=\"margin-bottom:5px;\"/>
            <progress id=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->getContext($context, "section_js"), "html", null, true);
        echo "progress_<%=id%>\" style=\"width: 100%;height:5px;\"></progress>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "AcmeSFSBundle:Utils:imagenes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  498 => 279,  488 => 278,  482 => 277,  471 => 274,  466 => 272,  460 => 269,  455 => 267,  445 => 263,  439 => 260,  419 => 257,  415 => 256,  396 => 240,  392 => 239,  380 => 235,  376 => 234,  370 => 231,  364 => 230,  359 => 228,  340 => 217,  336 => 216,  301 => 187,  294 => 183,  270 => 168,  262 => 165,  256 => 164,  244 => 158,  234 => 151,  224 => 147,  218 => 144,  195 => 124,  190 => 122,  165 => 106,  150 => 100,  145 => 98,  107 => 66,  98 => 60,  92 => 57,  87 => 55,  46 => 17,  41 => 15,  137 => 115,  132 => 113,  88 => 28,  83 => 26,  77 => 24,  75 => 23,  72 => 22,  56 => 16,  50 => 14,  48 => 13,  42 => 11,  34 => 8,  32 => 7,  26 => 3,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1211 => 349,  1202 => 347,  1198 => 346,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1174 => 336,  1168 => 332,  1162 => 330,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  961 => 254,  958 => 253,  955 => 252,  950 => 250,  939 => 243,  936 => 242,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  764 => 169,  753 => 164,  751 => 163,  749 => 162,  739 => 156,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  695 => 139,  694 => 138,  689 => 137,  680 => 134,  678 => 133,  675 => 132,  666 => 126,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  547 => 93,  529 => 92,  527 => 91,  524 => 90,  512 => 84,  509 => 83,  503 => 81,  501 => 80,  493 => 78,  490 => 77,  478 => 276,  470 => 73,  467 => 72,  464 => 71,  461 => 70,  459 => 69,  456 => 68,  442 => 62,  428 => 59,  426 => 58,  423 => 258,  414 => 52,  408 => 50,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  371 => 35,  368 => 34,  366 => 33,  355 => 27,  350 => 26,  344 => 24,  342 => 23,  337 => 22,  335 => 21,  332 => 20,  316 => 16,  313 => 196,  311 => 14,  308 => 13,  288 => 180,  285 => 3,  278 => 410,  273 => 394,  271 => 374,  263 => 365,  258 => 354,  250 => 161,  248 => 336,  245 => 335,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  233 => 304,  227 => 301,  225 => 298,  222 => 297,  217 => 289,  215 => 280,  210 => 176,  204 => 267,  199 => 265,  197 => 249,  191 => 246,  189 => 240,  186 => 121,  184 => 233,  181 => 232,  176 => 223,  174 => 217,  171 => 216,  169 => 210,  166 => 209,  164 => 203,  161 => 105,  159 => 196,  156 => 195,  154 => 101,  151 => 188,  149 => 118,  146 => 181,  144 => 176,  141 => 175,  139 => 169,  134 => 161,  131 => 160,  129 => 148,  126 => 147,  124 => 132,  121 => 131,  119 => 117,  116 => 116,  114 => 111,  111 => 67,  109 => 105,  106 => 104,  101 => 89,  99 => 68,  96 => 67,  94 => 57,  91 => 37,  89 => 47,  84 => 41,  81 => 40,  79 => 32,  76 => 31,  74 => 20,  71 => 19,  69 => 13,  66 => 20,  64 => 19,  61 => 2,  1393 => 199,  1385 => 413,  1378 => 197,  1374 => 195,  1366 => 194,  1359 => 193,  1356 => 192,  1353 => 400,  1350 => 189,  1342 => 188,  1333 => 187,  1330 => 186,  1327 => 185,  1324 => 183,  1316 => 182,  1309 => 384,  1307 => 383,  1304 => 179,  1301 => 178,  1298 => 176,  1290 => 175,  1283 => 378,  1281 => 173,  1278 => 172,  1264 => 171,  1249 => 367,  1243 => 163,  1241 => 162,  1238 => 161,  1232 => 159,  1229 => 158,  1221 => 355,  1218 => 354,  1212 => 153,  1209 => 152,  1203 => 150,  1201 => 149,  1195 => 345,  1191 => 131,  1177 => 337,  1171 => 862,  1165 => 860,  1163 => 859,  1159 => 329,  1147 => 849,  1134 => 838,  1130 => 836,  1128 => 835,  1077 => 305,  982 => 261,  968 => 684,  964 => 255,  960 => 682,  956 => 681,  952 => 251,  947 => 249,  943 => 675,  934 => 241,  932 => 667,  876 => 218,  872 => 613,  854 => 598,  850 => 597,  831 => 581,  823 => 578,  813 => 571,  801 => 185,  797 => 559,  795 => 558,  767 => 170,  756 => 165,  750 => 524,  746 => 161,  740 => 521,  729 => 155,  723 => 510,  719 => 509,  704 => 497,  700 => 496,  696 => 140,  690 => 492,  683 => 135,  679 => 487,  639 => 450,  618 => 432,  612 => 429,  566 => 386,  560 => 383,  553 => 379,  544 => 373,  536 => 368,  532 => 367,  525 => 363,  515 => 85,  506 => 350,  496 => 79,  480 => 75,  476 => 329,  469 => 327,  462 => 323,  458 => 322,  454 => 321,  450 => 265,  441 => 314,  437 => 61,  433 => 60,  429 => 259,  409 => 293,  405 => 49,  402 => 290,  397 => 289,  386 => 236,  384 => 279,  374 => 36,  363 => 32,  361 => 272,  357 => 271,  352 => 269,  347 => 219,  338 => 267,  329 => 266,  322 => 260,  320 => 259,  314 => 243,  310 => 240,  307 => 239,  304 => 238,  299 => 8,  293 => 6,  290 => 5,  284 => 232,  281 => 411,  279 => 230,  276 => 171,  268 => 373,  266 => 366,  260 => 363,  255 => 353,  253 => 342,  247 => 218,  242 => 217,  236 => 216,  232 => 214,  230 => 150,  226 => 212,  220 => 290,  216 => 210,  212 => 279,  209 => 208,  207 => 269,  205 => 206,  202 => 266,  194 => 248,  188 => 122,  182 => 120,  179 => 224,  136 => 168,  128 => 70,  120 => 65,  112 => 60,  104 => 90,  86 => 27,  78 => 35,  58 => 17,  49 => 18,  40 => 10,  33 => 8,  29 => 6,  24 => 4,  21 => 3,  19 => 2,);
    }
}
