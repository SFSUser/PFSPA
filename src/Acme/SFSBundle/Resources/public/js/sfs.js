/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var Utils = {
    getTextBetween: function (t1, t2, bet) {
        var p1 = bet.indexOf(t1) + t1.length;
        var p2 = bet.indexOf(t2);
        return bet.substring(p1, p2);
    },
    urlDataToArray: function (data) {
        var params = {};
        data.split("&").forEach(function (e) {
            var parts = e.split("=");
            params[parts[0]] = parts[1]
        });
        return params;
    },
    urlDataToURI: function (data) {
        var str = "";
        for (x in data) {
            str += x + "=" + data[x] + "&";
        }
        return str;
    },
    showBootstrapNotify: function (parent, type, title, desc) {
        var date = new Date();
        var str = '<div style="display:none" class="alert alert-' + type + '" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button><i>{time}</i> - <strong>{main}</strong> <span class="description">{desc}</span></div>';
        str = str.replace("{main}", title).replace("{desc}", desc).replace("{time}", date.toLocaleTimeString());
        $(parent).find(".alert:last").remove();
        var alert = $(str)
        $(parent).prepend(alert);
        $(alert).slideDown();
        return alert;
    },
    toggleBetweenElements: function (element1, element2, state_first) {
        if (state_first !== undefined) {
            if (state_first) {
                $(element1).show();
                $(element2).hide();
            } else {
                $(element1).hide();
                $(element2).show();
            }
        } else {
            if ($(element1).css("display") === "block") {
                $(element1).hide();
                $(element2).show();
            } else {
                $(element1).show();
                $(element2).hide();
            }
        }
    },
    checkJson: function (text) {
        if (/^[\],:{}\s]*$/.test(text.replace(/\\["\\\/bfnrtu]/g, '@').
                replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, ']').
                replace(/(?:^|:|,)(?:\s*\[)+/g, ''))) {
            return true;
        } else {
            return false;
        }
    }
};



var Cookies = {
    setCookie: function (name, value, days) {
        var expires = '';
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = '; expires=' + date.toGMTString();
        }
        document.cookie = name + '=' + value + expires + '; path=/;';
    },
    setPermanentCookie: function (name, value) {
        this.setCookie(name, value, 365);
    },
    removeCookie: function (name) {
        document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    },
    getCookie: function (name, pred_value) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) === ' ')
                c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0)
                return c.substring(nameEQ.length, c.length);
        }
        return pred_value;
    },
    existsCookie: function (name) {
        return (this.getCookie(name, null) !== null);
    }
};