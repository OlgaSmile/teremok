document.addEventListener("DOMContentLoaded", function () {
  //apartments slider
  const apartmentSwiper = new Swiper(".one-apartment__gallery", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    lazy: {
      loadOnTransitionStart: true,
      loadPrevNext: true,
    },
    navigation: {
      nextEl: ".custom-next-icon",
      prevEl: ".custom-prev-icon",
    },
    breakpoints: {
      576: {
        initialSlide: 1,
        spaceBetween: 0,
        centeredSlides: true,
        slidesPerView: "auto",
      },
    },
  });

  // services slider

  const servicesSwiper = new Swiper(".one-apartment__services--mobile", {
    slidesPerView: "auto",
    spaceBetween: 6,
    autoHeight: true,
    lazy: {
      loadOnTransitionStart: true,
      loadPrevNext: true,
    },
  });
});
