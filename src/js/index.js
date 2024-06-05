document.addEventListener('DOMContentLoaded', function () {
    const hamburgerButton = document.getElementById('hamburger-button');
    const navbarSticky = document.getElementById('navbar-sticky');

    hamburgerButton.addEventListener('click', function () {
        const isExpanded = hamburgerButton.getAttribute('aria-expanded') === 'true' || false;
        hamburgerButton.setAttribute('aria-expanded', !isExpanded);
        navbarSticky.classList.toggle('hidden');
    });
});
