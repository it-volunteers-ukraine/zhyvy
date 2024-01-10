const swiper = new Swiper(".work__gallery", {
  loop: true,
  keyboard: {
    enabled: true,
  },
  slidesPerView: 1,
  slidesPerGroup: 1,
  direction: "horizontal",
  spaceBetween: 32,
  breakpoints: {
    992: {
      slidesPerView: 2,
      slidesPerGroup: 2,
      spaceBetween: 24,
      direction: "vertical",
    },
    768: {
      slidesPerView: 2,
      slidesPerGroup: 2,
      direction: "horizontal",
    },
  },
  navigation: {
    nextEl: ".button-next",
    prevEl: ".button-prev",
  },
});

function initializeLightbox() {
  lightbox.option({
    resizeDuration: 200,
    alwaysShowNavOnTouchDevices: true,
    disableScrolling: true,
    wrapAround: true,
  });
}

document.addEventListener("DOMContentLoaded", function () {
  initializeLightbox();
});

// document.addEventListener("resize", function () {
//   swiper.changeDirection("horizontal", true);
// });
