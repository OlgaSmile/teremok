document.addEventListener("DOMContentLoaded", function () {
  //swiper
  const feedbackSwiper = new Swiper(".feedbacks__section-swiper", {
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
        navigation: {
          nextEl: ".feedbacks-custom-next-icon",
          prevEl: ".feedbacks-custom-prev-icon",
        },
      },
    },
  })

  // open modal
  const openFeedbackFormButton = document.getElementById("add_comment-js")
  const closeFeedbackFormButton = document.getElementById(
    "js-close-feedback-form",
  )

  const closeFeedbackResponse = document.getElementById(
    "js-close-feedback-response-form",
  )
  const feedbackBackdrop = document.getElementById("js-feedback-form")
  const modal = document.getElementById("feedback-modal")

  //open-close modal
  if (openFeedbackFormButton) {
    openFeedbackFormButton.addEventListener("click", showForm)

    function showForm() {
      const windowScrollY = window.scrollY
      feedbackBackdrop.classList.remove("is-hidden")
      modal.classList.remove("feedback__modal---hide")
      closeFeedbackFormButton.addEventListener("click", hideForm)
      closeFeedbackResponse.addEventListener("click", hideForm)
      feedbackBackdrop.addEventListener("mousedown", closeByBgdClick)
      window.addEventListener("keydown", closeByPressEscape)

      document.documentElement.classList.add("modal__opened")
      document.documentElement.style.top = `-${windowScrollY}px`
    }

    function hideForm() {
      feedbackBackdrop.classList.add("is-hidden")
      closeFeedbackFormButton.removeEventListener("click", hideForm)
      closeFeedbackResponse.addEventListener("click", hideForm)
      feedbackBackdrop.removeEventListener("mousedown", closeByBgdClick)

      const scrollY = parseInt(document.documentElement.style.top || "0")
      document.documentElement.classList.remove("modal__opened")
      window.scrollTo(0, -scrollY)
    }

    function closeByBgdClick(e) {
      if (e.target === feedbackBackdrop) {
        hideForm()
      }
    }

    function closeByPressEscape(e) {
      if (e.key === "Escape") {
        e.preventDefault()
        hideForm()
        window.removeEventListener("keydown", closeByPressEscape)
      }
    }
  }
})
