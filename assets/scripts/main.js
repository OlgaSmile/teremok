console.log("footer part");
let prevScrollpos = window.scrollY;
const headerDiv = document.querySelector("header"),
  headerMobile = document.querySelector(".header-mobile"),
  headerBottom = headerDiv.offsetTop + headerDiv.offsetHeight;
window.onscroll = function () {
  const e = window.scrollY;
  prevScrollpos <= e
    ? (headerDiv.classList.remove("header__active"),
      (headerDiv.style.top = "-7.2rem"),
      headerMobile.classList.remove("header-mobile__active"),
      (headerMobile.style.top = "-7.2rem"))
    : (headerDiv.classList.add("header__active"),
      (headerDiv.style.top = "0"),
      headerMobile.classList.add("header-mobile__active"),
      (headerMobile.style.top = "0")),
    (prevScrollpos = e),
    0 === e &&
      document.querySelector(".header").classList.remove("header__active");
};
const submenuMobile = document.querySelector(
    ".header-mobile-list > .menu-item-has-children"
  ),
  submenuMobileBlock = document.querySelector(
    ".header-mobile-list > .menu-item-object-custom > .sub-menu"
  ),
  submenuMobileLink = document.querySelector(
    ".header-mobile-list > .menu-item-object-custom > a"
  );
submenuMobile &&
  submenuMobile.addEventListener("click", function () {
    submenuMobileBlock.classList.toggle("show-menu"),
      submenuMobileLink.classList.toggle("b");
  }),
  document.addEventListener("DOMContentLoaded", function () {
    const e = document.querySelectorAll(".anim-items");
    if (e.length > 0) {
      function t(e) {
        const t = e.getBoundingClientRect(),
          o = window.pageYOffset || document.documentElement.scrollTop;
        return { top: t.top + o };
      }
      window.addEventListener(
        "scroll",
        (function (e, t) {
          let o;
          return function () {
            const n = this,
              i = arguments;
            o ||
              (e.apply(n, i),
              (o = setTimeout(function () {
                o = null;
              }, t)));
          };
        })(function () {
          for (let o = 0; o < e.length; o++) {
            const n = e[o],
              i = n.offsetHeight,
              c = t(n).top,
              l = 10;
            let s = window.innerHeight + i / l;
            i < window.innerHeight &&
              (s = window.innerHeight - window.innerHeight / l),
              scrollY > c - s && scrollY < c + i
                ? n.classList.add("active")
                : n.classList.remove("active");
          }
        }, 150)
      );
    }
  }),
  document.addEventListener("DOMContentLoaded", function () {
    const e = document.querySelector(".top-to-scroll-wrapper");
    window.addEventListener("scroll", function () {
      window.scrollY > 1333
        ? e.classList.add("top-to-scroll-wrapper-active")
        : e.classList.remove("top-to-scroll-wrapper-active");
    }),
      e.addEventListener("click", function () {
        window.scrollTo({ top: 0, behavior: "smooth" });
      });
  }),
  document.addEventListener("DOMContentLoaded", function () {
    localStorage.getItem("cookiesAccepted") ||
      document.getElementById("cookie-modal").classList.add("show"),
      document
        .getElementById("btn-agree")
        .addEventListener("click", function () {
          localStorage.setItem("cookiesAccepted", "true"),
            document.getElementById("cookie-modal").classList.remove("show");
        }),
      document
        .getElementById("btn-detaliis")
        .addEventListener("click", function () {
          localStorage.setItem("cookiesAccepted", "true"),
            document.getElementById("cookie-modal").classList.remove("show");
        });
  });
