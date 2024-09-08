document.addEventListener('DOMContentLoaded', function() {
    const menuButton = document.querySelector('.developer-menu-button');
    const developerMenu = document.querySelector('.developer-menu');

    if (menuButton) {
        menuButton.addEventListener('click', function() {
            developerMenu.style.display = developerMenu.style.display === 'block' ? 'none' : 'block';
        });

        window.addEventListener('click', function(event) {
            if (!menuButton.contains(event.target) && !developerMenu.contains(event.target)) {
                developerMenu.style.display = 'none';
            }
        });
    }

    const sidebarToggle = document.querySelector('.sidebar-toggle');
    const sidebar = document.querySelector('.sidebar');
    const body = document.body;

    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', function() {
            body.classList.toggle('sidebar-active');
        });
    }
});