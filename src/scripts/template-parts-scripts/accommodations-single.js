function getNightPriceText(number) {
  if (!number) {
    return "за ніч";
  }
  let text = "";

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
  const roomWrapper = $(".single-room_wrapper");

  $(treesTitleIcon).insertBefore(roomWrapper.find($(".mphb-room-type-title")));

  // Ціна

  const roomPrice = roomWrapper.find($(".mphb-regular-price"));

  const prise = roomPrice.find($(".mphb-price")).text();
  const prisePeriod = Number(
    roomPrice.find($(".mphb-price-period")).text().split(" ")[1]
  );
  const priseByPeriod = `${prise.split("").splice(1, prise.length).join("")}`;

  const priseNumber = priseByPeriod.split(",").join("");

  const priseText = `${Number(priseNumber) / Number(prisePeriod)} грн/доба`;

  roomPrice
    .empty()
    .append(
      `<span class='price_text'>${priseText}<span class='price_notice-icon'>*</span></span>`
    );
  if (prisePeriod > 1) {
    roomPrice.append(
      `<span class='price_notice' id="price_notice">Мінімум ${getNightPriceText(
        prisePeriod
      )}</span>`
    );
  }

  //  Галерея

  const galleryWrapper = roomWrapper.find($(".gallery"));
  const galleryImages = galleryWrapper.find(
    $(".gallery-item>.gallery-icon>a>img")
  );

  const slider = $("<div class='swiper accommodations-single__gallery'></div>");

  const swiperWrapper = $(
    "<div class='swiper-wrapper accommodations-single__gallery--wrapper'></div>"
  );
  slider.append(swiperWrapper);

  $(galleryImages).each(function () {
    item = $(this);
    const swiperSlide = $(
      "<div class='swiper-slide accommodations-single__gallery--slide'></div>"
    );
    $("#gallery-1").remove();
    swiperSlide.append(item);
    swiperWrapper.append(swiperSlide);
  });

  slider.append(sliderNavigation);
  slider.insertAfter(roomWrapper.find($(".mphb-regular-price")));

  // Удобства

  const facilities = roomWrapper.find($(".mphb-room-type-facilities")).detach();

  const prevOptionsList = facilities.find(".mphb-attribute-value").children();
  const optionsList = $("<ul></ul>").addClass(
    "accommodations_facilities-list container"
  );
  const optionsItem = $("<li></li>").addClass("accommodations_facilities-item");

  optionsItem.append(
    $(`<span>${guestIconItem}</span>`).addClass(
      "accommodations_facilities-icon"
    )
  );

  // -> Кількість гостей
  const NumberOfGuests = roomWrapper
    .find($(".mphb-room-type-total-capacity>.mphb-attribute-value"))
    .detach();
  const NumberOfGuestsText = `${NumberOfGuests.text().trim()} гостей`;
  optionsList.append(
    optionsItem.append(NumberOfGuests.text(NumberOfGuestsText))
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

  roomWrapper.find($(".mphb-single-room-type-attributes")).remove();

  optionsList.insertAfter(slider);

  // Опис

  const list_item_text = $(".single-room_content > ul > li");
  list_item_text.wrapInner("<span class='single-room_content-item'></span>");

  const list = $(".single-room_content > ul");
  $(list).each(function () {
    const element = $(this);
    if (element[0].childElementCount === 1) {
      element.addClass("single-room_content-one-item");
    }
  });

  const accommodationsSingleSwiper = new Swiper(
    ".accommodations-single__gallery",
    {
      slidesPerView: 1,
      spaceBetween: 10,
      speed: 500,
      loop: true,
      lazy: {
        loadOnTransitionStart: true,
        loadPrevNext: true,
      },
      navigation: {
        nextEl: ".custom-next-icon",
        prevEl: ".custom-prev-icon",
      },
      pagination: {
        el: ".accommodations-single_swiper-pagination",
        clickable: true,
        slideToClickedSlide: true,
      },
      breakpoints: {
        576: {
          initialSlide: 1,
          spaceBetween: 0,
          centeredSlides: true,
          slidesPerView: "auto",
        },
      },
    }
  );

  // Booking form

  $(".mphb_sc_availability_calendar-wrapper").addClass(
    "accommodations-single_booking-item"
  );
  $(".mphb_sc_booking_form-wrapper").addClass(
    "accommodations-single_booking-item"
  );

  $(".accommodations-single_booking-item").wrapAll(
    '<div class="accommodations-single_booking_section container"></div>'
  );

  // Search form

  $(".search-form-wrapper").wrap('<div class="search-reserve-layout"></div>');
});
