jQuery(document).ready(function ($) {
  const roomWrapper = $(".single-room_wrapper");

  $(`<div class="accommodations-single_trees_icon"><svg width="56" height="42" viewBox="0 0 56 42" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g clip-path="url(#clip0_4536_60715)">
        <path d="M6.94727 36V11" stroke="inherit" stroke-width="0.9" />
        <path d="M6.94598 11.1855C6.49201 13.0247 4.91671 16.7164 2.24726 16.7704M6.94598 18.6766C6.4239 20.4017 4.48084 23.743 0.885286 23.3072M6.94598 26.8483C5.67482 28.7777 2.50599 32.4187 0 31.547" stroke="inherit" stroke-width="0.9" />
        <path d="M6.94562 11.1855C7.39959 13.0247 8.97489 16.7164 11.6443 16.7704M6.94562 18.6766C7.4677 20.4017 9.41076 23.743 13.0063 23.3072M6.94562 26.8483C8.21678 28.7777 11.3856 32.4187 13.8916 31.547" stroke="inherit" stroke-width="0.9" />
        <path d="M27.8936 36V0" stroke="inherit" stroke-width="0.9" />
        <path d="M27.8938 0.263672C27.2401 2.912 24.9717 8.22811 21.1277 8.30589M27.8938 11.0508C27.142 13.535 24.344 18.3465 19.1664 17.7189M27.8938 22.818C26.0633 25.5964 21.5002 30.8394 17.8916 29.5842" stroke="inherit" stroke-width="0.9" />
        <path d="M27.8943 0.263672C28.548 2.912 30.8164 8.22811 34.6604 8.30589M27.8943 11.0508C28.6461 13.535 31.4441 18.3465 36.6217 17.7189M27.8943 22.818C29.7247 25.5964 34.2879 30.8394 37.8965 29.5842" stroke="inherit" stroke-width="0.9" />
        <path d="M48.8438 36V11" stroke="inherit" stroke-width="0.9" />
        <path d="M48.8425 11.1855C48.3885 13.0247 46.8132 16.7164 44.1437 16.7704M48.8425 18.6766C48.3204 20.4017 46.3773 23.743 42.7818 23.3072M48.8425 26.8483C47.5713 28.7777 44.4025 32.4187 41.8965 31.547" stroke="inherit" stroke-width="0.9" />
        <path d="M48.8421 11.1855C49.2961 13.0247 50.8714 16.7164 53.5408 16.7704M48.8421 18.6766C49.3642 20.4017 51.3072 23.743 54.9028 23.3072M48.8421 26.8483C50.1133 28.7777 53.2821 32.4187 55.7881 31.547" stroke="inherit" stroke-width="0.9" />
    </g>
    <defs>
        <clipPath id="clip0_4536_60715">
        <rect width="56" height="42" fill="white" />
        </clipPath>
    </defs>
    </svg></div>`).insertBefore(roomWrapper.find($(".mphb-room-type-title")));

  // Ціна

  const roomPrice = roomWrapper.find($(".mphb-regular-price"));
  const prise = roomPrice.find($(".mphb-price")).text();
  const priseText = `${prise
    .split("")
    .splice(1, prise.length)
    .join("")} грн/доба`;
  roomPrice.empty().append(priseText);

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

  const nav = $(`<div class="one-apartment__navigation">
      <div class="custom-prev-icon one-apartment__navigation--prev">
        <svg width="29" height="20" viewBox="0 0 29 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Component 40">
            <path id="Vector 238" d="M11.0569 1C10.2226 4.51933 6.94325 11.558 0.500084 11.558M0.500084 11.558C10.5355 15.2227 11.0569 19.2204 11.0569 19.8472M0.500084 11.558H29" stroke="#3C4839" stroke-width="1.19212"/>
            </g>
        </svg>
      </div>
      <div class="custom-next-icon one-apartment__navigation--next">
        <svg width="29" height="20" style="transform: rotate(180)" viewBox="0 0 29 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Component 40">
            <path id="Vector 238" d="M11.0569 1C10.2226 4.51933 6.94325 11.558 0.500084 11.558M0.500084 11.558C10.5355 15.2227 11.0569 19.2204 11.0569 19.8472M0.500084 11.558H29" stroke="#3C4839" stroke-width="1.19212"/>
            </g>
        </svg>
      </div>
    </div>`);

  slider.append(nav);
  slider.insertAfter(roomWrapper.find($(".mphb-regular-price")));
  //   galleryWrapper.empty().append(slider);

  // Удобства

  const facilities = roomWrapper.find($(".mphb-room-type-facilities")).detach();

  const prevOptionsList = facilities.find(".mphb-attribute-value").children();
  const optionsList = $("<ul></ul>").addClass(
    "accommodations_facilities-list container"
  );
  const optionsItem = $("<li></li>").addClass("accommodations_facilities-item");

  optionsItem.append(
    $(`<span>${guestIconA}</span>`).addClass("accommodations_facilities-icon")
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
    if (iconMapA[text]) {
      optionsItem.append(
        $(`<span>${iconMapA[text]}</span>`).addClass(
          "accommodations_facilities-icon"
        )
      );
    } else {
      optionsItem.append(
        $(`<span>${getRandomIconA()}</span>`).addClass(
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
