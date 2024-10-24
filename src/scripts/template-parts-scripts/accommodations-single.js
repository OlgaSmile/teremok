jQuery(document).ready(function ($) {
  const roomWrapper = $(".single-room_wrapper");

  // Title

  const roomTitle = roomWrapper.find($(".mphb-room-type-title"));

  const roomName = roomTitle.text();

  $(treesTitleIcon).insertBefore(roomName);

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
      `<span class='price_text'>${priseText}<span class='price_notice-icon'> *</span></span>`
    );
  if (prisePeriod > 1) {
    roomPrice.append(
      `<div class='price_notice' id="price_notice"><span class='price_notice-icon'>*</span> Бронювання від ${prisePeriod} діб.</div>`
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

  const content = roomWrapper.find($(".single-room_content"));

  const linkToFoodSection = `<a href="/food" class="button mphb-view-details-button">Дізнатися більше
  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="11" viewBox="0 0 50 18" fill="none">
  <path d="M40.8531 1C41.5523 3.94928 44.3005 9.84785 49.7 9.84785M49.7 9.84785C41.29 12.919 40.4114 16.8329 40.4114 17.3582M49.7 9.84785H17.9169M1 9.84785H8.64346M8.64346 9.84785L1 5.87775M8.64346 9.84785L1 14.7096M8.64346 9.84785H13.3538M13.3538 9.84785L7.31868 5.87775M13.3538 9.84785L7.31868 14.7096M13.3538 9.84785H17.9169M17.9169 9.84785L13.3538 5.87775M17.9169 9.84785L13.3538 14.7096" stroke="#E67739" stroke-width="1.8"></path>
</svg>
  </a>`;

  content.append(linkToFoodSection);

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

  const bookingSection = $(
    "<section class='accommodations-single__booking-section'></section>"
  );
  const bookingSectionTitle = $(
    "<h2 class='accommodations-single__booking-section_title'>Перевірити доступність</h2>"
  );

  const calendarWrapper = $(
    "<div class='accommodations-single__booking-section_calendar'></div>"
  );
  const calendar = roomWrapper.find($(".mphb-calendar"));

  const bookingForm = roomWrapper.find($(".mphb-reserve-room-section"));

  bookingForm.prepend(
    `<div class="accommodations-single__booking-section_check">${roomName} доступно для бронювання на обрані дати</div>`
  );

  const submitForm = roomWrapper.find($(".mphb_sc_booking_form-wrapper"));

  $(treesTitleIcon).insertBefore(bookingSectionTitle);

  calendarWrapper.append(calendar);

  bookingSection.append(treesTitleIcon);
  bookingSection.append(bookingSectionTitle);
  bookingSection.append(calendarWrapper);
  bookingSection.append(
    $(`<ul class="accommodations-single__booking-section_labels">
      <li class="accommodations-single__booking-section_labels-free">вільні дати</li>
      <li class="accommodations-single__booking-section_labels-chosen">обрані дати</li>
      <li class="accommodations-single__booking-section_labels-reserved">зарезервовані дати</li>
      </ul>`)
  );
  bookingSection.append(submitForm);

  bookingSection.insertAfter(content);

  roomWrapper.css("display", "block");
});
