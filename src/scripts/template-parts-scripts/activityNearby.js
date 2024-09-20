function extractNumbersFromString(str) {
  const number = str.match(/\d+/g)

  return number ? Number(number[0]) : null
}
jQuery(document).ready(function ($) {
  const detaliesButton = $(".activity-nearby__detalies-btn-mobile")
  const content = $(".activity-nearby__content-mobile")

  detaliesButton.each(function () {
    $(this).on("click", function (e) {
      const id = extractNumbersFromString(e.target.id) // Ваш метод для отримання ID

      // Знаходимо відповідний контент за допомогою ID
      const content = $(`#activity-content-${id}`)

      // Перевіряємо, чи є клас "active" і додаємо/забираємо його
      if (content.hasClass("active")) {
        content.removeClass("active")
        $(`#activity-icon-${id}`).removeClass("active")
      } else {
        content.addClass("active")
        $(`#activity-icon-${id}`).addClass("active")
      }
    })
  })

  $(".section-activity-content__gallery").each(function (index, element) {
    new Swiper(element, {
      slidesPerView: 1,
      spaceBetween: 10,
      speed: 1000,
      loop: true,
      lazy: {
        loadOnTransitionStart: true,
        loadPrevNext: true,
      },
      pagination: {
        el: $(element).find(".swiper-pagination")[0], // Прив'язка до конкретного слайдера
        clickable: true,
        slideToClickedSlide: true,
      },
      navigation: {
        nextEl: $(element).find(".custom-next-icon")[0], // Прив'язка до конкретного слайдера
        prevEl: $(element).find(".custom-prev-icon")[0], // Прив'язка до конкретного слайдера
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
})
