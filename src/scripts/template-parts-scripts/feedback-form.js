document.addEventListener("DOMContentLoaded", function () {
  //image input
  const imageInputs = document.querySelectorAll(".hide-if-value input");
  const imageTexts = document.querySelectorAll(".hide-if-value p");

  if (imageInputs) {
    // hide default tags
    imageInputs.forEach((inp) => {
      inp.classList.add("visually-hidden");
    });
    imageTexts.forEach((inp) => {
      inp.classList.add("visually-hidden");
    });

    // add custom class
    const imageWrap = document.querySelectorAll(".hide-if-value");
    imageWrap.forEach((wrap) => {
      wrap.classList.add("custom-acf-btn");
    });
  }

  (function ($) {
    $(document).ready(function () {
      $('input[type="file"]').on("change", function () {
        var $input = $(this);
        var $parent = $input.closest(".acf-image-uploader");
        var file = $input[0].files[0];

        if (file) {
          var reader = new FileReader();

          reader.onload = function (e) {
            $parent.find(".show-if-value img").attr("src", e.target.result);
            $parent.find(".show-if-value").show();
            $parent.find(".hide-if-value").hide();
          };

          reader.readAsDataURL(file);
        } else {
          $parent.find(".show-if-value img").attr("src", "");
          $parent.find(".show-if-value").hide();
          $parent.find(".hide-if-value").show();
        }
      });

      $(".acf-icon.-cancel").on("click", function (e) {
        e.preventDefault();
        var $parent = $(this).closest(".acf-image-uploader");
        $parent.find('input[type="file"]').val("");
        $parent.find(".show-if-value img").attr("src", "");
        $parent.find(".show-if-value").hide();
        $parent.find(".hide-if-value").show();
      });
    });
  })(jQuery);

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
