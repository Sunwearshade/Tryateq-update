document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll('.list-item');
  let index = 0;

  function highlightItem() {
    if (index < items.length) {
      const currentItem = items[index];
      currentItem.classList.add('active'); 

      const palomitasContainer = currentItem.querySelector('.palomitas');
      if (palomitasContainer) {
        setTimeout(() => {
          palomitasContainer.classList.remove('hidden'); 
          palomitasContainer.style.opacity = 1; 
        }, 500); 
      }

      index++;
      setTimeout(highlightItem, 1000); 
    }
  }

  setTimeout(highlightItem, 3000); 
});
