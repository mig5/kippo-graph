!function ($) {
    var sPath = window.location.pathname;
    var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
    $('a[href="'+ sPage +'"]').parent().addClass('active');
}(window.jQuery);
