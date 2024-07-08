document.addEventListener("DOMContentLoaded", function () {
  //swiper
  const blogSwiper = new Swiper(".blog__section-mobile-swiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: ".blog__swiper-pagination",
      clickable: true,
      slideToClickedSlide: true,
    },
  });
});
