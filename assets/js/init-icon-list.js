function initializeBlock($block, el) {
  if (!$block && !el) return;
  const element = $block ? $block[0].firstElementChild : el;

  const images = [...element.querySelectorAll('img')];

  images.forEach((el) => {
    el.addEventListener('click', () => {
      el.style.display = 'none';
    })
  })
}

document.addEventListener('DOMContentLoaded', () => {
  [...document.querySelectorAll('.hc-icon-row')].forEach((el) => {
    initializeBlock(null, el);
  })
})

// Initialize dynamic block preview (editor).a
if (window.acf) {
  window.acf.addAction('render_block_preview', initializeBlock);
}