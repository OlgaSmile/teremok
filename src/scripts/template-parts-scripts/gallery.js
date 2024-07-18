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
