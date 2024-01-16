console.log("footer part");

const dropDownBtn = document.querySelector("#footerDropDownBtn");
const dropDownMenu = document.querySelector("#footerDropDownMenu");

dropDownBtn.addEventListener("click", () => {
  if (window.innerWidth <= 992)
    dropDownMenu.classList.toggle("footer-menu-item-wrapper");
});
