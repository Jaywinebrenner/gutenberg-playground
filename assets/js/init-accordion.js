function initializeBlock($block, el) {
    if (!$block && !el) return;
    const element = $block ? $block[0].firstElementChild : el;

    console.log( "accordion")
  
    var acc = document.getElementsByClassName("accordion-button");
    var i;
    
    for (i = 0; i < acc.length; i++) {
        console.log("i", i)
      acc[i].addEventListener("click", function() {
        console.log("clicked")
        this.classList.toggle("active");

        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
          panel.style.display = "none";
        } else {
          panel.style.display = "block";
        }
      });
    }
  }
  
  document.addEventListener('DOMContentLoaded', () => {
    [...document.querySelectorAll('.accordion')].forEach((el) => {
      initializeBlock(null, el);
    })
  })
  
  // Initialize dynamic block preview (editor).a
  if (window.acf) {
    window.acf.addAction('render_block_preview', initializeBlock);
  }