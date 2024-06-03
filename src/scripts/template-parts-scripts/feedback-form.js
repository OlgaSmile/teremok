document.addEventListener("DOMContentLoaded", function () {
  //image input
  const imageInputs = document.querySelectorAll(".hide-if-value p");

  if (imageInputs) {
    imageInputs.forEach((inp) => {
      inp.classList.add("visually-hidden");
    });
    const imageWrap = document.querySelectorAll(".hide-if-value");
    imageWrap.forEach((wrap) => {
      wrap.insertAdjacentHTML(
        "beforeend",
        `<p><a data-name="add" class="acf-button button custom-acf-btn" href="#"><span class="plus-sign"></span></a></p>`
      );
    });
  }

  //range
  const hiddenInput = document.getElementById("acf-field_665b1c1ee07a5");
  if (hiddenInput) {
    const range = document.querySelector("input#acf-field_665b1c1ee07a5");
    range.classList.add("visually-hidden");
    const rangeBox = document.querySelector(".acf-range-wrap");
    rangeBox.insertAdjacentHTML(
      "beforeend",
      `<div class="star-rating">
      <span class="star" data-value="5">&#9733;</span>
      <span class="star" data-value="4">&#9733;</span>
      <span class="star" data-value="3">&#9733;</span>
      <span class="star" data-value="2">&#9733;</span>
      <span class="star" data-value="1">&#9733;</span>
    </div>`
    );

    const stars = document.querySelectorAll(".star");

    stars.forEach((star) => {
      star.addEventListener("click", function () {
        const value = this.getAttribute("data-value");
        hiddenInput.value = value;

        stars.forEach((s) => s.classList.remove("selected"));
        this.classList.add("selected");
        let next = this.nextElementSibling;
        while (next) {
          next.classList.add("selected");
          next = next.nextElementSibling;
        }
      });
    });
  }
});
