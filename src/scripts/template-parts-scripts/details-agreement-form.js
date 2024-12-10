jQuery(document).ready(function ($) {
  const nameLabel = $("#name-label")
  const nameInput = $("#detalies-name")

  const textarea = $("#text-details")
  const input = document.querySelector("#phone")

  if (window.location.pathname.includes("business")) {
    const iti = window.intlTelInput(input, {
      initialCountry: "ua",
      separateDialCode: true,
      utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    })

    input.addEventListener("input", function () {
      const currentCountry = iti.getSelectedCountryData()

      if (currentCountry.dialCode === "380") {
        const maxLength = 9

        var cleanedNumber = input.value.replace(/\D/g, "")

        if (cleanedNumber.length > maxLength) {
          cleanedNumber = cleanedNumber.substring(0, maxLength)
        }

        input.value = cleanedNumber

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
      if (!e.target || typeof e.target.value !== "string") {
        return
      }

      const maxLength = 40
      let value = e.target.value || ""

      const sanitizedValue = value.replace(/[^a-zA-ZА-Яа-яЁёІіЇїЄє\s]/g, "")

      const trimmedValue = sanitizedValue.substring(0, maxLength)

      e.target.value = trimmedValue

      const length = trimmedValue.length

      if (length < 2) {
        $("#validation-name").text("Введіть не менше ніж 2 символа")
      } else {
        $("#validation-name").text("")
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
        action: "do_insert_detalies",
        name: e.target.name.value,
        phone: iti.getNumber(),
        text: e.target.text.value,
      }

      if (formData.name.trim().length < 2) {
        return $("error-name").text("Поле обов’язкове для заповнення")
      }
      $.ajax({
        url: businessAjax.ajaxurl,
        type: "POST",
        data: formData,
        success: function (response) {
          $("#form-details-agreement")[0].reset()
        },
        error: function (xhr, status, error) {
          console.log(error)
        },
      })
    })
  }
})
