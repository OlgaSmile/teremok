document.addEventListener("DOMContentLoaded", function () {
  const feedbackSwiper = new Swiper(".feedback__section-swiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      slideToClickedSlide: true,
    },
    breakpoints: {
      576: {
        slidesPerView: 2,
        slidesPerGroup: 2,
        spaceBetween: 16,
      },
      992: {
        slidesPerView: 3,
        slidesPerGroup: 3,
        spaceBetween: 16,
      },
    },
  });
});
