console.log("footer part");
let prevScrollpos = window.scrollY;
const headerDiv = document.querySelector("header"),
  headerBottom = headerDiv.offsetTop + headerDiv.offsetHeight;
(window.onscroll = function () {
  const e = window.scrollY;
  prevScrollpos <= e
    ? (headerDiv.classList.remove("header__active"),
      (headerDiv.style.top = "-7.2rem"))
    : (headerDiv.classList.add("header__active"), (headerDiv.style.top = "0")),
    (prevScrollpos = e),
    0 === e &&
      document.querySelector(".header").classList.remove("header__active");
}),
  document.addEventListener("DOMContentLoaded", function () {
    const e = document.querySelector(
        ".header-mobile-list > .menu-item-has-children"
      ),
      t = document.querySelector(
        ".header-mobile-list > .menu-item-object-custom > .sub-menu"
      ),
      o = document.querySelector(
        ".header-mobile-list > .menu-item-object-custom > a"
      );
    o && o.classList.add("a"),
      e &&
        e.addEventListener("click", function () {
          t.classList.toggle("show-menu"),
            o.classList.contains("a")
              ? o.classList.replace("a", "b")
              : o.classList.replace("b", "a");
        });
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
              c = arguments;
            o ||
              (e.apply(n, c),
              (o = setTimeout(function () {
                o = null;
              }, t)));
          };
        })(function () {
          for (let o = 0; o < e.length; o++) {
            const n = e[o],
              c = n.offsetHeight,
              i = t(n).top,
              s = 10;
            let r = window.innerHeight + c / s;
            c < window.innerHeight &&
              (r = window.innerHeight - window.innerHeight / s),
              scrollY > i - r && scrollY < i + c
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
  });
