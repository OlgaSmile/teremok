document.addEventListener("DOMContentLoaded",(function(){const e=document.querySelectorAll(".hide-if-value input"),a=document.querySelectorAll(".hide-if-value p");if(e){e.forEach((e=>{e.classList.add("visually-hidden")})),a.forEach((e=>{e.classList.add("visually-hidden")}));document.querySelectorAll(".hide-if-value").forEach((e=>{e.classList.add("custom-acf-btn")}))}var t;(t=jQuery)(document).ready((function(){t('input[type="file"]').on("change",(function(){var e=t(this),a=e.closest(".acf-image-uploader"),s=e[0].files[0];if(s){var i=new FileReader;i.onload=function(e){a.find(".show-if-value img").attr("src",e.target.result),a.find(".show-if-value").show(),a.find(".hide-if-value").hide()},i.readAsDataURL(s)}else a.find(".show-if-value img").attr("src",""),a.find(".show-if-value").hide(),a.find(".hide-if-value").show()})),t(".acf-icon.-cancel").on("click",(function(e){e.preventDefault();var a=t(this).closest(".acf-image-uploader");a.find('input[type="file"]').val(""),a.find(".show-if-value img").attr("src",""),a.find(".show-if-value").hide(),a.find(".hide-if-value").show()}))}));const s=document.getElementById("acf-field_665b1c1ee07a5");if(s){document.querySelector("input#acf-field_665b1c1ee07a5").classList.add("visually-hidden");document.querySelector(".acf-range-wrap").insertAdjacentHTML("beforeend",'<div class="star-rating">\n      <span class="star" data-value="5">&#9733;</span>\n      <span class="star" data-value="4">&#9733;</span>\n      <span class="star" data-value="3">&#9733;</span>\n      <span class="star" data-value="2">&#9733;</span>\n      <span class="star" data-value="1">&#9733;</span>\n    </div>');const e=document.querySelectorAll(".star");e.forEach((a=>{a.addEventListener("click",(function(){const a=this.getAttribute("data-value");s.value=a,e.forEach((e=>e.classList.remove("selected"))),this.classList.add("selected");let t=this.nextElementSibling;for(;t;)t.classList.add("selected"),t=t.nextElementSibling}))}))}}));