jQuery(document).ready(function ($) {
  const sectionWrapper = $(".accommodations-section");
  const main = $(".accommodations-main");

  $(sectionWrapper).each(function (index) {
    const section = $(this);
    const roomWrapper = section.find(
      $(".mphb_sc_rooms-wrapper > .mphb-room-type")
    );

    const roomWrapperId = section.attr("id");

    $(roomWrapper).each(function (index) {
      const searchWrapper = $(this);
      if (!searchWrapper.hasClass(`mphb_room_type_category-${roomWrapperId}`)) {
        searchWrapper.remove();
        return;
      }

      const view = searchWrapper
        .find($(".mphb-room-type-view>.mphb-attribute-value"))
        .detach();

      const roomName = searchWrapper
        .find($(".mphb-room-type-title"))
        .addClass("container")
        .detach();
      const roomGalleryThumb = searchWrapper
        .find($(".gallery-size-thumbnail"))
        .detach();

      // Slider

      const roomGalleryWrapper = searchWrapper.find(
        $(".mphb-room-type-images")
      );
      const roomImages = roomGalleryWrapper.find($(".gallery-item img"));
      const roomImagesList = roomImages.clone();

      const slider = $(
        `<div class='swiper accommodations-single__gallery'></div>`
      );

      const swiperWrapper = $(
        "<div class='swiper-wrapper accommodations-single__gallery--wrapper'></div>"
      );

      $(roomImages).each(function () {
        $item = $(this);

        const swiperSlide = $(
          `<div class='swiper-slide swiper-slide${
            index + 2
          } accommodations-single__gallery--slide'></div>`
        );
        $("#gallery-1").remove();
        swiperSlide.append($item);
        swiperWrapper.append(swiperSlide);

        swiperSlide.on("click", function () {
          $("body").attr("style", "overflow:hidden");
          document.addEventListener("keydown", closeDialog);
          $(`#sliderModal${index + 2}`)[0].showModal();
        });
      });

      slider.append(swiperWrapper);
      slider.append(sliderNavigation);

      // end Slider

      // Modal slider

      searchWrapper.append(modalTemplate(index + 2));
      searchWrapper
        .find($(".inner_swiper"))
        .addClass("accommodations-inner_swiper");
      searchWrapper
        .find($(".modal-slider-wrapper"))
        .addClass("accommodations-modal-slider-wrapper");

      const sliderWrapper = main.find(
        $(".modal-slider-wrapper>.swiper-wrapper")
      );
      const innerSliderWrapper = main.find(
        $(".modal-slider-wrapper> .inner_swiper> .inner_swiper-wrapper")
      );

      $(roomImagesList).each(function () {
        const img = $(this);
        const innerImg = img.clone();

        const item = $("<div class='swiper-slide modal-swiper-slide'></div>");
        item.append(img);
        sliderWrapper.append(item);

        const innerSliderItem = $(
          '<div class="swiper-slide inner_swiper-slide"></div>'
        );
        innerSliderItem.append(innerImg);
        innerSliderWrapper.append(innerSliderItem);
      });

      $(`.accommodations-main .swiper-slide${index + 2}`).on(
        "click",
        function () {
          $(`#sliderModal${index + 2}`)[0].showModal();
        }
      );

      const closeDialog = (e) => {
        if (e.code === "Escape") {
          document.body.style.overflow = "";
          document.removeEventListener("keydown", closeDialog);
        }
      };

      const closeDialogModal = () => {
        document.body.style.overflow = "";
        document.removeEventListener("keydown", closeDialog);
      };

      const closeButton = document.querySelector(
        `#sliderModal${index + 2}_close-button`
      );

      if (closeButton) {
        closeButton.addEventListener("click", closeDialogModal);
      }

      const s = searchWrapper
        .find($(".accommodations-inner_swiper"))
        .addClass(`accommodations-inner_swiper-${index}`);

      // -----------------------  init slider -----------------

      const screenWidth = window.innerWidth;
      const effect = screenWidth < 576 ? "creative" : "slide";

      const accommodationsModalSwiperA = new Swiper(
        ".accommodations-modal-slider-wrapper",
        {
          slidesPerView: 1,
          spaceBetween: 10,
          loop: true,
          simulateTouch: true,
          allowTouchMove: true,

          effect: effect || "slide",
          lazy: {
            loadOnTransitionStart: true,
            loadPrevNext: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          breakpoints: {
            0: {
              grabCursor: true,
              creativeEffect: {
                prev: {
                  shadow: true,
                  translate: ["-20%", 0, -1],
                },
                next: {
                  translate: ["100%", 0, 0],
                },
              },
            },
            576: {
              initialSlide: 1,
              spaceBetween: 0,
              centeredSlides: true,
              slidesPerView: "auto",
              grabCursor: false,
              speed: 1000,
              keyboard: {
                enabled: true,
                onlyInViewport: true,
              },
            },
          },
        }
      );

      //-------------------------

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

      const facilities = searchWrapper.find(
        $(".mphb-loop-room-type-attributes>.mphb-room-type-facilities")
      );

      const prevOptionsList = facilities
        .find(".mphb-attribute-value")
        .children();

      const priceDaysText = searchWrapper.find($(".mphb-price-period")).text();
      const prisePeriod = priceDaysText
        .split(" ")
        .filter((element) => Number(element))[0];

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
      const descWrapper = $("<p></p>").addClass(
        "accommodations_desc container"
      );

      const prise = roomPrice.text().split("");
      const priseNumber = prise
        .splice(1, prise.length)
        .join("")
        .replace(",", "");

      const priceByNight =
        Number(priseNumber) / Number(prisePeriod ? prisePeriod : 1);

      const nFormat = new Intl.NumberFormat(undefined);

      const priseText = `${nFormat.format(priceByNight)} грн доба`;

      // Кількість гостей

      const additionBed = searchWrapper
        .find($(".mphb-room-type-bed-type>.mphb-attribute-value"))
        .text();

      const numberOfGuests = searchWrapper
        .find(
          $(
            ".mphb-loop-room-type-attributes > .mphb-room-type-total-capacity>.mphb-attribute-value"
          )
        )
        .text()
        .trim();

      const text = badCountText(numberOfGuests, additionBed);

      optionsItem.append(
        $(`<span>${guestIconItem}</span>`).addClass(
          "accommodations_facilities-icon"
        )
      );
      optionsList.append(optionsItem.append(text));

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

      // Видаляємо зайві поля

      searchWrapper.find(".mphb-regular-price").remove();
      searchWrapper.find(".mphb-loop-room-type-attributes").remove();

      kitchenField.append(view);
      actionsWrapper.append(bookingBtnWrapper);
      actionsWrapper.append(showMoreBtn.find("a"));
      descWrapper.append(roomDesc.text());

      roomCard.append(roomName);
      roomCard.append(roomPrice.text(priseText));
      roomCard.append(descWrapper);
      roomCard.append(slider);
      roomCard.append(roomGalleryThumb);
      roomCard.append(
        $(
          "<div class='accommodations_facilities-list_wrapper container'>"
        ).append(optionsList)
      );
      roomCard.append(actionsWrapper);

      searchWrapper.append(roomCard);
    });
  });

  $(".accommodations").css("display", "flex");
});
