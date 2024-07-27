document.addEventListener("DOMContentLoaded", function () {
  function throttle(func, limit) {
    let timeout
    return function () {
      const context = this
      const args = arguments
      if (!timeout) {
        func.apply(context, args)
        timeout = setTimeout(function () {
          timeout = null
        }, limit)
      }
    }
  }

  const animItems = document.querySelectorAll(".anim-items")

  if (animItems.length > 0) {
    window.addEventListener("scroll", throttle(animOnScroll, 150))

    function animOnScroll() {
      for (let index = 0; index < animItems.length; index++) {
        const animItem = animItems[index]
        const animItemHeight = animItem.offsetHeight
        const animItemOffset = offset(animItem).top
        const animStart = 10
        let animItemPoint = window.innerHeight + animItemHeight / animStart
        if (animItemHeight < window.innerHeight) {
          animItemPoint = window.innerHeight - window.innerHeight / animStart
        }

        if (
          scrollY > animItemOffset - animItemPoint &&
          scrollY < animItemOffset + animItemHeight
        ) {
          animItem.classList.add("active")
        } else {
          animItem.classList.remove("active")
        }
      }
    }

    function offset(el) {
      const rect = el.getBoundingClientRect(),
        scrollTop = window.pageYOffset || document.documentElement.scrollTop
      return {
        top: rect.top + scrollTop,
      }
    }
  }
})

document.addEventListener("DOMContentLoaded", function () {
  const btnScrollTop = document.querySelector(".top-to-scroll-wrapper")

  function handleScroll() {
    const scrollY = window.scrollY
    if (scrollY > 4000) {
      btnScrollTop.classList.add("top-to-scroll-wrapper-active")
    } else {
      btnScrollTop.classList.remove("top-to-scroll-wrapper-active")
    }
  }

  function scrollToTop() {
    window.scrollTo({ top: 0, behavior: "smooth" })
  }

  window.addEventListener("scroll", handleScroll)

  btnScrollTop.addEventListener("click", scrollToTop)
})
