// team_section ****************************

const listTeam = document.querySelector(".team_list");

listTeam.addEventListener("click", openTmCard);

function openTmCard(event) {
  let target = event.target;

  if (target.className === "front-sideIMG") {
    target.closest("div").classList.add("rotate-180");

    target
      .closest("div")
      .nextSibling.nextElementSibling.classList.add("rotate-0");
  }

  if (target.className === "back-side_text") {
    target.closest("div").classList.remove("rotate-0");
    target
      .closest("div")
      .previousSibling.previousElementSibling.classList.remove("rotate-180");
  }
}

// Results_section*************************************

const swiperResults = new Swiper(".swiperResults", {
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
    nextEl: ".button-next",
    prevEl: ".button-prev",
  },
});

// honors-and-thanks__section*************************************

const swiperHonor = new Swiper(".swiperHonor", {
  centeredSlides: true,
  loop: true,
  spaceBetween: 10,

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
      spaceBetween: 16,
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// Lightbox***********************************************

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
