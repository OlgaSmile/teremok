document.addEventListener("DOMContentLoaded",(function(){document.querySelectorAll(".rate-js").forEach((e=>{const t=+e.dataset.num;for(let s=1;s<=t;s+=1)e.insertAdjacentHTML("beforeend",'<span class="onefeedback__star">&#9733;</span>')}))})),function(e){let t,s,o;function i(i){e(`#modal-${i.id}`).addClass("active"),o=i.id;const n=e(i).attr("image-id"),r=e(`#swiper-bottom-${i.id}`),a=e(`#swiper-top-${i.id}`);if(r.length>0&&a.length>0){r.addClass("swiper-reviews-bottom"),a.addClass("swiper-reviews-top");const n=e(".swiper-reviews-bottom"),c=e(".swiper-reviews-top");n&&c&&((d=i.id)||o===d)&&(t=new Swiper(".swiper-reviews-bottom",{spaceBetween:3,slidesPerView:5,freeMode:!0,watchSlidesProgress:!0}),s=new Swiper(".swiper-reviews-top",{spaceBetween:10,loop:!0,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},thumbs:{swiper:t},keyboard:{enabled:!0,onlyInViewport:!0}}))}var d;s.slideTo(n-1)}function n(){const t=e(`#swiper-bottom-${o}`),s=e(`#swiper-top-${o}`);t.removeClass("swiper-reviews-bottom"),s.removeClass("swiper-reviews-top"),e(`#modal-${o}`).removeClass("active"),document.body.classList.remove("overflow-hidden"),e(".swiper-reviews-bottom").each((function(){this.swiper&&this.swiper.destroy()})),e(".swiper-reviews-top").each((function(){this.swiper&&this.swiper.destroy()}))}e(".img-thumbnail").on("click",(function(e){document.body.classList.add("overflow-hidden"),i(this)})),e(".close-modal").on("click",(function(e){n()})),e(".modal-swiper-backdrop").on("click",(function(e){e.target===e.currentTarget&&(console.log("click"),n())})),e(document).on("keydown",(function(t){e(".active")&&"Escape"===t.key&&n()})),e(".reviews-btn-watch-more").on("click",(function(t){const s=e(this).attr("data-target"),o=e(`#desc-${s}`);s&&(o.hasClass("reviews-text-hidden")?(o.removeClass("reviews-text-hidden").addClass("active-text"),console.log(s,"btnId"),e(`#btn-${s}`).addClass("btn-active-watch-more"),e(`#btn-${s}`).addClass("spin-fade")):(o.removeClass("active-text").addClass("reviews-text-hidden"),e(`#btn-${s}`).removeClass("spin-fade"),e(`#btn-${s}`).removeClass("btn-active-watch-more")))}))}(window.jQuery);