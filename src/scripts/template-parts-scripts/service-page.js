/* services img speciality */
;(function ($) {
  const slide = $(".anim-slide-wrapper-primary")
  const slideSecondary = $(".anim-slide-wrapper-secondary")

  const windowWidth = $(window).width()

  if (slide && windowWidth <= 575) {
    const changeSlide = () => {
      if (!slide.hasClass("slide-width-animate")) {
        slide.addClass("slide-width-animate")

        setTimeout(() => {
          slide.removeClass("slide-width-animate")
        }, 5000)
      }
    }

    const sliders = () => {
      setInterval(() => {
        changeSlide()
      }, 5000)
    }

    sliders()
  }

  if (slideSecondary && windowWidth <= 575) {
    const changeSlide = () => {
      if (!slideSecondary.hasClass("slide-width-animate-secondary")) {
        slideSecondary.addClass("slide-width-animate-secondary")

        setTimeout(() => {
          slideSecondary.removeClass("slide-width-animate-secondary")
        }, 5000)
      }
    }

    const sliders = () => {
      setInterval(() => {
        changeSlide()
      }, 5000)
    }

    sliders()
  }
})(window.jQuery)
