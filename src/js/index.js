
document.addEventListener('DOMContentLoaded', function () {
    const hamburgerButton = document.getElementById('hamburger-button');
    const navbarSticky = document.getElementById('navbar-sticky');

    hamburgerButton.addEventListener('click', function () {
        navbarSticky.classList.toggle('hidden');
        const expanded = hamburgerButton.getAttribute('aria-expanded') === 'true' || false;
        hamburgerButton.setAttribute('aria-expanded', !expanded);
    });
});
