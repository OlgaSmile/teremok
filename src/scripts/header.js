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

const check_in_date = document.querySelector(
  ".mphb_sc_search-check-in-date > label"
);
const check_out_date = document.querySelector(
  ".mphb_sc_search-check-out-date > label"
);
const search_adults = document.querySelector(".mphb_sc_search-adults > label");

if (search_adults) {
  check_in_date.innerHTML = "Дата заїзду";
  check_out_date.innerHTML = "Дата виїзду";
  search_adults.innerHTML = "Кількість гостей";
}

// const elements = document.querySelectorAll("div.mphb-room-type");

// for (let i = 0; i < elements.length; i++) {
//   console.log("i: ", i);
//   const wrapper = document.createElement("div");
//   wrapper.className = `wrapper-${i}`;

//   const image = elements[i].getElementsByClassName("mphb-room-type-images")[0];

//   if (image) {
//     elements[i].removeChild(image);
//   }
//   const elInside = elements[i].children;

//   const container = elements[i];

//   for (let j = 0; j < elInside.length; j++) {
//     console.log("elInside[j]: ", elInside[j]);
//     wrapper.appendChild(elInside[j]);
//   }

//   if (image) {
//     container.appendChild(image);
//   }
//   container.appendChild(wrapper);
// }
