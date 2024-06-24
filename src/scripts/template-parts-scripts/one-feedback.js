document.addEventListener("DOMContentLoaded", function () {
  const feedbackRate = document.querySelectorAll(".rate-js");

  feedbackRate.forEach((el) => {
    const rateNumber = +el.dataset.num;

    for (let i = 1; i <= rateNumber; i += 1) {
      el.insertAdjacentHTML(
        "beforeend",
        `<span class="onefeedback__star">&#9733;</span>`
      );
    }
  });
});
