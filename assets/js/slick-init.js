
(function ($) {

  const initializeBlock = function ($block, el) {
    if(!$block && !el) return;
    const slider = $block ? $block[0].firstElementChild : el;
    const slidesToShow = slider.dataset.slides;

    $(slider).find('.slides').not('.slick-initialized').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: slidesToShow ? slidesToShow : 3
    });
  }

  // Initialize each block on page load (front end).
  $(document).ready(function () {
    [...document.querySelectorAll('.hc-image-slider')].forEach((el) => {
      initializeBlock(null, el);
    })
  });

  // Initialize dynamic block preview (editor).a
  if (window.acf) {
    window.acf.addAction('render_block_preview', initializeBlock);
  }

})(jQuery);