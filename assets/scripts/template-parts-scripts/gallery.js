!function(e){const o=e(".masonry"),n=e(".masonry-mobile");function t(){e(window).width()>575?o.masonry({itemSelector:".masonry-item",columnWidth:".masonry-item",percentPosition:!0}):n.masonry({itemSelector:".masonry-mobile-item",columnWidth:".sizer",percentPosition:!0})}t(),e(window).resize((function(){t()}))}(window.jQuery),function(e){const o=e("#mobile-video-player"),n=e("#btn-play"),t=e("#btn-pause");const i=new IntersectionObserver(((e,o)=>{e.forEach((e=>{e.isIntersecting?"mobile-video-player"===e.target.id?(n.show(),t.hide()):e.target.play():e.target.pause()}))}),{root:null,threshold:.1});function r(){if("mobile"===(e(window).width()<=575.98?"mobile":"desktop")){const e=document.querySelector("#mobile-video-player");e&&i.observe(e)}else{const e=document.querySelector("#video-player");e&&i.observe(e)}}e(window).on("resize",r),e(document).ready(r),n.on("click",(function(e){e.preventDefault(),o[0].paused&&(o[0].play(),n.hide(),t.show())})),t.on("click",(function(e){e.preventDefault(),o[0].paused||(o[0].pause(),n.show(),t.hide())}))}(window.jQuery);