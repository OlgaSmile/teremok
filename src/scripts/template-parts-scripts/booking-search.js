function getNightPriceText(number) {
  if (!number) {
    return "за ніч";
  }
  let text = "за ";

  const lastDigit = number % 10;
  const lastTwoDigits = number % 100;

  if (lastTwoDigits >= 11 && lastTwoDigits <= 14) {
    text += number + " ночей";
  } else if (lastDigit === 1) {
    text += number + " ніч";
  } else if (lastDigit >= 2 && lastDigit <= 4) {
    text += number + " ночі";
  } else {
    text += number + " ночей";
  }

  return text;
}

jQuery(document).ready(function ($) {
  const searchInDate = $(".mphb_sc_search-check-in-date > label");
  const searchOutDate = $(".mphb_sc_search-check-out-date > label");
  const searchAdults = $(".mphb_sc_search-adults > label");

  const pathname = window.location.pathname;

  if (searchInDate) searchInDate.text("Дата заїзду");
  if (searchOutDate) searchOutDate.text("Дата виїзду");
  if (searchAdults) searchAdults.text("Кількість гостей");

  const formBox = $(".accommodation-form-box");

  const FormTitle = $(".mphb-reservation-form-title");
  const form = $(".mphb-booking-form");
  const searchButton = $(".mphb_sc_search-submit-button-wrapper > input");
  searchButton.val("Знайти й забронювати");

  formBox.append(FormTitle);
  formBox.append(form);

  $(".mphb-room-type").each(function () {
    const searchWrapper = $(this);

    const priceNight = $(".mphb-price-period");
    const reserveBtn = $(".mphb-book-button");
    const priceText = $(".mphb-regular-price > strong");

    const detaliesLink = $(".mphb-view-details-button");

    if (detaliesLink) {
      detaliesLink.text("Детальніше");
    }

    if (priceText) {
      priceText.text("Ціна");
    }

    const night = priceNight.text().split(" ")[1];

    if (Number(night)) {
      const result = getNightPriceText(Number(night));

      priceNight.text(result);
    } else {
      priceNight.text("за ніч");
    }

    reserveBtn.text("Забронювати");
    if (
      pathname === "/rezul-taty-poshuku/" ||
      pathname === "/teremok/rezul-taty-poshuku/"
    ) {
      searchButton.val("Змінити й забронювати");
      const title = searchWrapper.find(".mphb-room-type-title").detach();
      const price = searchWrapper.find(".mphb-regular-price").detach();
      const mphPrice = price.find(".mphb-price").detach();

      const details = searchWrapper
        .find(".mphb-view-details-button-wrapper")
        .detach();
      const paragraph = searchWrapper.find("p").detach();

      const attributes = searchWrapper
        .find(".mphb-loop-room-type-attributes")
        .detach();
      const book = searchWrapper.find(".mphb-reserve-room-section").detach();

      const descriptionWrapper = $("<div></div>").addClass(
        "description-wrapper"
      );
      const topWrapper = $("<div></div>").addClass("description-top-wrapper");
      const btnWrapper = $("<div></div>").addClass("description-btn-wrapper");
      const titleWrapper = $("<div></div>").addClass(
        "description-title-wrapper"
      );
      if (price) price.append(mphPrice);
      titleWrapper.append(title);
      titleWrapper.append(price);
      topWrapper.append(titleWrapper);
      topWrapper.append(paragraph);
      topWrapper.append(attributes);
      btnWrapper.append(details);
      btnWrapper.append(book);

      descriptionWrapper.append(topWrapper);
      descriptionWrapper.append(btnWrapper);

      searchWrapper.append(descriptionWrapper);
    }
  });
});
