let prevScrollpos = window.scrollY

const headerDiv = document.querySelector("header")
const headerBottom = headerDiv.offsetTop + headerDiv.offsetHeight

window.onscroll = function () {
  const currentScrollPos = window.scrollY

  if (prevScrollpos <= currentScrollPos) {
    headerDiv.classList.remove("header__active")
    headerDiv.style.top = "-7.2rem"
  } else {
    headerDiv.classList.add("header__active")
    headerDiv.style.top = "0"
  }

  prevScrollpos = currentScrollPos

  if (currentScrollPos === 0) {
    document.querySelector(".header").classList.remove("header__active")
  }
}

const submenuMobile = document.querySelector(
  ".header-mobile-list > .menu-item-has-children",
)
const submenuMobileBlock = document.querySelector(
  ".header-mobile-list > .menu-item-object-custom > .sub-menu",
)
const submenuMobileLink = document.querySelector(
  ".header-mobile-list > .menu-item-object-custom > a",
)
submenuMobile.addEventListener("click", function () {
  submenuMobileBlock.classList.toggle("show-menu")
  if (submenuMobileLink.classList.contains("a")) {
    submenuMobileLink.classList.replace("a", "b")
  } else {
    submenuMobileLink.classList.replace("b", "a")
  }
})
