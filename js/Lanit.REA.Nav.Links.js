(function ($) {
    $(function () {
        $("span.expand").click(function () {
            if ($(this).hasClass("collapse")) {
                $(this).removeClass("collapse").siblings("div.lanit-rea-expand").slideUp(300);
                //$("div.lanit-rea-links-expand").css("display", "none");
            } else {
                $("span.expand").removeClass("collapse");
                $("div.lanit-rea-expand").css("display", "none");
                //$("div.lanit-rea-links-expand").css("display", "block");
                $(this).addClass("collapse").siblings("div.lanit-rea-expand").slideDown(300);
            }
        });
    });
})(jQuery);
(function ($) {
    $(function () {
        $("span.expand2").click(function () {
            if ($(this).hasClass("collapse2")) {
                $(this).removeClass("collapse2").siblings("div.lanit-rea-expand").slideUp(300);
                //$("div.lanit-rea-links-expand").css("display", "none");
            } else {
                $("span.expand2").removeClass("collapse2");
                $("div.lanit-rea-expand").css("display", "none");
                //$("div.lanit-rea-links-expand").css("display", "block");
                $(this).addClass("collapse2").siblings("div.lanit-rea-expand").slideDown(300);
            }
        });
    });
})(jQuery);