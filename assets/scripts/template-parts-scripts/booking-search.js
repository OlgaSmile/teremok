function getNightPriceText(e){if(!e)return"за ніч";let t="за ";const p=e%10,o=e%100;return t+=o>=11&&o<=14?e+" ночей":1===p?e+" ніч":p>=2&&p<=4?e+" ночі":e+" ночей",t}jQuery(document).ready((function(e){const t=e(".mphb_sc_search-check-in-date > label"),p=e(".mphb_sc_search-check-out-date > label"),o=e(".mphb_sc_search-adults > label"),a=window.location.pathname;t&&t.text("Дата заїзду"),p&&p.text("Дата виїзду"),o&&o.text("Кількість гостей");const n=e(".accommodation-form-box"),r=e(".mphb-reservation-form-title"),i=e(".mphb-booking-form"),c=e(".mphb_sc_search-submit-button-wrapper > input");"/"===a||"/teremok/"===a?c.val("Знайти й забронювати"):c.val("Змінити й забронювати"),n.append(r),n.append(i),e(".mphb-room-type").each((function(){const t=e(this),p=e(".mphb-price-period"),o=e(".mphb-book-button"),n=e(".mphb-regular-price > strong");n&&n.text("Ціна");const r=p.text().split(" ")[1];if(Number(r)){const e=getNightPriceText(Number(r));p.text(e)}else p.text("за ніч");if(o.text("Забронювати"),"/rezul-taty-poshuku/"===a||"/teremok/rezul-taty-poshuku/"===a){const p=t.find(".mphb-room-type-title").detach(),o=t.find(".mphb-view-details-button-wrapper").detach(),a=t.find("p").detach(),n=t.find(".mphb-loop-room-type-attributes").detach(),r=t.find(".mphb-reserve-room-section").detach(),i=e("<div></div>").addClass("description-wrapper"),c=e("<div></div>").addClass("description-btn-wrapper");i.append(p),i.append(a),i.append(n),c.append(o),c.append(r),i.append(c),t.append(i)}}))}));