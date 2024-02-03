const speed = 250;
const heroTitle = document.querySelector('#animatedTitle');
const delay = 800;

function typeEffect(element, speed) {
    const text = element.innerHTML;
    element.innerHTML = '';

    let i = 0;

    setTimeout(function () {
        element.classList.add('_active');

        const timer = setInterval(function () {
            if (i < text.length) {
                element.append(text.charAt(i));
                i++;
            } else {
                clearInterval(timer);
            }
        }, speed);
    }, delay);
}

typeEffect(heroTitle, speed);


const swiper = new Swiper('.swiperGallery', {
    spaceBetween: 32,
    loop: true,
    keyboard: {
        enabled: true,
    },
    slidesPerView: 1,
    slidesPerGroup: 1,
    breakpoints: {
        577: {
            slidesPerView: 2,
            slidesPerGroup: 2,
        },
        993: {
            slidesPerView: 3,
            slidesPerGroup: 3,
        },
    },
    navigation: {
        nextEl: '.button-next',
        prevEl: '.button-prev',
    },
});

function initializeLightbox() {
    lightbox.option({
        'resizeDuration': 200,
        'alwaysShowNavOnTouchDevices': true,
        'disableScrolling': true,
        'wrapAround': true,
        'albumLabel': 'Слайд %1 з %2',
    });
}

document.addEventListener('DOMContentLoaded', function () {
    initializeLightbox();
});

function showAccordionCard(element) {
    const cardGrid = document.querySelector('#workDirectionsGrid');
    const cardList = cardGrid.querySelectorAll('.card');
    const currentCard = element.parentElement;

    cardList.forEach(card => {
        if (card !== currentCard) {
            card.classList.remove('_active');
        }
    });
    currentCard.classList.toggle('_active');
}