document.addEventListener("DOMContentLoaded", function () {
  //parallax
  window.onload = function () {
    const parallax = document.getElementById("enter-parallax");

    if (parallax) {
      const bgImages = document.querySelectorAll(".enter-parallax-bg");
      bgImages.forEach((img) => {
        img.classList.add("parallax");
      });
    }
  };
});
