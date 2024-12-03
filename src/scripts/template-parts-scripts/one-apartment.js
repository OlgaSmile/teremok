document.addEventListener("DOMContentLoaded", function () {
  //apartments slider
  const apartmentSwiper = new Swiper(".one-apartment__gallery", {
    slidesPerView: 1,
    spaceBetween: 10,
    speed: 1000,
    loop: true,
    lazy: {
      loadOnTransitionStart: true,
      loadPrevNext: true,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      slideToClickedSlide: true,
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
  })

  new Swiper(".one-apartment__services--mobile", {
    slidesPerView: 3,
    spaceBetween: 10,
    speed: 1000,
    loop: true,
    lazy: {
      loadOnTransitionStart: true,
      loadPrevNext: true,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      slideToClickedSlide: true,
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
  })
})
