document.addEventListener("DOMContentLoaded",(function(){document.querySelectorAll(".rate-js").forEach((e=>{console.dir(e.dataset.num);const n=+e.dataset.num;for(let t=1;t<=n;t+=1)e.insertAdjacentHTML("beforeend",'<span class="onefeedback__star">&#9733;</span>')}))}));