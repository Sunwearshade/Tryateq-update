document.addEventListener("DOMContentLoaded", () => {
    const items = document.querySelectorAll('.list-item');
    let index = 0;
  
    function highlightItem() {
      if (index < items.length) {
        items[index].classList.add('active'); 
        index++;
        setTimeout(highlightItem, 1000); 
      }
    }
  
    setTimeout(highlightItem, 3000);
  });
  