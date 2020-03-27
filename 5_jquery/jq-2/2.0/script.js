$('a[href*="#"]:not([href="#"])').click(function() {
    /*$("li.active").removeClass("active");
    $(this).closest("li").addClass("active"); */
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    if (target.length) {
      $('html, body').animate({
        scrollTop: (target.offset().top - 60)
      }, 1000);
      return false;
    }
    }
});
$('#myScrollspy').on('activate.bs.scrollspy', function () {
  // do something…
})