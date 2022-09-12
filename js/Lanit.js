var it = (function () {
    var _this = {};

    _this.str = function () {
        var args = arguments;
        var str = "";
        for (var i = 0; i < args.length; i++) {
            str += args[i];
        }
        return str;
    }

    //http://javascriptweblog.wordpress.com/2010/12/07/namespacing-in-javascript/
    //_this.namespace = _this.ns = {

    //};

    return _this;
})();

it.Uri = (function () {
    var slash = "/";
    var _this = function () {
        var args = arguments;
        if (args.length <= 0) return null;
        var prev = args[0];
        if (!prev) prev = slash;
        for (var i = 1; i < args.length; i++) {
            var next = args[i];
            if (!next) continue;

            var len = prev.length - 1;
            var last = prev.charAt(len);
            var first = next.charAt(0);

            if (last == slash && first == slash) prev += next.substr(1);
            else if (last != slash && first != slash) prev += slash + next;
            else prev += next;
        }
        return prev;
    }

    _this.slash = slash;

    _this.rel = function (url, base) {
        if (!url) return slash;
        if (!base) base = it.nav.origin;
        if (base != slash && url.indexOf(base) == 0) url = url.substr(base.length);
        return !url ? slash : url;
    }

    _this.decode = function (uri) {
        return decodeURI(uri);
    }

    _this.encode = function (uri) {
        return encodeURI(uri);
    }

    _this.abs = function (relative) {
        return _this(it.nav.origin, relative);
    }

    _this.isAbs = function (uri) {

    }

    _this.isRel = function (uri) {

    }

    _this.is = function (uri) {
        return uri.indexOf(slash) >= 0;
    }

    return _this;
})();

/**
* Объект для работы с навигацией.
*/
it.nav = {
    _l: location,

    origin: it.str(location.protocol, "//", location.host),

    page: location.pathname.substr(location.pathname.lastIndexOf('/') + 1),

    //referrer: $('input[id="Lanit.SharePoint.UI.Views.SPManager.Referrer"]').val(),

    isCurrent: function (url) {
        return this._l.pathname == url || this._l.href == url || this.page == url;
    },

    /**
    * Метод для перехода на другую страницу.
    */
    go: (function () {

        /**
        * @constructor
        */
        var _this = function () {
            var url = this.build.apply(this, arguments);
            if (!this.isCurrent(url)) {
                this._l.href = url;
            }
            return false;
        };

        /**
        * @static
        
        _this.merge = function (a, b) {

            var s = _l.search;
            return _this();
        };*/

        return _this;
    })(),

    /**
    * Метод для постройки url
    */
    build: (function () {

        //var arg = "?p=Торги&y=2012";
        //var arg = {'p':"Торги", 'y':12};
        //var arg = new Array();
        //arg["p"] = 'Торги';
        //arg["y"] = 2012;
        //var a = ['p', 'y']; 
        //var b = ['Торги',2012];
        //var arg = [['p', 'Торги'], ['y',2012]];

        var _this = function () {
            var url = "";
            var i = 0;
            var a = arguments[i];
            if (!a) return url;

            if ($.type(a) == "string") {
                url = a;
            } else if (it.dom.is(a, 'a')) {
                url = $(a).attr('href');
            }
            if (!!url) {
                a = arguments[++i];
                if (!a) return it.Uri.encode(url);
            }

            var search = "";
            if ($.isArray(a)) {
                var b = arguments[++i];
                if (!!b && $.isArray(b)) {
                    search = this.build.keyval(a, b);
                } else {
                    search = this.build.pair(a);
                }
            } else if ($.isPlainObject(a)) {
                search = this.build.obj(a);
            }

            if (!!search) search = "?" + search;

            return it.Uri.encode(url + search);
        };

        var build = function (key, val, isFirst) {
            var query = "";
            if (!!key && !!val) {
                if (!isFirst) query += "&";
                query += key + "=" + val;
            }
            return query;
        }

        _this.obj = function (obj) {
            var query = "";
            for (var key in obj) {
                var val = obj[key];
                query += build(key, val, !query);
            }
            return query;
        };

        _this.keyval = function (keys, vals) {
            var query = "";
            for (var i = 0; i < keys.length; i++) {
                var key = keys[i];
                var val = vals[i];
                query += build(key, val, !query);
            }
            return query;
        };

        _this.pair = function (arr) {
            var query = "";
            for (var i = 0; i < arr.length; i++) {
                var key = arr[i][0];
                var val = arr[i][1];
                query += build(key, val, !query);
            }
            return query;
        };

        return _this;
    })()
};

it.portal = {
    internal: function () {
        $('html').removeClass('external').addClass('internal');
    },
    external: function () {
        $('html').removeClass('internal').addClass('external');
    }
}

it.dom = {
    is: function (o, tag) {
        var isDom = typeof HTMLElement === "object"
            ? o instanceof HTMLElement
            : o && typeof o === "object" && o !== null && o.nodeType === 1 && typeof o.nodeName === "string";

        if (isDom && !!tag) {
            isDom = $(o).prop("tagName").toLowerCase() == tag.toLowerCase();
        }
        return isDom;
    },

    isNode: function (o) {
        return typeof Node === "object"
            ? o instanceof Node
            : o && typeof o === "object" && typeof o.nodeType === "number" && typeof o.nodeName === "string"
    }
}