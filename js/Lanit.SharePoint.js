var it = it || {};

jQuery(function ($) {
    var sp = _spPageContextInfo;
    if (!sp) return;

    it.sp = (function () {
        var _this = {};

        var pathname = it.Uri.decode(location.pathname);

        _this.site = {
            url: sp.siteServerRelativeUrl,
            aurl: it.Uri.abs(sp.siteServerRelativeUrl),//siteAbsoluteUrl
            tag: sp.siteClientTag,
        };

        _this.web = {
            url: it.Uri.rel(sp.webServerRelativeUrl, sp.siteServerRelativeUrl),
            furl: sp.webServerRelativeUrl,
            aurl: it.Uri.abs(sp.webServerRelativeUrl),//sp.webAbsoluteUrl
            lcid: sp.webLanguage,
            version: sp.webUIVersion,
            logo: sp.webLogoUrl,
            template: sp.webTemplate,
            title: sp.webTitle,
            perm: {
                high: sp.webPermMasks.High,
                low: sp.webPermMasks.Low
            }
        };

        _this.page = {
            url: it.Uri.rel(pathname, sp.webServerRelativeUrl),
            furl: pathname, //sp.serverRequestPath
            aurl: it.Uri.abs(pathname),
            scope: sp.pagePersonalizationScope
        };

        _this.user = {
            id: sp.userId
        };

        _this.list = {
            guid: sp.pageListId
        };

        _this.item = {
            id: sp.pageItemId
        };

        _this.alerts = {
            enabled: sp.alertsEnabled
        };

        _this.allowSilverlight = sp.allowSilverlightPrompt;
        _this.clientServerTimeDelta = sp.clientServerTimeDelta;
        _this.crossDomainPhotosEnabled = sp.crossDomainPhotosEnabled;
        _this.isAppWeb = sp.isAppWeb;
        _this.layouts = sp.layoutsUrl;
        _this.tenantAppVersion = sp.tenantAppVersion;
        return _this;
    })();

    it.sp.auth = {
        go: function (a) {
            location.href = $(a).attr('href').replace('ReturnUrl=%2F', 'ReturnUrl=' + it.sp.web.furl)
                                             .replace('Source=%2F', 'Source=' + it.sp.page.furl);
            return false;
        }
    };

    it.sp.dialog = {
        show: function (options) {
            SP.SOD.execute('sp.ui.dialog.js', 'SP.UI.ModalDialog.showModalDialog', options);
            return false;
        },
        open: function (a) {
            return it.sp.dialog.show({
                url: $(a).attr('href'),
                allowMaximize: false,
                autoSize: true
            });
        },
        //http://jenyayel.blogspot.ru/2010/07/editorpart-inside-modal-windows.html
        property: function () {
            var prop = $("#MSOTlPn_Tbl");

            if (prop.size() == 0) return;

            var title = $("#MSOTlPn_TlPnCaptionSpan").text();

            //remove title
            $("#MSOTlPn_ToolPaneCaption").remove();

            prop.css("width", "100%")
                .css("height", "100%");

            // create modal control
            ExecuteOrDelayUntilScriptLoaded(function () {
                SP.UI.ModalDialog.showModalDialog({
                    title: title,
                    html: prop[0],
                    allowMaximize: true,
                    autoSize: true,
                    // server side close of toolpane - if don't do it, 
                    // ToolPane will appear after postback, even if its closed
                    dialogReturnValueCallback: MSOTlPn_onToolPaneCloseClick
                });

                // since modal created outside the form, move it inside form, cause 
                // we want normal behaviour of asp.net controls
                var dlgContent = $(".ms-dlgContent");
                $(dlgContent).ready(function () {
                    $("form").append(dlgContent);
                });
            }, "sp.js");
        }
    };

    it.sp.lang = (function () {
        var _this = function (langs, cur, noClick) {
            _this.detect(langs, cur);

            $('a', langs).click(function () {

                var href = $(this).attr('href');
                if (it.nav.isCurrent(href)) return false;

                if (!noClick) {
                    var lang = $(this).attr('id');
                    return lang != _this.id ? _this.change(lang) : false;
                }
                return true;
            });
        };

        _this.detect = function (langs, cur) {
            if (!cur) cur = 'cur';

            var url = it.sp.web.url;
            if (url.charAt(0) == it.Uri.slash) url = url.substr(1);
            var index = url.indexOf(it.Uri.slash);

            var lang = index > -1 ? url.substr(0, index) : url;
            var selector = 'a[id="' + lang + '"]';
            var a = $(selector, langs);

            if (!a.size()) return;

            a.addClass(cur)
            _this.id = lang;
            it.sp.web.lurl = it.Uri.rel(it.sp.web.url, it.Uri.slash + lang);
        }

        _this.lcid = sp.currentLanguage;

        _this.change = function (lang) {
            location.href = it.Uri(it.sp.site.url, lang, it.sp.web.lurl, it.sp.page.url + location.search);
            return false;
        };

        return _this;
    })();

    it.sp.screen = {
        full: {
            on: function () {
                $('html').removeClass('nofull').addClass('full');
            },
            off: function () {
                $('html').removeClass('full').addClass('nofull');
            }
        }
    }
});