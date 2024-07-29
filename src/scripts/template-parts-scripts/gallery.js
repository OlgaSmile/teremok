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
