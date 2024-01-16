// Results_section

const swiperResults = new Swiper(".swiperResults", {
  centeredSlides: true,
  loop: true,

  breakpoints: {
    1920: {
      spaceBetween: 5,
      slidesPerView: 3,
    },

    992: {
      spaceBetween: 10,
      slidesPerView: 3,
    },
    768: {
      spaceBetween: 10,
      slidesPerView: 3,
    },
    360: {
      slidesPerView: 1,
    },
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// honors-and-thanks__section

const swiperHonor = new Swiper(".swiperHonor", {
  centeredSlides: true,
  loop: true,

  breakpoints: {
    1920: {
      spaceBetween: 20,
      slidesPerView: 5,
    },

    992: {
      slidesPerView: 3,
      spaceBetween: 16,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 16,
    },
    360: {
      slidesPerView: 1,
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// Lightbox

function initializeLightbox() {
  lightbox.option({
    resizeDuration: 200,
    alwaysShowNavOnTouchDevices: true,
    disableScrolling: true,
    albumLabel: "Слайд %1 з %2",
    fitImagesInViewport: true,
    positionFromTop: 200,
  });
}

document.addEventListener("DOMContentLoaded", function () {
  initializeLightbox();
});

console.log("skdmosdkoslmd");
