jQuery(document).ready(function ($) {
  const roomWrapper = $(
    ".accommodations-section > .mphb_sc_rooms-wrapper > .mphb-room-type"
  );

  $(roomWrapper).each(function () {
    const searchWrapper = $(this);
    const view = searchWrapper
      .find($(".mphb-room-type-view>.mphb-attribute-value"))
      .detach();

    const roomName = searchWrapper.find($(".mphb-room-type-title")).detach();
    const roomGalleryThumb = searchWrapper
      .find($(".gallery-size-thumbnail"))
      .detach();
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

    const prevOptionsList = facilities.find(".mphb-attribute-value").children();

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

    optionsItem.append(
      $(`<span>${guestIconItem}</span>`).addClass(
        "accommodations_facilities-icon"
      )
    );
    optionsList.append(
      optionsItem.append(NumberOfGuests.text(NumberOfGuestsText))
    );

    prevOptionsList.map((_, item) => {
      const text = item.children[0].text;
      const itemClassName = item.className;
      const isKitchen = itemClassName.includes("kitchen");

      const optionsItem = $("<li></li>").addClass(
        `accommodations_facilities-item ${
          isKitchen ? "facility-kitchen" : itemClassName
        }`
      );
      if (iconsList[text]) {
        optionsItem.append(
          $(`<span>${iconsList[text]}</span>`).addClass(
            "accommodations_facilities-icon"
          )
        );
      } else {
        optionsItem.append(
          $(`<span>${getFacilitiesRandomIcon()}</span>`).addClass(
            "accommodations_facilities-icon"
          )
        );
      }
      optionsItem.append(text);
      optionsList.append(optionsItem);
    });
    const kitchenField = $("<div></div>").addClass(
      "accommodations_kitchen container"
    );
    kitchenField.append(view);
    actionsWrapper.append(bookingBtnWrapper);
    actionsWrapper.append(showMoreBtn.find("a"));
    descWrapper.append(roomDesc.text());

    roomCard.append(roomName);
    roomCard.append(roomPrice.text(priseText));
    roomCard.append(descWrapper);
    roomCard.append(roomGallery);
    roomCard.append(roomGalleryThumb);
    roomCard.append(optionsList);
    roomCard.append(actionsWrapper);

    searchWrapper.append(roomCard);
  });

  $(".accommodations").css("display", "flex");
});
