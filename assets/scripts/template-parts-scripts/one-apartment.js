document.addEventListener("DOMContentLoaded",(function(){new Swiper(".one-apartment__gallery",{slidesPerView:1,spaceBetween:10,speed:1e3,loop:!0,lazy:{loadOnTransitionStart:!0,loadPrevNext:!0},pagination:{el:".swiper-pagination",clickable:!0,slideToClickedSlide:!0},navigation:{nextEl:".custom-next-icon",prevEl:".custom-prev-icon"},breakpoints:{576:{initialSlide:1,spaceBetween:0,centeredSlides:!0,slidesPerView:"auto"}}});new Swiper(".one-apartment__services--mobile",{slidesPerView:3,spaceBetween:10,speed:1e3,loop:!0,lazy:{loadOnTransitionStart:!0,loadPrevNext:!0},pagination:{el:".swiper-pagination",clickable:!0,slideToClickedSlide:!0},navigation:{nextEl:".custom-next-icon",prevEl:".custom-prev-icon"},breakpoints:{576:{initialSlide:1,spaceBetween:0,centeredSlides:!0,slidesPerView:"auto"}}})}));