let prevScrollpos = window.scrollY;

const headerDiv = document.querySelector("header");
const headerMobile = document.querySelector(".header-mobile");
const headerBottom = headerDiv.offsetTop + headerDiv.offsetHeight;

window.onscroll = function () {
  const currentScrollPos = window.scrollY;

  if (prevScrollpos <= currentScrollPos) {
    headerDiv.classList.remove("header__active");
    headerDiv.style.top = "-7.2rem";
    headerMobile.classList.remove("header-mobile__active");
    headerMobile.style.top = "-7.2rem";
  } else {
    headerDiv.classList.add("header__active");
    headerDiv.style.top = "0";
    headerMobile.classList.add("header-mobile__active");
    headerMobile.style.top = "0";
  }

  prevScrollpos = currentScrollPos;

  if (currentScrollPos === 0) {
    document.querySelector(".header").classList.remove("header__active");
  }
};

const submenuMobile = document.querySelector(
  ".header-mobile-list > .menu-item-has-children"
);
const submenuMobileBlock = document.querySelector(
  ".header-mobile-list > .menu-item-object-custom > .sub-menu"
);
const submenuMobileLink = document.querySelector(
  ".header-mobile-list > .menu-item-object-custom > a"
);

if (submenuMobile) {
  submenuMobile.addEventListener("click", function () {
    submenuMobileBlock.classList.toggle("show-menu");
    submenuMobileLink.classList.toggle("b");
  });
}

jQuery(document).ready(function ($) {
  const subMenu = $(".sub-menu");

  const currentURL = window.location;
  console.log("currentURL: ", currentURL);

  if (currentURL.pathname === "/pidtverdzhennya-bronyuvannya/") {
    $(".header").addClass("booking-header");
  } else {
    $(".header").removeClass("booking-header");
  }

  subMenu.wrap("<div class='sub-menu_wrapper'></div>");
});
