const IconArrow='\n<svg xmlns="http://www.w3.org/2000/svg" width="30" height="11" viewBox="0 0 50 18" fill="none">\n  <path d="M40.8531 1C41.5523 3.94928 44.3005 9.84785 49.7 9.84785M49.7 9.84785C41.29 12.919 40.4114 16.8329 40.4114 17.3582M49.7 9.84785H17.9169M1 9.84785H8.64346M8.64346 9.84785L1 5.87775M8.64346 9.84785L1 14.7096M8.64346 9.84785H13.3538M13.3538 9.84785L7.31868 5.87775M13.3538 9.84785L7.31868 14.7096M13.3538 9.84785H17.9169M17.9169 9.84785L13.3538 5.87775M17.9169 9.84785L13.3538 14.7096" stroke="#E67739" stroke-width="1.8"/>\n</svg>\n';function shortenText(e,t=28){return e.length>t?e.slice(0,t)+"...":e}jQuery(document).ready((function(e){const t=e(".mphb_sc_search-check-in-date > label"),p=e(".mphb_sc_search-check-out-date > label"),n=e(".mphb_sc_search-adults > label"),i=window.location.pathname;t.length>0&&t.text("Дата заїзду"),p.length>0&&p.text("Дата виїзду"),n.length>0&&n.text("Кількість гостей");const a=e(".accommodation-form-box"),o=e(".mphb-reservation-form-title"),s=e(".mphb-booking-form"),r=e(".mphb_sc_search-submit-button-wrapper > input");r.val("Знайти й забронювати"),a.append(o),a.append(s),e(".mphb-room-type").each((function(){const t=e(this),p=e(".mphb-price-period"),n=e(".mphb-book-button"),a=e(".mphb-regular-price > strong"),o=e(".mphb-view-details-button");o.length>0&&(o.text("Детальніше"),o.append(IconArrow)),a&&a.text("Ціна");const s=p.text().split(" ");if(s.length>1&&Number(s[1])){const e=getNightPriceText(Number(s[1]));p.text(e)}else p.text("за ніч");if(n.text("Забронювати"),i.includes("search-results")||i.includes("/teremok/search-results/")){r.val("Змінити й забронювати");const p=t.find(".mphb-room-type-title").detach(),n=t.find(".mphb-regular-price").detach(),i=n.find(".mphb-price").detach(),a=i.text().replace(","," ").replace("₴","").trim()+" грн",o=t.find(".mphb-room-type-total-capacity .mphb-attribute-value").text(),s=t.find(".mphb-room-type-facilities .mphb-attribute-value span").map((function(){return e(this).text()})).get(),d=t.find(".mphb-view-details-button-wrapper").detach(),c=t.find("p").detach(),h=t.find(".mphb-loop-room-type-attributes").detach(),l=t.find(".mphb-reserve-room-section").detach(),m=e("<div></div>").addClass("description-wrapper"),b=e('<ul class="convenience__list"></ul>'),u=e("<div></div>").addClass("description-top-wrapper"),f=e("<div></div>").addClass("description-btn-wrapper"),v=e("<div></div>").addClass("description-title-wrapper"),g=`<li><span>${guestIconItem} ${o} Гостей<span></li>`;b.append(g);s.slice(0,5).forEach((function(t){const p=e("<li></li>"),n=iconsList[t]?iconsList[t]:getFacilitiesRandomIcon();p.append(`<span>${n} ${shortenText(t)}</span>`),b.append(p)})),n&&n.append(i.text(a)),v.append(p),v.append(n),u.append(v),u.append(c),u.append(h),u.append(b),f.append(d),f.append(l),m.append(u),m.append(f),t.append(m)}}))}));