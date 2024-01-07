function showReadMoreButton() {
    document.querySelectorAll('.description').forEach((element) => {
        const textElement = element.querySelector('.text-expandable');
        const visibleHeight = textElement.clientHeight;

        textElement.classList.add('expanded');
        const expandedHeight = textElement.scrollHeight;
        textElement.classList.remove('expanded');

        if (visibleHeight !== expandedHeight) {
            element.querySelector('.button--outlined').style.display = 'inline-flex';
        }
    });
}

window.onload = showReadMoreButton;


function expandText(button) {
    const descriptionElement = button.parentElement;

    descriptionElement.querySelector('.text-expandable').classList.toggle('expanded');
    descriptionElement.scrollIntoView({behavior: 'smooth', block: 'nearest'});
    button.querySelectorAll('.btn-text').forEach((element) => element.classList.toggle('hidden'));
}

const swiper = new Swiper('.swiperInfo', {
    spaceBetween: 32,
    loop: true,
    keyboard: {
        enabled: true,
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
    });
}

document.addEventListener('DOMContentLoaded', function () {
    initializeLightbox();
});