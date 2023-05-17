(function ($) {

  const initializeBlock = function ($block) {
    $(".hc-image-slider .slides").not('.slick-initialized').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 3,
    });
  }

  // Initialize each block on page load (front end).
  $(document).ready(function () {
    initializeBlock();
  });

  // Initialize dynamic block preview (editor).a
  if (window.acf) {
    window.acf.addAction('render_block_preview', initializeBlock);
  }

})(jQuery);