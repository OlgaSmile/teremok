document.addEventListener("DOMContentLoaded", function () {
  const feedbackRate = document.querySelectorAll(".rate-js")

  feedbackRate.forEach((el) => {
    const rateNumber = +el.dataset.num

    for (let i = 1; i <= rateNumber; i += 1) {
      el.insertAdjacentHTML(
        "beforeend",
        `<span class="onefeedback__star">&#9733;</span>`,
      )
    }
  })
})

function extractNumbersFromString(str) {
  const number = str.match(/\d+/g)

  return number ? Number(number[0]) : null
}
;(function ($) {
  let swiper
  let swiper2
  let currentId

  function initializeSwipers(active) {
    if (!active && currentId !== active) {
      return
    }
    swiper = new Swiper(".swiper-reviews-bottom", {
      spaceBetween: 3,
      slidesPerView: 5,
      freeMode: true,
      watchSlidesProgress: true,
    })
    swiper2 = new Swiper(".swiper-reviews-top", {
      spaceBetween: 10,
      loop: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      thumbs: {
        swiper: swiper,
      },
      keyboard: {
        enabled: true,
        onlyInViewport: true,
      },
    })
  }

  function openIamgeModal(element) {
    $(`#modal-${element.id}`).addClass("active-modal-image ")
    currentId = element.id
    const imageId = $(element).attr("image-id")

    const swiperBottom = $(`#swiper-bottom-${element.id}`)
    const swiperTop = $(`#swiper-top-${element.id}`)

    if (swiperBottom.length > 0 && swiperTop.length > 0) {
      swiperBottom.addClass("swiper-reviews-bottom")
      swiperTop.addClass("swiper-reviews-top")

      const swiperBottomClass = $(`.swiper-reviews-bottom`)
      const swiperTopClass = $(`.swiper-reviews-top`)

      if (swiperBottomClass && swiperTopClass) {
        initializeSwipers(element.id)
      }
    }
    swiper2.slideTo(imageId - 1)
  }

  function closeIamgeModal() {
    const swiperBottom = $(`#swiper-bottom-${currentId}`)
    const swiperTop = $(`#swiper-top-${currentId}`)

    swiperBottom.removeClass("swiper-reviews-bottom")
    swiperTop.removeClass("swiper-reviews-top")

    $(`#modal-${currentId}`).removeClass("active-modal-image ")
    document.body.classList.remove("overflow-hidden")

    // Знищуємо всі існуючі Swiper екземпляри
    $(".swiper-reviews-bottom").each(function () {
      if (this.swiper) {
        this.swiper.destroy()
      }
    })
    $(".swiper-reviews-top").each(function () {
      if (this.swiper) {
        this.swiper.destroy()
      }
    })
  }

  $(".img-thumbnail").on("click", function (e) {
    document.body.classList.add("overflow-hidden")
    openIamgeModal(this)
  })

  $(".close-modal").on("click", function (e) {
    closeIamgeModal()
  })

  $(".modal-swiper-backdrop").on("click", function (e) {
    if (e.target === e.currentTarget) {
      closeIamgeModal()
    }
  })
  $(document).on("keydown", function (e) {
    const active = $(".active-modal-image")
    if (!active) {
      return
    }

    if (e.key === "Escape") {
      closeIamgeModal()
    }
  })

  // watch-more
  let textBtn

  $(".reviews-btn-watch-more").on("click", function (e) {
    const btnId = $(this).attr("data-target")
    const description = $(`#desc-${btnId}`)

    if (!btnId) {
      return
    }

    if (description.hasClass("reviews-text-hidden")) {
      description.removeClass("reviews-text-hidden").addClass("active-text")

      $(`#btn-${btnId}`).addClass("btn-active-watch-more")
      $(`#btn-${btnId}`).addClass("spin-fade")

      textBtn = $(`#btn-${btnId} > span`).text()
      $(`#btn-${btnId} > span`).text("Згорнути")
    } else {
      description.removeClass("active-text").addClass("reviews-text-hidden")
      $(`#btn-${btnId}`).removeClass("spin-fade")
      $(`#btn-${btnId}`).removeClass("btn-active-watch-more")
      $(`#btn-${btnId} > span`).text(textBtn)
    }
  })

  // description visable btn

  $(window).on("resize load", function () {
    const block = $(".reviews-section__description")
    const windowWidth = $(window).width()

    block.each((idx, el) => {
      const $el = $(el)

      // Визначаємо кількість видимих рядків
      const visibleLines = $el.data("lines") || (windowWidth <= 575.98 ? 5 : 6)
      const lineHeight = parseFloat($el.css("line-height")) // Висота одного рядка
      const maxHeight = lineHeight * visibleLines // Максимальна висота

      console.log(
        `Елемент #${idx}: maxHeight=${maxHeight}, lineHeight=${lineHeight}`,
      )

      // Перевіряємо, чи потрібно обрізати текст
      console.log($el[0].scrollHeight)

      let scrollHeight = $el[0].scrollHeight - 20
      if (scrollHeight > maxHeight) {
        $el.css({
          "max-height": maxHeight + "px",
          overflow: "hidden",
          display: "-webkit-box",
          "-webkit-box-orient": "vertical",
          "-webkit-line-clamp": visibleLines,
        })

        // Показуємо кнопку
        const id = extractNumbersFromString($el[0].id)

        $(`#btn-wrapper-${id}`).addClass("visable")
      } else {
        // Якщо текст не обрізаний, скидаємо стилі
        $el.css({
          "max-height": "",
          overflow: "",
          display: "",
          "-webkit-box-orient": "",
          "-webkit-line-clamp": "",
        })

        $el.next(".btn-wrapper").removeClass("visable")
      }
    })
  })
})(window.jQuery)

// 417 496

/*   $(window).on("resize load", function () {
    const block = $(".reviews-section__description")
    const windowWidth = $(window).width()

    block.each((idx, el) => {
      const $el = $(el)
      const visableLines = $el.data("lines") || windowWidth <= 575.98 ? 5 : 6
      const lineHeight = parseFloat($el.css("line-height"))

      const maxHeight = lineHeight * visableLines

      /*       if ($el[0].scrollHeight > maxHeight) {
        $(`desc-${id}`).addClass("reviews-text-hiddenn")
        const id = extractNumbersFromString($el[0].id)

        $(`#btn-wrapper-${id}`).addClass("visable")
      } */

/*       if ($el[0].scrollHeight > maxHeight) {
        $(`desc-${id}`).css({
          "max-height": maxHeight + "px",
          overflow: "hidden",
          display: "-webkit-box",
          "-webkit-box-orient": "vertical",
          "-webkit-line-clamp": visibleLines,
        })

        // Показуємо кнопку
        const id = extractNumbersFromString($el[0].id)

        $(`#btn-wrapper-${id}`).addClass("visable")
      } */
/*     })
  }) */
