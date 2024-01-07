const swiperGalleryPage = new Swiper(".gallery-page-swiper", {
    spaceBetween: 32,
    loop: true,
    keyboard: {
        enabled: true,
    },
    navigation: {
        nextEl: ".button-next",
        prevEl: ".button-prev",
    },
});


   



function initializeLightbox() {
    lightbox.option({
        'resizeDuration': 200,
        'alwaysShowNavOnTouchDevices': true,
        "disableScrolling": true,
        'wrapAround': true,
    });
}

document.addEventListener("DOMContentLoaded", function () {
    initializeLightbox();
});