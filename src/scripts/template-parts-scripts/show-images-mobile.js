document.addEventListener("DOMContentLoaded", function () {
  if (window.innerWidth <= 575.98) {
    const progressCircle = document.querySelector(".autoplay-progress svg")
    const progressContent = document.querySelector(".autoplay-progress span")
    new Swiper(".swiper-image-mobile", {
      spaceBetween: 0,
      centeredSlides: true,
      speed: 1000,
      lazy: {
        loadOnTransitionStart: true,
        loadPrevNext: true,
      },
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },

      loop: true,
      on: {
        autoplayTimeLeft(s, time, progress) {
          progressCircle.style.setProperty("--progress", 1 - progress)
          progressContent.textContent = `${Math.ceil(time / 2000)}s`
        },
      },
    })
  }
})
