const IconArrow = `
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="11" viewBox="0 0 50 18" fill="none">
  <path d="M40.8531 1C41.5523 3.94928 44.3005 9.84785 49.7 9.84785M49.7 9.84785C41.29 12.919 40.4114 16.8329 40.4114 17.3582M49.7 9.84785H17.9169M1 9.84785H8.64346M8.64346 9.84785L1 5.87775M8.64346 9.84785L1 14.7096M8.64346 9.84785H13.3538M13.3538 9.84785L7.31868 5.87775M13.3538 9.84785L7.31868 14.7096M13.3538 9.84785H17.9169M17.9169 9.84785L13.3538 5.87775M17.9169 9.84785L13.3538 14.7096" stroke="#E67739" stroke-width="1.8"/>
</svg>
`

function shortenText(text, maxLength = 28) {
  if (text.length > maxLength) {
    return text.slice(0, maxLength) + "..."
  }
  return text
}

jQuery(document).ready(function ($) {
  const searchInDate = $(".mphb_sc_search-check-in-date > label")
  const searchOutDate = $(".mphb_sc_search-check-out-date > label")
  const searchAdults = $(".mphb_sc_search-adults > label")

  const pathname = window.location.pathname

  if (searchInDate.length > 0) searchInDate.text("Дата заїзду")
  if (searchOutDate.length > 0) searchOutDate.text("Дата виїзду")
  if (searchAdults.length > 0) searchAdults.text("Кількість гостей")

  const formBox = $(".accommodation-form-box")

  const FormTitle = $(".mphb-reservation-form-title")
  const form = $(".mphb-booking-form")
  const searchButton = $(".mphb_sc_search-submit-button-wrapper > input")
  searchButton.val("Знайти й забронювати")

  formBox.append(FormTitle)
  formBox.append(form)

  $(".mphb-room-type").each(function () {
    const searchWrapper = $(this)

    const priceNight = $(".mphb-price-period")
    const reserveBtn = $(".mphb-book-button")
    const priceText = $(".mphb-regular-price > strong")

    const detaliesLink = $(".mphb-view-details-button")

    if (detaliesLink.length > 0) {
      detaliesLink.text("Детальніше")
      detaliesLink.append(IconArrow)
    }

    if (priceText) {
      priceText.text("Ціна")
    }

    const nightText = priceNight.text().split(" ")
    if (nightText.length > 1 && Number(nightText[1])) {
      const result = getNightPriceText(Number(nightText[1]))
      priceNight.text(result)
    } else {
      priceNight.text("за ніч")
    }

    reserveBtn.text("Забронювати")
    if (
      pathname.includes("search-results") ||
      pathname.includes("/teremok/search-results/")
    ) {
      searchButton.val("Змінити й забронювати")
      const title = searchWrapper.find(".mphb-room-type-title").detach()
      const price = searchWrapper.find(".mphb-regular-price").detach()
      const mphPrice = price.find(".mphb-price").detach()

      const newPrice =
        mphPrice.text().replace(",", " ").replace("₴", "").trim() + " грн"

      /*       const updatePrice = mphPrice.text().replace(",", " ").replace("₴", " ")
      const newPrice = `${updatePrice} грн` */
      const guests = searchWrapper
        .find(".mphb-room-type-total-capacity .mphb-attribute-value")
        .text()

      const facilities = searchWrapper
        .find(".mphb-room-type-facilities .mphb-attribute-value span")
        .map(function () {
          return $(this).text()
        })
        .get()

      const details = searchWrapper
        .find(".mphb-view-details-button-wrapper")
        .detach()
      const paragraph = searchWrapper.find("p").detach()

      const attributes = searchWrapper
        .find(".mphb-loop-room-type-attributes")
        .detach()
      const book = searchWrapper.find(".mphb-reserve-room-section").detach()

      const descriptionWrapper = $("<div></div>").addClass(
        "description-wrapper",
      )

      const amenitiesList = $('<ul class="convenience__list"></ul>')
      const topWrapper = $("<div></div>").addClass("description-top-wrapper")
      const btnWrapper = $("<div></div>").addClass("description-btn-wrapper")
      const titleWrapper = $("<div></div>").addClass(
        "description-title-wrapper",
      )

      const guestItem = `<li><span>${guestIconItem} ${guests} Гостей<span></li>`

      amenitiesList.append(guestItem)
      const limitedFacilities = facilities.slice(0, 5)
      limitedFacilities.forEach(function (facility) {
        const listItem = $("<li></li>")

        const iconPath = iconsList[facility]
          ? iconsList[facility]
          : getFacilitiesRandomIcon()

        listItem.append(`<span>${iconPath} ${shortenText(facility)}</span>`)
        amenitiesList.append(listItem)
      })

      if (price) price.append(mphPrice.text(newPrice))
      titleWrapper.append(title)
      titleWrapper.append(price)
      topWrapper.append(titleWrapper)
      topWrapper.append(paragraph)
      topWrapper.append(attributes)

      topWrapper.append(amenitiesList)
      btnWrapper.append(details)
      btnWrapper.append(book)

      descriptionWrapper.append(topWrapper)
      descriptionWrapper.append(btnWrapper)

      searchWrapper.append(descriptionWrapper)
    }
  })
})
