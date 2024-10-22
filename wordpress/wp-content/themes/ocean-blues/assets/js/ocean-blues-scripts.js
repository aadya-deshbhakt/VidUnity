(function ($) {
  "use strict";
  $("#ocean-blues-main-content").click(function () {
    $("html, body").animate(
      {
        scrollTop: $($.attr(this, "href")).offset().top,
      },
      500
    );
    return false;
  });
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery(".ocean-blues-scrollto-top a").fadeIn();
    } else {
      jQuery(".ocean-blues-scrollto-top a").fadeOut();
    }
  });
  jQuery(".ocean-blues-scrollto-top a").click(function () {
    jQuery("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });
})(jQuery);
