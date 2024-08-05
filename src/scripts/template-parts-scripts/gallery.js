;(function ($) {
  const desktopMasonry = $(".masonry")
  const mobileMasonry = $(".masonry-mobile")

  function initMasonry() {
    const windowWidth = $(window).width()

    if (windowWidth > 575) {
      desktopMasonry.masonry({
        itemSelector: ".masonry-item",
        columnWidth: ".masonry-item",
        percentPosition: true,
      })
    } else {
      mobileMasonry.masonry({
        itemSelector: ".masonry-mobile-item",
        columnWidth: ".sizer",
        percentPosition: true,
      })
    }
  }

  initMasonry()

  $(window).resize(function () {
    initMasonry()
  })
})(window.jQuery)
;(function ($) {
  const mobileVideoPlayer = $("#mobile-video-player")

  const playBtn = $("#btn-play")
  const pauseBtn = $("#btn-pause")

  function updateWidth() {
    var width = $(window).width()
    return width <= 575.98 ? "mobile" : "desktop"
  }

  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          if (entry.target.id === "mobile-video-player") {
            playBtn.show()
            pauseBtn.hide()
          } else {
            entry.target.play()
          }
        } else {
          entry.target.pause()
        }
      })
    },
    {
      root: null,
      threshold: 0.1,
    },
  )

  function observeElements() {
    const updateDevice = updateWidth()
    if (updateDevice === "mobile") {
      const mobileElementToObserve = document.querySelector(
        "#mobile-video-player",
      )
      if (mobileElementToObserve) observer.observe(mobileElementToObserve)
    } else {
      const elementToObserve = document.querySelector("#video-player")
      if (elementToObserve) observer.observe(elementToObserve)
    }
  }

  $(window).on("resize", observeElements)
  $(document).ready(observeElements)

  playBtn.on("click", function (e) {
    e.preventDefault()

    if (mobileVideoPlayer[0].paused) {
      mobileVideoPlayer[0].play()
      playBtn.hide()
      pauseBtn.show()
    }
  })

  pauseBtn.on("click", function (e) {
    e.preventDefault()

    if (!mobileVideoPlayer[0].paused) {
      mobileVideoPlayer[0].pause()
      playBtn.show()
      pauseBtn.hide()
    }
  })
})(window.jQuery)
