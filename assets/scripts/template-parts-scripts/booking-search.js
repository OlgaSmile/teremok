function getNightPriceText(t){let e="за ";const o=t%10,p=t%100;return e+=p>=11&&p<=14?t+" ночей":1===o?t+" ніч":o>=2&&o<=4?t+" ночі":t+" ночей",e}jQuery(document).ready((function(t){const e=t(".mphb_sc_search-check-in-date > label"),o=t(".mphb_sc_search-check-out-date > label"),p=t(".mphb_sc_search-adults > label");e&&e.text("Дата заїзду"),o&&o.text("Дата виїзду"),p&&p.text("Кількість гостей");const n=t(".accommodation-form-box"),a=t(".mphb-reservation-form-title"),c=t(".mphb-booking-form");n.append(a),n.append(c);t(".site-content-wrapper");const i=window.location.pathname;t(".mphb-room-type").each((function(){const e=t(this),o=t(".mphb-price-period"),p=t(".mphb-book-button"),n=o.text().split(" ")[1];if(Number(n)){const t=getNightPriceText(Number(n));o.text(t)}if(console.log(i,"pathname"),p.text("Забронювати"),"rezul-taty-poshuku/"===i||"/teremok/rezul-taty-poshuku/"===i){const o=e.find(".mphb-room-type-title").detach(),p=e.find("p").detach(),n=e.find(".mphb-room-type-details-title").detach(),a=e.find(".mphb-loop-room-type-attributes").detach(),c=e.find(".mphb-reserve-room-section").detach(),i=t("<div></div>").addClass("description-wrapper");i.append(o),i.append(p),i.append(n),i.append(a),i.append(c),e.append(i)}}))}));