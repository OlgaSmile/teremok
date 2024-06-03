document.addEventListener("DOMContentLoaded", function () {
  const feedbackRate = document.querySelectorAll(".rate-js");

  feedbackRate.forEach((el) => {
    console.dir(el.dataset.num);
    const rateNumber = +el.dataset.num;

    for (let i = 1; i <= rateNumber; i += 1) {
      el.insertAdjacentHTML(
        "beforeend",
        `<span class="one__feedback-star">&#9733;</span>`
      );
    }
  });
});
