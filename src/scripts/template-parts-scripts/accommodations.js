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

    // Slider

    const roomGalleryWrapper = searchWrapper.find($(".mphb-room-type-images"));
    const roomImages = roomGalleryWrapper.find($(".gallery-item img"));

    const slider = $(
      "<div class='swiper accommodations-single__gallery'></div>"
    );

    const swiperWrapper = $(
      "<div class='swiper-wrapper accommodations-single__gallery--wrapper'></div>"
    );
    slider.append(swiperWrapper);

    $(roomImages).each(function () {
      $item = $(this);
      $item.attr("target", "blank");

      const swiperSlide = $(
        "<div class='swiper-slide accommodations-single__gallery--slide'></div>"
      );
      $("#gallery-1").remove();
      swiperSlide.append($item);
      swiperWrapper.append(swiperSlide);
    });

    slider.append(sliderNavigation);

    // end Slider

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

    const numberOfGuests = searchWrapper
      .find(
        $(
          ".mphb-loop-room-type-attributes > .mphb-room-type-total-capacity>.mphb-attribute-value"
        )
      )
      .detach();

    const numberOfAdults = searchWrapper
      .find($(".mphb-room-type-adults-capacity .mphb-attribute-value"))
      .text();

    const numberOfChildren = searchWrapper
      .find($(".mphb-room-type-children-capacity .mphb-attribute-value"))
      .text();

    const additionGuestLabel = numberOfChildren ? `(+${numberOfChildren})` : "";

    const numberOfGuestsText = `${numberOfAdults} ${additionGuestLabel}  гостей`;

    const facilities = searchWrapper
      .find($(".mphb-loop-room-type-attributes>.mphb-room-type-facilities"))
      .detach();

    const prevOptionsList = facilities.find(".mphb-attribute-value").children();

    const priceDaysText = searchWrapper.find($(".mphb-price-period")).text();
    const prisePeriod = priceDaysText
      .split(" ")
      .filter((element) => Number(element))[0];

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

    const prise = roomPrice.text().split("");
    const priseNumber = prise.splice(1, prise.length).join("").replace(",", "");

    const priceByNight =
      Number(priseNumber) / Number(prisePeriod ? prisePeriod : 1);

    const nFormat = new Intl.NumberFormat(undefined);

    const priseText = `${nFormat.format(priceByNight)} грн доба`;

    optionsItem.append(
      $(`<span>${guestIconItem}</span>`).addClass(
        "accommodations_facilities-icon"
      )
    );

    if (numberOfGuests.text()) {
      optionsList.append(
        optionsItem.append(`${numberOfGuests.text().trim()} гостей`)
      );
    } else {
      optionsList.append(optionsItem.append(numberOfGuestsText));
    }
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
    roomCard.append(slider);
    roomCard.append(roomGalleryThumb);
    roomCard.append(optionsList);
    roomCard.append(actionsWrapper);

    searchWrapper.append(roomCard);
  });

  $(".accommodations").css("display", "flex");
});
