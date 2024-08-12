document.addEventListener("DOMContentLoaded", function () {
  function setupAnimation(blockId) {
    const images = document.querySelectorAll(
      `#${blockId} .image-animate-mobile`,
    )
    if (images.length === 0) return

    let currentIndex = 0

    function showNextImage() {
      const previousIndex = currentIndex
      currentIndex = (currentIndex + 1) % images.length

      images[previousIndex].classList.remove("active")
      images[previousIndex].classList.add("previous")

      images[currentIndex].classList.add("active")
      images[currentIndex].style.left = "100%" // Почати з правого краю

      setTimeout(() => {
        images[currentIndex].style.transform = "translateX(-100%)"
      }, 10) // Трохи затримки для запуску анімації
    }

    images[currentIndex].classList.add("active")

    setInterval(showNextImage, 2000) // 1 second for the animation, 1 second pause
  }

  setupAnimation("block1")
  setupAnimation("block2")
})
