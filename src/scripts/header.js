let prevScrollpos = window.scrollY;

const headerDiv = document.querySelector("header");
const headerMobile = document.querySelector(".header-mobile");
const headerBottom = headerDiv.offsetTop + headerDiv.offsetHeight;

window.addEventListener("scroll", () => {
  const currentScrollY = window.scrollY;

  if (currentScrollY > prevScrollpos) {
    headerDiv.classList.add("header__hidden");
    headerMobile.classList.add("header__hidden");
  } else {
    headerDiv.classList.remove("header__hidden");
    headerDiv.classList.add("header__active");
    headerMobile.classList.remove("header__hidden");
  }

  if (currentScrollY === 0) {
    headerDiv.classList.remove("header__active");
  }
  prevScrollpos = currentScrollY;
});

const submenuMobile = document.querySelector(
  ".header-mobile-list > .menu-item-has-children"
);
const submenuMobileBlock = document.querySelector(
  ".header-mobile-list > .menu-item-object-custom > .sub-menu"
);
const submenuMobileLink = document.querySelector(
  ".header-mobile-list > .menu-item-object-custom > a"
);

jQuery(document).ready(function ($) {
  const subMenu = $(".sub-menu");

  subMenu.find($("a")).click(() => {
    location.reload();
  });

  const currentURL = window.location;

  if (
    currentURL.pathname === "/pidtverdzhennya-bronyuvannya/" ||
    currentURL.pathname.includes("accommodation")
  ) {
    $(".header").addClass("booking-header");
  } else {
    $(".header").removeClass("booking-header");
  }

  subMenu.wrap("<div class='sub-menu_wrapper'></div>");
});
