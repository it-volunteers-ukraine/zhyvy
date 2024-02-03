function toggleCardMobileHover(element) {
    const cardGrid = document.querySelector('#teamCardsGrid');
    const cardList = cardGrid.querySelectorAll('.card');

    cardList.forEach(card => {
        if (card !== element) {
            card.classList.remove('_active');
        }
    });
    element.classList.toggle('_active');
}


// Results_section
const swiperResults = new Swiper('.swiperResults', {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 1,

    breakpoints: {
        768: {
            centeredSlides: true,
            spaceBetween: 5,
            slidesPerView: 3,
        },
    },

    navigation: {
        nextEl: '.button-next',
        prevEl: '.button-prev',
    },
});

// honors-and-thanks section

const swiperHonors = new Swiper('.swiperHonors', {
    loop: true,
    spaceBetween: 24,
    slidesPerView: 1,
    slidesPerGroup: 1,

    breakpoints: {
        431: {
            slidesPerView: 'auto',
            slidesPerGroup: 1,
        },

        993: {
            slidesPerView: 'auto',
            centeredSlides: false,
            slidesPerGroup: 3,

        },

    },
    navigation: {
        nextEl: '.button-next_honors',
        prevEl: '.button-prev_honors',
    },
});

// Lightbox

function initializeLightbox() {
    lightbox.option({
        resizeDuration: 200,
        alwaysShowNavOnTouchDevices: true,
        disableScrolling: true,
        albumLabel: 'Слайд %1 з %2',
        fitImagesInViewport: true,
        'wrapAround': true,
    });
}

document.addEventListener('DOMContentLoaded', function () {
    initializeLightbox();
});

