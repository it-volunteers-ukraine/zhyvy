console.log("footer part");

document.addEventListener("DOMContentLoaded", function () {
  const dropdownBtns = document.querySelectorAll(".footer-menu-item-title");
  const dropdownContents = document.querySelectorAll(
    ".footer-menu-item-wrapper"
  );

  dropdownBtns.forEach((dropdownBtn, index) => {
    dropdownBtn.addEventListener("click", function () {
      const currentDropdownContent = dropdownContents[index];

      if (window.innerWidth <= 768) {
        currentDropdownContent.style.display =
          currentDropdownContent.style.display === "block" ? "none" : "block";
      }
    });
  });
  if (window.innerWidth <= 768) {
    document.addEventListener("click", function (event) {
      dropdownContents.forEach((dropdownContent) => {
        if (
          !event.target.matches(".footer-menu-item-title") &&
          !event.target.matches(".footer-menu-item-wrapper")
        ) {
          dropdownContent.style.display = "none";
        }
      });
    });
  }
});
