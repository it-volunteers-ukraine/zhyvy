// team_section

const listTeam = document.querySelector('.team_list');

listTeam.addEventListener('click', openTmCard);

function openTmCard(event) {
    let target = event.target;

    if (target.className === 'front-sideIMG') {
        target.closest('div').classList.add('rotate-180');

        target
            .closest('div')
            .nextSibling.nextElementSibling.classList.add('rotate-0');
    }

    if (target.className === 'back-side_text') {
        target.closest('div').classList.remove('rotate-0');
        target
            .closest('div')
            .previousSibling.previousElementSibling.classList.remove('rotate-180');
    }
}

// Results_section

const swiperResults = new Swiper('.swiperResults', {
    centeredSlides: true,
    loop: true,

    breakpoints: {
        1920: {
            spaceBetween: 5,
            slidesPerView: 3,
        },

        992: {
            spaceBetween: 5,
            slidesPerView: 3,
        },
        768: {
            spaceBetween: 5,
            slidesPerView: 3,
        },

        360: {
            spaceBetween: 10,
            slidesPerView: 1,
        },
    },

    navigation: {
        nextEl: '.button-next',
        prevEl: '.button-prev',
    },
});

// honors-and-thanks section

const swiperHonors = new Swiper('.swiperHonors', {
    centeredSlides: true,
    loop: true,
    spaceBetween: 24,
    breakpoints: {
        431: {
            slidesPerView: 'auto',
            centeredSlides: false,
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

