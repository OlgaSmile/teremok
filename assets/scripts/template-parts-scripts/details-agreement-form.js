jQuery(document).ready((function(e){const t=e("#name-label"),a=e("#detalies-name"),r=(e(".secttion-details-agreement__form-input-wrapper"),e("#text-details"));var n=document.querySelector("#phone"),l=window.intlTelInput(n,{initialCountry:"ua",separateDialCode:!0,utilsScript:"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"});n.addEventListener("input",(function(){if("380"!==l.getSelectedCountryData().dialCode)if(l.isValidNumber()){a=l.getNumber(intlTelInputUtils.numberFormat.NATIONAL);l.setNumber(a),e("#error-phone").text("")}else e("#error-phone").text("Не вірно введений номер");else{const r=9;var t=n.value.replace(/\D/g,"");if(t.length>r&&(t=t.substring(0,r)),n.value=t,l.isValidNumber()){var a=l.getNumber(intlTelInputUtils.numberFormat.NATIONAL);l.setNumber(a),e("#error-phone").text("")}else e("#error-phone").text("Не вірно введений номер")}})),a.on("input",(t=>{const a=t.target.value.trim().length;a>40?t.target.value=t.target.value.substring(0,40):e("#current-length-name").text(a)})),a.on("click",(e=>{t.addClass("active")})),a.on("focus",(e=>{t.addClass("active")})),e(".secttion-details-agreement").on("click",(e=>{if(!a.val().trim()){a.val("");a.is(e.target)||t.removeClass("active")}})),r.on("input",(function(t){this.style.height="auto",this.style.height=this.scrollHeight+"px";const a=t.target.value.trim().length;a>1e3?t.target.value=t.target.value.substring(0,1e3):(a>40?e("#texterea-error").text("").removeClass("error"):e("#texterea-error").text(validationText.warrningTextLength).removeClass("error"),e("#current-length-text").text(`${a}`))})),e("#text-details").on("click",(function(t){e("#paleceholder-text-details").addClass("active")})),e("#text-details").on("focus",(function(t){e("#paleceholder-text-details").addClass("active")})),e(".secttion-details-agreement").on("click",(t=>{if(!r.val().trim()){e("#text-details").is(t.target)||(r.val(""),e("#paleceholder-text-details").removeClass("active"))}})),e("#form-details-agreement").on("submit",(function(t){t.preventDefault();const a={action:"do_insert_detalies",name:t.target.name.value,phone:l.getNumber(),text:t.target.text.value};if(a.name.trim().length<2)return e("error-name").text("Поле обов’язкове для заповнення");console.log(a,"name formData"),e.ajax({url:businessAjax.ajaxurl,type:"POST",data:a,success:function(t){e("#form-details-agreement")[0].reset(),resetForm()},error:function(e,t,a){console.log(a)}})}))}));