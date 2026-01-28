document.addEventListener('DOMContentLoaded', function() {
    const burgerMenu = document.getElementById('burger-menu');
    const burgerToggle = document.getElementById('burger-toggle');
    const burgerOverlay = document.getElementById('burger-overlay');

    if (burgerToggle && burgerMenu && burgerOverlay) {
        burgerToggle.addEventListener('click', function() {
            burgerMenu.classList.toggle('open');
            burgerOverlay.classList.toggle('active');
        });

        burgerOverlay.addEventListener('click', function() {
            burgerMenu.classList.remove('open');
            burgerOverlay.classList.remove('active');
        });
    }
});