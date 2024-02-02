

document.querySelectorAll(".footer-dropdown-toggle").forEach((e) => {
  e.addEventListener("click", (e) => {
    const menu = e.currentTarget.dataset.path;
    if (window.innerWidth <= 992) {
      document.querySelectorAll(".footer-dropdown-menu").forEach((e) => {
        document
          .querySelector(`[data-target=${menu}]`)
          .classList.toggle("footer-menu-active");
        document
          .querySelector(`[data-icon=${menu}]`)
          .classList.toggle("footer-menu-item-title-icon-rotate");
      });
    }
  });
});
