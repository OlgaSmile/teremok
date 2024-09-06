jQuery(document).ready(function ($) {
  const roomWrapper = $(
    ".accommodations-section > .mphb_sc_rooms-wrapper > .mphb-room-type"
  );

  $(roomWrapper).each(function () {
    const searchWrapper = $(this);
    const roomName = searchWrapper.find($(".mphb-room-type-title")).detach();
    const roomGallery = searchWrapper
      .find($(".mphb-room-type-images"))
      .detach();
    const roomDesc = searchWrapper.find($("p:first-of-type")).detach();

    const roomPrice = searchWrapper
      .find($(".mphb-regular-price > span.mphb-price"))
      .detach();

    const showMoreBtn = searchWrapper
      .find(".mphb-view-details-button-wrapper")
      .detach();

    searchWrapper.find(".mphb-book-button").text("Забронювати");

    const bookingBtnWrapper = searchWrapper
      .find(".mphb-to-book-btn-wrapper")
      .detach();

    const NumberOfGuests = searchWrapper
      .find(
        $(
          ".mphb-loop-room-type-attributes > .mphb-room-type-total-capacity>.mphb-attribute-value"
        )
      )
      .detach();

    const facilities = searchWrapper
      .find($(".mphb-loop-room-type-attributes>.mphb-room-type-facilities"))
      .detach();

    const prevOptionsList = facilities
      .find(".mphb-attribute-value")
      .text()
      .split(",");

    searchWrapper.find(".mphb-regular-price").remove();
    searchWrapper.find(".mphb-loop-room-type-attributes").remove();

    const roomCard = $("<div></div>").addClass("accommodations_roomCard");
    const optionsList = $("<ul></ul>").addClass(
      "accommodations_facilities-list container"
    );
    const optionsItem = $("<li></li>").addClass(
      "accommodations_facilities-item"
    );
    const actionsWrapper = $("<div></div>").addClass(
      "accommodations_actions-wrapper container"
    );
    const descWrapper = $("<p></p>").addClass("accommodations_desc container");
    const NumberOfGuestsText = `${NumberOfGuests.text().trim()} гостей`;
    const prise = roomPrice.text().split("");
    const priseText = `${prise.splice(1, prise.length).join("")} грн доба`;

    optionsList.append(
      optionsItem.append(NumberOfGuests.text(NumberOfGuestsText))
    );

    prevOptionsList.forEach((item) => {
      const optionsItem = $("<li></li>").addClass(
        "accommodations_facilities-item"
      );
      optionsList.append(optionsItem.append(item.trim()));
    });

    actionsWrapper.append(bookingBtnWrapper);
    actionsWrapper.append(showMoreBtn.find("a").text("Детальніше"));
    descWrapper.append(roomDesc.text());

    roomCard.append(roomName);
    roomCard.append(roomPrice.text(priseText));
    roomCard.append(descWrapper);
    roomCard.append(roomGallery);
    roomCard.append(optionsList);
    roomCard.append(actionsWrapper);

    searchWrapper.append(roomCard);
    // console.log("searchWrapper: ", searchWrapper);
    // console.log("roomPrice: ", roomPrice.text().split("₴")[1]);
    // const priceNight = $(".mphb-price-period");
    // const reserveBtn = $(".mphb-book-button");
    // const priceText = $(".mphb-regular-price > strong");
    // const detaliesLink = $(".mphb-view-details-button");
    // if (detaliesLink) {
    //   detaliesLink.text("Детальніше");
    // }
    // if (priceText) {
    //   priceText.text("Ціна");
    // }
    // const night = priceNight.text().split(" ")[1];
    // if (Number(night)) {
    //   const result = getNightPriceText(Number(night));
    //   priceNight.text(result);
    // } else {
    //   priceNight.text("за ніч");
    // }
    // reserveBtn.text("Забронювати");
    // if (
    //   pathname === "/rezul-taty-poshuku/" ||
    //   pathname === "/teremok/rezul-taty-poshuku/"
    // ) {
    //   searchButton.val("Змінити й забронювати");
    //   const title = searchWrapper.find(".mphb-room-type-title").detach();
    //   const details = searchWrapper
    //     .find(".mphb-view-details-button-wrapper")
    //     .detach();
    //   const paragraph = searchWrapper.find("p").detach();
    //   const attributes = searchWrapper
    //     .find(".mphb-loop-room-type-attributes")
    //     .detach();
    //   const book = searchWrapper.find(".mphb-reserve-room-section").detach();
    //   const descriptionWrapper = $("<div></div>").addClass(
    //     "description-wrapper"
    //   );
    //   const topWrapper = $("<div></div>").addClass("description-top-wrapper");
    //   const btnWrapper = $("<div></div>").addClass("description-btn-wrapper");
    //   topWrapper.append(title);
    //   topWrapper.append(paragraph);
    //   topWrapper.append(attributes);
    //   btnWrapper.append(details);
    //   btnWrapper.append(book);
    //   descriptionWrapper.append(topWrapper);
    //   descriptionWrapper.append(btnWrapper);
    //   searchWrapper.append(descriptionWrapper);
    // }
  });
});
