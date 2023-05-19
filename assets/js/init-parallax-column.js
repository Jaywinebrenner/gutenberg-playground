function initializeBlock($block, el) {
    if (!$block && !el) return;
    const element = $block ? $block[0].firstElementChild : el;

    console.log("ParallaxXX")
  

  }
  
  document.addEventListener('DOMContentLoaded', () => {
    [...document.querySelectorAll('.parallax-column')].forEach((el) => {
      initializeBlock(null, el);
    })
  })
  
  // Initialize dynamic block preview (editor).a
  if (window.acf) {
    window.acf.addAction('render_block_preview', initializeBlock);
  }