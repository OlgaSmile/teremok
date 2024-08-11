const removeSvg='<svg fill="#99b7a2" height="16px" width="16px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1792 1792" xml:space="preserve" stroke="#689762"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M1082.2,896.6l410.2-410c51.5-51.5,51.5-134.6,0-186.1s-134.6-51.5-186.1,0l-410.2,410L486,300.4 c-51.5-51.5-134.6-51.5-186.1,0s-51.5,134.6,0,186.1l410.2,410l-410.2,410c-51.5,51.5-51.5,134.6,0,186.1 c51.6,51.5,135,51.5,186.1,0l410.2-410l410.2,410c51.5,51.5,134.6,51.5,186.1,0c51.1-51.5,51.1-134.6-0.5-186.2L1082.2,896.6z"></path> </g></svg>',validationName={warrningNameLength:"Введіть не менше ніж 2 символа"},validationText={warrningTextLength:"Введіть не менше ніж 40 символів"},validationError="Поле обов’язкове";jQuery(document).ready((function(e){const t=e("#feedback-name-placeholder"),r=e("#user-file"),a=e("#photos-file"),o=e(".custom-images-wrapper");o.hide();let s=e("#current-option").text();const n=e("#feedback_name");n.on("click",(function(r){t.addClass("feedback-name-placeholder---top"),0===r.target.value.trim().length&&e("#name-error").text(validationError).addClass("error")})),n.on("focus",(function(r){t.addClass("feedback-name-placeholder---top"),0===r.target.value.trim().length&&e("#name-error").text(validationError).addClass("error")})),n.on("input",(function(t){const r=t.target.value.trim().length;r<2&&e("#name-error").text(validationName.warrningNameLength).removeClass("error"),r>2&&e("#name-error").text("").removeClass("error"),r>40&&(t.target.value=t.target.value.trim().substring(0,40)),r>40||e("#name-max-length").text(`${r}/40`)})),e(".feedback__modal").on("click",(e=>{if(!n.val()){n.is(e.target)||t.removeClass("feedback-name-placeholder---top")}})),r.on("change",(e=>l(e))),a.on("change",(e=>l(e)));let i=[];const l=t=>{const r=new FileReader;if("feedback_person_photo"===t.target.name){e("#default-user-img").hide();const a=t.currentTarget.files[0];r.readAsDataURL(a),r.onload=t=>{e("#user-img").attr("src",t.target.result).addClass("img-visable").show(),e("#user-file").hide(),e(".custom-user-photo-input").css("cursor","default"),e(".edit-image").show();const r=e("<button>").attr("type","button").html(removeSvg).addClass("delete-user-image").on("click",(function(){u()}));e(".custom-user-photo-input").append(r)}}else{const e=t.currentTarget.files,r=8-i.length,a=Array.from(e).slice(0,r);i=[...i,...a],c(),d()}};function c(){0===i.length?(o.hide(),e(".custom-add-photos-input").show()):(o.show(),e(".custom-add-photos-input").hide())}const d=()=>{e(".custom-images-box").empty(),o.show();const t=i;0!==t.length&&(e(".custom-add-photos-input").hide(),e("#next-add-images").show()),8===t.length&&e("#next-add-images").hide(),t.forEach(((t,r)=>{const a=new FileReader;a.onload=t=>{const a=e("<div>").addClass("feedback-img-container"),o=e("<img>").attr("src",t.target.result).addClass("uploaded-img"),s=e("<button>").attr("type","button").html(removeSvg).addClass("remove-btn").data("index",r).on("click",(function(){m(e(this).data("index"))}));a.append(o).append(s),e(".custom-images-box").append(a)},a.readAsDataURL(t)}))},m=e=>{i.splice(e,1),d(),c()},u=()=>{e("#user-file").val("").show(),e("#user-img").attr("src","").addClass("img-visable").hide(),e(".delete-user-image").hide(),e("#default-user-img").show(),e(".edit-image").hide()};e(".edit-image").on("click",(t=>{e("#user-file").click()})),e("#next-add-images").on("click",(()=>{e("#photos-file").click()}));const p=e("#feedback_ratinge"),h=e(".star");h.on("click",(function(){const t=e(this).data("value");p.val(t),e("#ratinge-error").text("").addClass(""),h.removeClass("selected"),h.each((function(){e(this).data("value")<=t&&e(this).addClass("selected")}))})),e(".custom-select__selected-option").on("click",(function(){e(".custom-select__options-list").addClass("custom-select__options-list---visabled"),e("#selected-open").addClass("selected-open-icon---top"),e("#current-option").addClass("current-option---active-color"),e("#apartment-error").text(validationError).addClass("error")})),e(".options-item").on("click",(function(){const t=e(this).text().trim();e("#apartment-error").text("").removeClass("error"),e("#current-option").text(t),e("#feedback_housing").val(t).change(),g()})),e(".feedback__modal").on("click",(t=>{e("#feedback_housing").val()&&e("#apartment-error").text("").removeClass("error"),t.currentTarget===t.target&&g()}));const g=()=>{e("#selected-open").removeClass("selected-open-icon---top"),e(".custom-select__options-list").removeClass("custom-select__options-list---visabled"),e("#current-option").removeClass("current-option---active-color")},f=e("#feedback-text");f.on("input",(function(t){this.style.height="auto",this.style.height=this.scrollHeight+"px";const r=t.target.value.trim().length;r>1e3?t.target.value=t.target.value.trim().substring(0,1e3):(r>40?e("#texterea-error").text("").removeClass("error"):e("#texterea-error").text(validationText.warrningTextLength).removeClass("error"),e("#text-max-length").text(`${r}/1000`))})),f.on("click",(function(t){e("#plahceholder-text").addClass("feedback-text-placeholder---top"),0===t.target.value.trim().length&&e("#texterea-error").text(validationError).addClass("error")})),f.on("focus",(function(t){e("#plahceholder-text").addClass("feedback-text-placeholder---top"),0===t.target.value.trim().length&&e("#texterea-error").text(validationError).addClass("error")})),f.each((function(){this.style.height="auto",this.style.height=this.scrollHeight+"px"}));const v=()=>{e("#feedback_ratinge").val(e("#feedback_ratinge").attr("min")),h.removeClass("selected"),e("#feedback_housing").val(""),i=[],e(".custom-images-box").empty(),c(),f.val(""),e("#feedback_name").val(""),u(),e("#current-option").text(s),e("#apartment-error").text("").removeClass("error"),e("#texterea-error").text("").removeClass("error"),e("#name-error").text("").removeClass("error"),e("#ratinge-error").text("").removeClass("error"),e("#name-max-length").text("0/40"),e("#text-max-length").text("0/40"),e("#plahceholder-text").removeClass("feedback-text-placeholder---top"),f.css("height","2rem")};e("#feedback-cancel").on("click",(()=>{v(),e("#js-close-feedback-form").click()})),e("#feedback-form").on("submit",(function(t){t.preventDefault();const r=e("#feedback_ratinge").val(),a=e("#feedback_housing").val();if(0===Number(r)&&!a)return e("#apartment-error").text(validationError).addClass("error"),void e("#ratinge-error").text(validationError).addClass("error");if(0===Number(r))return void e("#ratinge-error").text(validationError).addClass("error");if(!a)return void e("#apartment-error").text(validationError).addClass("error");const o=new FormData(this);i.length>0&&i.forEach((e=>o.append("feedback_images[]",e))),o.append("action","do_insert"),e.ajax({url:myAjax.ajaxurl,type:"POST",data:o,processData:!1,contentType:!1,success:function(t){e("#feedback-response").addClass("feedback-response---active"),e("#positive-responce").show(),e("#error-responce").hide(),e(".feedback__modal").addClass("feedback__modal---hide"),"success"===t.status&&(e("#feedback-form")[0].reset(),v()),setTimeout((()=>{e("#feedback-response").removeClass("feedback-response---active"),e("#js-close-feedback-form").click()}),3e3)},error:function(t,r,a){e("#feedback-response").addClass("feedback-response---active"),e(".feedback__modal").addClass("feedback__modal---hide"),"success"===response.status&&(e("#feedback-form")[0].reset(),v()),setTimeout((()=>{e("#positive-response").hide(),e("#feedback-response").removeClass("feedback-response---active"),e("#js-close-feedback-form").click(),e("#error-response").text("Виникла помилка: "+a).show()}),1500)}})}))}));