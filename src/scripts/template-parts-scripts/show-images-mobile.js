document.addEventListener("DOMContentLoaded", function () {
  if (window.innerWidth <= 575.98) {
    const progressCircle = document.querySelector(".autoplay-progress svg")
    const progressContent = document.querySelector(".autoplay-progress span")
    new Swiper(".swiper-image-mobile", {
      spaceBetween: 0,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      loop: true,
      on: {
        autoplayTimeLeft(s, time, progress) {
          progressCircle.style.setProperty("--progress", 1 - progress)
          progressContent.textContent = `${Math.ceil(time / 1000)}s`
        },
      },
    })
  }
})
