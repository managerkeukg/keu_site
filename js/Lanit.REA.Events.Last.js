
function BindEventCarousel() {
    $('#eventCarousel').jcarousel();

    var itemsToScrollElement = document.getElementById('itemsToScroll');

    if (itemsToScrollElement != null) {
        $('#eventCarousel').jcarousel('scroll', itemsToScrollElement.value);
    }
}