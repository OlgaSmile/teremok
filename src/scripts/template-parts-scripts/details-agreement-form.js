jQuery(document).ready(function ($) {
  const nameLabel = $("#name-label")
  const nameInput = $("#detalies-name")

  const textarea = $("#text-details")
  var input = document.querySelector("#phone")
  var iti = window.intlTelInput(input, {
    initialCountry: "ua",
    separateDialCode: true, // Це розділяє код країни та номер
    utilsScript:
      "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
  })

  input.addEventListener("input", function () {
    const currentCountry = iti.getSelectedCountryData()

    if (currentCountry.dialCode === "380") {
      const maxLength = 9
      // Видаляємо всі символи, крім цифр, щоб працювати з чистим номером
      var cleanedNumber = input.value.replace(/\D/g, "")

      // Обрізаємо, якщо введено більше, ніж потрібно
      if (cleanedNumber.length > maxLength) {
        cleanedNumber = cleanedNumber.substring(0, maxLength)
      }

      // Встановлюємо обмежену версію номера назад у поле
      input.value = cleanedNumber

      // Якщо номер валідний, форматувати його

      if (iti.isValidNumber()) {
        var formattedNumber = iti.getNumber(
          intlTelInputUtils.numberFormat.NATIONAL,
        )
        iti.setNumber(formattedNumber)
        $("#error-phone").text("")
      } else {
        $("#error-phone").text("Не вірно введений номер")
      }
      return
    } else {
      if (iti.isValidNumber()) {
        var formattedNumber = iti.getNumber(
          intlTelInputUtils.numberFormat.NATIONAL,
        )

        iti.setNumber(formattedNumber)
        $("#error-phone").text("")
      } else {
        $("#error-phone").text("Не вірно введений номер")
      }
    }
  })

  nameInput.on("input", (e) => {
    /*     const value = e.target.value
    const length = value.trim().length
    const maxLength = 40
    const sanitizedValue = value.replace(/[^a-zA-ZА-Яа-яЁёІіЇїЄє0-9]/g, "")
    value = sanitizedValue
    if (length > maxLength) {
      e.target.value = e.target.value.substring(0, maxLength)
      return
    } */

    if (!e.target || typeof e.target.value !== "string") {
      return
    }

    const maxLength = 40
    const value = e.target.value || ""
    const length = value.trim().length

    const sanitizedValue = value.replace(/[^a-zA-ZА-Яа-яЁёІіЇїЄє]/g, "")

    e.target.value = String(sanitizedValue)

    if (length < 2) {
      $("#validation-name").text("Введіть не менше ніж 2 символа")
    }
    if (length >= 2) {
      $("#validation-name").text("")
    }

    if (sanitizedValue.length > maxLength) {
      e.target.value = sanitizedValue.substring(0, maxLength)
    }

    $("#current-length-name").text(length)
  })
  nameInput.on("click", (e) => {
    nameLabel.addClass("active")
  })

  nameInput.on("focus", (e) => {
    nameLabel.addClass("active")
  })

  $(".secttion-details-agreement").on("click", (e) => {
    if (!nameInput.val().trim()) {
      nameInput.val("")
      const isClickInsideInput = nameInput.is(e.target)
      if (!isClickInsideInput) {
        nameLabel.removeClass("active")
      }
    }
  })

  textarea.on("input", function (e) {
    this.style.height = "auto"
    this.style.height = this.scrollHeight + "px"

    const maxLength = 1000
    const length = e.target.value.trim().length

    if (length < 40) {
      $("#validation-text-details").text("Введіть не менше ніж 40 символів")
    }

    if (length > 40) {
      $("#validation-text-details").text("")
    }

    if (length > maxLength) {
      e.target.value = e.target.value.substring(0, maxLength)
    }

    $("#current-length-text").text(`${length}`)
  })

  $("#text-details").on("click", function (e) {
    $("#paleceholder-text-details").addClass("active")
  })

  $("#text-details").on("focus", function (e) {
    $("#paleceholder-text-details").addClass("active")
  })

  $(".secttion-details-agreement").on("click", (e) => {
    if (!textarea.val().trim()) {
      const isClickInsideInput = $("#text-details").is(e.target)
      if (!isClickInsideInput) {
        textarea.val("")
        $("#paleceholder-text-details").removeClass("active")
      }
    }
  })

  $("#form-details-agreement").on("submit", function (e) {
    e.preventDefault()

    const formData = {
      action: "do_insert_detalies", // Додайте action тут
      name: e.target.name.value,
      phone: iti.getNumber(),
      text: e.target.text.value,
    }

    if (formData.name.trim().length < 2) {
      return $("error-name").text("Поле обов’язкове для заповнення")
    }

    /*     if (formData.text.trim().length > 1 || formData.text.trim().length < 40) {
      return
    } */
    console.log(formData, "name formData")
    $.ajax({
      url: businessAjax.ajaxurl,
      type: "POST",
      data: formData, // передаємо formData з action
      success: function (response) {
        $("#form-details-agreement")[0].reset()
        resetForm()
      },
      error: function (xhr, status, error) {
        console.log(error)
      },
    })
  })
})
