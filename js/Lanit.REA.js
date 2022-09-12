(function ($) {
    var jcarousel = function() {
        if (!$.jcarousel) return;

        var connector = function(itemNavigation, carouselStage) {
            return carouselStage.jcarousel('items').eq(itemNavigation.index());
        };

        $('.jcarousel').jcarousel();

        var carouselStage = $('.carousel-stage').on('jcarousel:createend', function() {
            $(this).jcarousel('scroll', 1, false);
        }).jcarousel({
            wrap: 'circular'
        }).jcarouselAutoscroll({
            interval: 10000,
            target: '+=1',
            autostart: true
        });

        var carouselNavigation = $('.carousel-navigation').jcarousel();
        carouselStage.jcarousel('items').each(function() {
            var item = $(this);

            // This is where we actually connect to items.
            var target = connector(item, carouselStage);

            item
                .on('jcarouselcontrol:active', function() {
                    carouselStage.jcarousel('scrollIntoView', this);
                    item.addClass('active');
                    item.find("div.lanit-rea-know-more").fadeIn(1500);
                })
                .on('jcarouselcontrol:inactive', function() {
                    item.removeClass('active');
                    item.find("div.lanit-rea-know-more").css("display", "none");
                })
                .jcarouselControl({
                    target: target,
                    carousel: carouselStage
                });
        });

        carouselNavigation.jcarousel('items').each(function() {
            var item = $(this);

            // This is where we actually connect to items.
            var target = connector(item, carouselStage);

            item
                .on('jcarouselcontrol:active', function() {
                    carouselNavigation.jcarousel('scrollIntoView', this);
                    item.addClass('active');
                })
                .on('jcarouselcontrol:inactive', function() {
                    item.removeClass('active');
                })
                .jcarouselControl({
                    target: target,
                    carousel: carouselStage
                });
        });

        $('.jcarousel-control-prev')
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '-=1'
            });

        $('.jcarousel-control-next')
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '+=1'
            });

        $('.jcarousel-pagination')
            .on('jcarouselpagination:active', 'a', function() {
                $(this).addClass('active');
            })
            .on('jcarouselpagination:inactive', 'a', function() {
                $(this).removeClass('active');
            })
            .jcarouselPagination();

        var windowWidth = $(window).width();
        var liWidth = $("div.carousel-stage li").width();
        var marginUl = (windowWidth - liWidth) / 2;

        $("div.carousel-stage ul").css("margin-left", marginUl + "px");

        $(window).resize(function() {
            var windowWidth = $(window).width();
            var liWidth = $("div.carousel-stage li").width();
            var marginUl = (windowWidth - liWidth) / 2;
            $("div.carousel-stage ul").css("margin-left", marginUl + "px");
        });
    };

    /* ready dom */
    $(function () {

        /* Отображаем Свойства веб частей в диалоговом окне */
        it.sp.dialog.property();

        /* Устанавливаем текущий язык */
        it.sp.lang('.lanit-rea-header-top-lang', 'lanit-rea-header-top-lang-cur', true);

        /* Инициализируем и запускаем карусель */
        jcarousel();

        /* Открываем ссылку в новом окне */
        $('a[new]').click(function (event) {
            var href = $(this).attr('href');
            var opt = $(this).attr('new');
            //http://javascript.ru/window-open
            if (!opt) opt = 'Toolbar=yes,Resizable=yes,Location=yes,Directories=yes,Status=yes,Menubar=yes,Scrollbars=yes';//,Width=550,Height=400
            var win = window.open(href, 'new', opt);
            if (!!win) win.focus();
            //http://olegorestov.ru/js/return_false_vs_preventdefault/
            return false;
        });

        $("div.lanit-rea-news-all-news-show-more, div.lanit-rea-events-all-show-more").click(function () {
            if ($(this).hasClass("collapse")) {
                $(this).removeClass("collapse");
            } else {
                $("div.lanit-rea-news-all-news-show-more").removeClass("collapse");
                $(this).addClass("collapse");
            }
        });

        $("div.lanit-rea-news-all-nav li").click(function () {
            if ($(this).hasClass("selected")) {
                $(this).removeClass("selected");
            } else {
                $(this).addClass("selected");
            }
        });

        $("div.lanit-rea-events-all-nav li").click(function () {
            if ($(this).hasClass("selected")) {
                $(this).removeClass("selected");
            } else {
                $(this).addClass("selected").siblings("li").removeClass("selected");
            }
        });
    });
})(jQuery);

var rea = {
    search: function (text) {
        text = $.trim(text);
        if (!!text) {
            var href = '/Pages/Search/results.aspx#k=' + it.Uri.encode(text);
            href = !it.sp.lang.id ? href : it.Uri(it.sp.lang.id, href);
            location.href = it.Uri(it.sp.site.url, href);
        }
        return false;
    }
};