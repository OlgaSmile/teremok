document.addEventListener("DOMContentLoaded", function () {
  //swiper
  const blogSwiper = new Swiper(".blog__section-mobile-swiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    pagination: {
      el: ".blog__swiper-pagination",
      clickable: true,
      slideToClickedSlide: true,
    },
    breakpoints: {
      576: {
        slidesPerView: 2,
        slidesPerGroup: 2,
        spaceBetween: 16,
      },
    },
  });
});
