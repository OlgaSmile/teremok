<<<<<<< HEAD
document.addEventListener("DOMContentLoaded", function () {
  //image input
  const imageInputs = document.querySelectorAll(".hide-if-value input")
  const imageTexts = document.querySelectorAll(".hide-if-value p")

  if (imageInputs) {
    // hide default tags
    imageInputs.forEach((inp) => {
      inp.classList.add("visually-hidden")
    })
    imageTexts.forEach((inp) => {
      inp.classList.add("visually-hidden")
    })

    // add custom class
    const imageWrap = document.querySelectorAll(".hide-if-value")
    imageWrap.forEach((wrap) => {
      wrap.classList.add("custom-acf-btn")
    })
  }

  ;(function ($) {
    $(document).ready(function () {
      $('input[type="file"]').on("change", function () {
        var $input = $(this)
        var $parent = $input.closest(".acf-image-uploader")
        var file = $input[0].files[0]

        if (file) {
          var reader = new FileReader()

          reader.onload = function (e) {
            $parent.find(".show-if-value img").attr("src", e.target.result)
            $parent.find(".show-if-value").show()
            $parent.find(".hide-if-value").hide()
          }

          reader.readAsDataURL(file)
        } else {
          $parent.find(".show-if-value img").attr("src", "")
          $parent.find(".show-if-value").hide()
          $parent.find(".hide-if-value").show()
        }
      })

      $(".acf-icon.-cancel").on("click", function (e) {
        e.preventDefault()
        var $parent = $(this).closest(".acf-image-uploader")
        $parent.find('input[type="file"]').val("")
        $parent.find(".show-if-value img").attr("src", "")
        $parent.find(".show-if-value").hide()
        $parent.find(".hide-if-value").show()
      })
    })
  })(jQuery)

  //range
  const hiddenInput = document.getElementById("acf-field_665b1c1ee07a5")
  if (hiddenInput) {
    const range = document.querySelector("input#acf-field_665b1c1ee07a5")
    range.classList.add("visually-hidden")
    const rangeBox = document.querySelector(".acf-range-wrap")
    rangeBox.insertAdjacentHTML(
      "beforeend",
      `<div class="star-rating">
      <span class="star" data-value="5">&#9733;</span>
      <span class="star" data-value="4">&#9733;</span>
      <span class="star" data-value="3">&#9733;</span>
      <span class="star" data-value="2">&#9733;</span>
      <span class="star" data-value="1">&#9733;</span>
    </div>`,
    )

    const stars = document.querySelectorAll(".star")

    stars.forEach((star) => {
      star.addEventListener("click", function () {
        const value = this.getAttribute("data-value")
        hiddenInput.value = value

        stars.forEach((s) => s.classList.remove("selected"))
        this.classList.add("selected")
        let next = this.nextElementSibling
        while (next) {
          next.classList.add("selected")
          next = next.nextElementSibling
        }
      })
    })
  }
=======
const removeSvg = `<svg fill="#99b7a2" height="16px" width="16px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1792 1792" xml:space="preserve" stroke="#689762"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M1082.2,896.6l410.2-410c51.5-51.5,51.5-134.6,0-186.1s-134.6-51.5-186.1,0l-410.2,410L486,300.4 c-51.5-51.5-134.6-51.5-186.1,0s-51.5,134.6,0,186.1l410.2,410l-410.2,410c-51.5,51.5-51.5,134.6,0,186.1 c51.6,51.5,135,51.5,186.1,0l410.2-410l410.2,410c51.5,51.5,134.6,51.5,186.1,0c51.1-51.5,51.1-134.6-0.5-186.2L1082.2,896.6z"></path> </g></svg>`

// validation

const validationName = {
  warrningNameLength: "Введіть не менше ніж 2 символа",
}

const validationText = {
  warrningTextLength: "Введіть не менше ніж 40 символів",
}

const validationError = "Поле обов’язкове"

jQuery(document).ready(function ($) {
  const labelName = $("#feedback-name-placeholder")
  const userImgInput = $("#user-file")
  const photosFile = $("#photos-file")
  const customImagesWrapper = $(".custom-images-wrapper")
  customImagesWrapper.hide()

  let defaultApatmentValue = $("#current-option").text()
  // name
  const feedbackImputname = $("#feedback_name")

  feedbackImputname.on("click", function (e) {
    labelName.addClass("feedback-name-placeholder---top")
    if (e.target.value.trim().length === 0) {
      $("#name-error").text(validationError).addClass("error")
    }
  })

  feedbackImputname.on("focus", function (e) {
    labelName.addClass("feedback-name-placeholder---top")
    if (e.target.value.trim().length === 0) {
      $("#name-error").text(validationError).addClass("error")
    }
  })

  feedbackImputname.on("input", function (e) {
    const maxLength = 40
    const length = e.target.value.trim().length

    if (length < 2) {
      $("#name-error")
        .text(validationName.warrningNameLength)
        .removeClass("error")
    }
    if (length > 2) {
      $("#name-error").text("").removeClass("error")
    }

    if (length > maxLength) {
      e.target.value = e.target.value.trim().substring(0, maxLength)
    }

    if (length > 40) {
      return
    }
    $("#name-max-length").text(`${length}/40`)
  })

  // click modal close label

  $(".feedback__modal").on("click", (e) => {
    if (!feedbackImputname.val()) {
      const isClickInsideInput = feedbackImputname.is(e.target)
      if (!isClickInsideInput) {
        labelName.removeClass("feedback-name-placeholder---top")
      }
    }
  })

  userImgInput.on("change", (e) => changeImageUpload(e))
  photosFile.on("change", (e) => changeImageUpload(e))

  let newArray = []

  const changeImageUpload = (el) => {
    const reader = new FileReader()

    if (el.target.name === "feedback_person_photo") {
      $("#default-user-img").hide()
      const file = el.currentTarget.files[0]
      reader.readAsDataURL(file)

      reader.onload = (e) => {
        $("#user-img")
          .attr("src", e.target.result)
          .addClass("img-visable")
          .show()
        $("#user-file").hide()
        $(".custom-user-photo-input").css("cursor", "default")
        $(".edit-image").show()

        const removeBtn = $("<button>")
          .attr("type", "button")
          .html(removeSvg)
          .addClass("delete-user-image")
          .on("click", function () {
            removeUserImage()
          })
        $(".custom-user-photo-input").append(removeBtn)
      }
    } else {
      const files = el.currentTarget.files
      const remainingSlots = 8 - newArray.length

      const filesToAdd = Array.from(files).slice(0, remainingSlots)
      newArray = [...newArray, ...filesToAdd]
      checkArrayAndToggleWrapper()
      renderImages()
    }
  }

  function checkArrayAndToggleWrapper() {
    if (newArray.length === 0) {
      customImagesWrapper.hide()

      $(".custom-add-photos-input").show()
    } else {
      customImagesWrapper.show()
      $(".custom-add-photos-input").hide()
    }
  }

  const renderImages = () => {
    $(".custom-images-box").empty()

    customImagesWrapper.show()

    const selectedFiles = newArray

    if (selectedFiles.length !== 0) {
      $(".custom-add-photos-input").hide()
      $("#next-add-images").show()
    }

    if (selectedFiles.length === 8) {
      $("#next-add-images").hide()
    }

    selectedFiles.forEach((file, index) => {
      const imgReader = new FileReader()

      imgReader.onload = (e) => {
        const imgContainer = $("<div>").addClass("feedback-img-container")

        const img = $("<img>")
          .attr("src", e.target.result)
          .addClass("uploaded-img")

        const removeBtn = $("<button>")
          .attr("type", "button")
          .html(removeSvg)
          .addClass("remove-btn")
          .data("index", index)
          .on("click", function () {
            removeImage($(this).data("index"))
          })

        imgContainer.append(img).append(removeBtn)

        $(".custom-images-box").append(imgContainer)
      }

      imgReader.readAsDataURL(file)
    })
  }

  const removeImage = (index) => {
    newArray.splice(index, 1)
    renderImages()
    checkArrayAndToggleWrapper()
  }

  const removeUserImage = () => {
    $("#user-file").val("").show()
    $("#user-img").attr("src", "").addClass("img-visable").hide()
    $(".delete-user-image").hide()
    $("#default-user-img").show()
    $(".edit-image").hide()
  }

  $(".edit-image").on("click", (e) => {
    $("#user-file").click()
  })

  $("#next-add-images").on("click", () => {
    $("#photos-file").click()
  })

  // ratings
  const inputRating = $("#feedback_ratinge")
  const stars = $(".star")

  stars.on("click", function () {
    const value = $(this).data("value")
    inputRating.val(value)
    $("#ratinge-error").text("").addClass("")
    stars.removeClass("selected")

    stars.each(function () {
      if ($(this).data("value") <= value) {
        $(this).addClass("selected")
      }
    })
  })

  // apartments
  $(".custom-select__selected-option").on("click", function () {
    $(".custom-select__options-list").addClass(
      "custom-select__options-list---visabled",
    )
    $("#selected-open").addClass("selected-open-icon---top")
    $("#current-option").addClass("current-option---active-color")
    $("#apartment-error").text(validationError).addClass("error")
  })

  $(".options-item").on("click", function () {
    const selectedValue = $(this).text().trim()
    $("#apartment-error").text("").removeClass("error")
    $("#current-option").text(selectedValue)
    $("#feedback_housing").val(selectedValue).change()
    hideSelectelList()
  })

  $(".feedback__modal").on("click", (e) => {
    const value = $("#feedback_housing").val()

    if (value) {
      $("#apartment-error").text("").removeClass("error")
    }
    if (e.currentTarget === e.target) {
      hideSelectelList()
    }
  })

  const hideSelectelList = () => {
    $("#selected-open").removeClass("selected-open-icon---top")
    $(".custom-select__options-list").removeClass(
      "custom-select__options-list---visabled",
    )
    $("#current-option").removeClass("current-option---active-color")
  }

  const textarea = $("#feedback-text")

  textarea.on("input", function (e) {
    this.style.height = "auto"
    this.style.height = this.scrollHeight + "px"

    const maxLength = 1000
    const length = e.target.value.trim().length

    if (length > maxLength) {
      e.target.value = e.target.value.trim().substring(0, maxLength)
      return
    }

    if (length > 40) {
      $("#texterea-error").text(``).removeClass("error")
    } else {
      $("#texterea-error")
        .text(validationText.warrningTextLength)
        .removeClass("error")
    }

    $("#text-max-length").text(`${length}/1000`)
  })

  textarea.on("click", function (e) {
    $("#plahceholder-text").addClass("feedback-text-placeholder---top")
    if (e.target.value.trim().length === 0) {
      $("#texterea-error").text(validationError).addClass("error")
    }
  })

  textarea.on("focus", function (e) {
    $("#plahceholder-text").addClass("feedback-text-placeholder---top")
    if (e.target.value.trim().length === 0) {
      $("#texterea-error").text(validationError).addClass("error")
    }
  })

  textarea.each(function () {
    this.style.height = "auto"
    this.style.height = this.scrollHeight + "px"
  })

  const resetForm = () => {
    $("#feedback_ratinge").val($("#feedback_ratinge").attr("min"))
    stars.removeClass("selected")
    $("#feedback_housing").val("")
    newArray = []
    $(".custom-images-box").empty()
    checkArrayAndToggleWrapper()
    textarea.val("")

    $("#feedback_name").val("")
    removeUserImage()

    $("#current-option").text(defaultApatmentValue)
    $("#apartment-error").text("").removeClass("error")
    $("#texterea-error").text("").removeClass("error")
    $("#name-error").text("").removeClass("error")
    $("#ratinge-error").text("").removeClass("error")
    $("#name-max-length").text(`0/40`)
    $("#text-max-length").text(`0/40`)
    $("#plahceholder-text").removeClass("feedback-text-placeholder---top")

    textarea.css("height", "2rem")
  }

  $("#feedback-cancel").on("click", () => {
    resetForm()
    $("#js-close-feedback-form").click()
  })

  $("#feedback-form").on("submit", function (e) {
    e.preventDefault()
    const rating = $("#feedback_ratinge").val()
    const apartmen = $("#feedback_housing").val()

    if (Number(rating) === 0 && !apartmen) {
      $("#apartment-error").text(validationError).addClass("error")
      $("#ratinge-error").text(validationError).addClass("error")
      return
    }
    if (Number(rating) === 0) {
      $("#ratinge-error").text(validationError).addClass("error")
      return
    }

    if (!apartmen) {
      $("#apartment-error").text(validationError).addClass("error")
      return
    }

    const formData = new FormData(this)

    if (newArray.length > 0) {
      newArray.forEach((file) => formData.append("feedback_images[]", file))
    }
    formData.append("action", "do_insert")

    $.ajax({
      url: myAjax.ajaxurl,
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function (response) {
        $("#feedback-response").addClass("feedback-response---active")
        $("#positive-responce").show()
        $("#error-responce").hide()
        $(".feedback__modal").addClass("feedback__modal---hide")

        if (response.status === "success") {
          $("#feedback-form")[0].reset()
          resetForm()
        }

        setTimeout(() => {
          $("#feedback-response").removeClass("feedback-response---active")
          $("#js-close-feedback-form").click()
        }, 3000)
      },

      error: function (xhr, status, error) {
        $("#feedback-response").addClass("feedback-response---active")
        $(".feedback__modal").addClass("feedback__modal---hide")

        if (response.status === "success") {
          $("#feedback-form")[0].reset()
          resetForm()
        }

        setTimeout(() => {
          $("#positive-response").hide()
          $("#feedback-response").removeClass("feedback-response---active")
          $("#js-close-feedback-form").click()
          $("#error-response")
            .text("Виникла помилка: " + error + "")
            .show()
        }, 1500)
      },
    })
  })
>>>>>>> b2f20337973fe2e47c457567aab3bb17fbdb06ac
})
