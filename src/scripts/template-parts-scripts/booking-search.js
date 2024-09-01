function getNightPriceText(number) {
  let text = "за "

  const lastDigit = number % 10
  const lastTwoDigits = number % 100

  if (lastTwoDigits >= 11 && lastTwoDigits <= 14) {
    text += number + " ночей"
  } else if (lastDigit === 1) {
    text += number + " ніч"
  } else if (lastDigit >= 2 && lastDigit <= 4) {
    text += number + " ночі"
  } else {
    text += number + " ночей"
  }

  return text
}

/* const check_in_date = document.querySelector(
  ".mphb_sc_search-check-in-date > label"
);
const check_out_date = document.querySelector(
  ".mphb_sc_search-check-out-date > label"
);
const search_adults = document.querySelector(".mphb_sc_search-adults > label");

check_in_date.innerHTML = "Дата заїзду";
check_out_date.innerHTML = "Дата виїзду";
search_adults.innerHTML = "Кількість гостей";
 */

jQuery(document).ready(function ($) {
  const searchInDate = $(".mphb_sc_search-check-in-date > label")
  const searchOutDate = $(".mphb_sc_search-check-out-date > label")
  const searchAdults = $(".mphb_sc_search-adults > label")

  if (searchInDate) searchInDate.text("Дата заїзду")
  if (searchOutDate) searchOutDate.text("Дата виїзду")
  if (searchAdults) searchAdults.text("Кількість гостей")

  const formBox = $(".accommodation-form-box")

  const FormTitle = $(".mphb-reservation-form-title")
  const form = $(".mphb-booking-form")

  formBox.append(FormTitle)
  formBox.append(form)

  const searchResultWrapper = $(".site-content-wrapper")
  const pathname = window.location.pathname
  $(".mphb-room-type").each(function () {
    const searchWrapper = $(this)

    const priceNight = $(".mphb-price-period")
    const reserveBtn = $(".mphb-book-button")

    const night = priceNight.text().split(" ")[1]
    if (Number(night)) {
      const result = getNightPriceText(Number(night))

      priceNight.text(result)
    }
    // rezul-taty-poshuku
    reserveBtn.text("Забронювати")
    if (
      pathname === "rezul-taty-poshuku" ||
      pathname === "/teremok/rezul-taty-poshuku/"
    ) {
      console.log(pathname, "pathname")
      const title = searchWrapper.find(".mphb-room-type-title").detach()
      const paragraph = searchWrapper.find("p").detach()
      const details = searchWrapper
        .find(".mphb-room-type-details-title")
        .detach()
      const attributes = searchWrapper
        .find(".mphb-loop-room-type-attributes")
        .detach()
      const book = searchWrapper.find(".mphb-reserve-room-section").detach()

      const descriptionWrapper = $("<div></div>").addClass(
        "description-wrapper",
      )

      descriptionWrapper.append(title)
      descriptionWrapper.append(paragraph)
      descriptionWrapper.append(details)
      descriptionWrapper.append(attributes)
      descriptionWrapper.append(book)
      searchWrapper.append(descriptionWrapper)
    }
  })
})
