jQuery(document).ready(function ($) {
  const bookingCheckout = $(".mphb_sc_checkout-wrapper ");

  const roomName = bookingCheckout.find($(".mphb-room-type-title>a")).text();

  bookingCheckout
    .find($(".mphb-checkout-section"))
    .css("cssText", "margin-top: 0 !important;");

  const checkInDate = bookingCheckout.find($(".mphb-check-in-date"));
  const checkOutDate = bookingCheckout.find($(".mphb-check-out-date"));

  function formatCheckDates(element) {
    const checkDateText = element.find($("time:first-of-type")).text();
    const checkDateTimeText = element
      .find($("time:not(:first-of-type)"))
      .text()
      .split(" ")[0];

    element.text("");
    element.append(
      $(
        `<div class="mphb-check-in-date_label">Дата за'їзду:</div>
        <div class="mphb-check-in-date_text">
            <span>${checkDateText}</span>
            <span>з ${checkDateTimeText}</span>
        </div>`
      )
    );
  }

  formatCheckDates(checkInDate);
  formatCheckDates(checkOutDate);

  const checkWrapper = $(`<div class='check-dates_wrapper'></div>`);

  checkInDate.wrap(checkWrapper);

  checkOutDate.insertAfter(checkInDate);

  // Вартість бронювання

  bookingCheckout
    .find($(".mphb-price-breakdown-title"))
    .text("Розподіл вартості бронювання:");

  const roomNameWrapper = bookingCheckout.find(
    $(".mphb-price-breakdown-accommodation")
  );
  const iconWrapper = roomNameWrapper.find($(".mphb-inner-icon"));
  iconWrapper.text("");

  roomNameWrapper.text("");
  roomNameWrapper.append(`<svg width="14" height="22" viewBox="0 0 14 22" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M6.71862 14.7215C6.87449 14.8758 7.12551 14.8758 7.28138 14.7215L12.3708 9.6843C12.6248 9.43291 12.4468 9 12.0894 9H1.91059C1.55323 9 1.37522 9.43291 1.62921 9.6843L6.71862 14.7215Z" fill="#3C4839" />
</svg>`);
  roomNameWrapper.append(roomName);

  // Form

  const nameInput = bookingCheckout.find($(".mphb-customer-name > label"));
  nameInput.text("Ваше ім’я та прізвище");

  bookingCheckout.find($("abbr")).remove();

  bookingCheckout
    .find($(".mphb_sc_checkout-submit-wrapper"))
    .addClass("plugin_submit-button");

  $(".mphb-total-price output")
    .contents()
    .filter(function () {
      return (
        this.nodeType === 3 && $.trim(this.nodeValue) === "Загальна вартість:"
      );
    })
    .wrap('<span class="mphb-total-price_total-label"></span>');

  const nightsCount = $(
    ".mphb-price-breakdown-nights > td:not(:first-child)"
  ).text();

  $(".mphb-total-price_total-label").text(
    `Загальна вартість ${getNightPriceText(nightsCount)}:`
  );

  $(
    "<p class='mphb-customer_desc'>Обов’язкові поля позначені *</p>"
  ).insertAfter($(".mphb-customer-note"));
  $(
    "<p  class='mphb-customer_policy'>політика конфіденційності вьтоівотпдвтюптфіюлвтпвлдтплжваілдтжідлтпжідвлтажідтпжлвідтп</p>"
  ).insertAfter($(".mphb-customer_desc"));

  $(".mphb_sc_checkout-wrapper").css("display", "block");
});

function checkIfEmpty(element, wrapper) {
  if (element.value.trim() === "") {
    wrapper.classList.remove("not_empty");
  } else if (element.value.trim().length < 10) {
    wrapper.classList.add("not_empty");
    wrapper.classList.add("to_short");
  } else {
    wrapper.classList.add("not_empty");
    wrapper.classList.remove("to_short");
  }
}

const textarea = document.getElementById("mphb_note");
const textareaWrapper = document.querySelector(".mphb-customer-note");
const guestInputWrapper = document.querySelector(".mphb-guest-name-wrapper");
const guestInput = document.getElementById("mphb_room_details-0-guest-name");

textarea.addEventListener("input", () =>
  checkIfEmpty(textarea, textareaWrapper)
);
textarea.addEventListener("blur", () =>
  checkIfEmpty(textarea, textareaWrapper)
);

checkIfEmpty(textarea, textareaWrapper);

guestInput.addEventListener("input", () =>
  checkIfEmpty(guestInput, guestInputWrapper)
);
guestInput.addEventListener("blur", () =>
  checkIfEmpty(guestInput, guestInputWrapper)
);

checkIfEmpty(guestInput, guestInputWrapper);
