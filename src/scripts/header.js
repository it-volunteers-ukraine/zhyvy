const headerMenu = document.querySelector('#headerMenu');
const headerMobileMenuToggle = document.querySelector('#headerMobileMenuToggle');

headerMobileMenuToggle.addEventListener('click', () => {
    headerMenu.classList.toggle('menu--mobile');
});

document.addEventListener('click', function (event) {
    if (!event.target.closest('#headerMenu')) {
        headerMenu.classList.remove('menu--mobile');
    }
});