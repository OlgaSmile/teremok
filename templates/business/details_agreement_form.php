<?php

$business_form_image = get_field('business_form_image');
$business_form_title = get_field('business_form_title')

?>
<section class="secttion-details-agreement">
  <?php if (!empty($business_form_image)): ?>
    <img class="secttion-details-agreement__image" src="<?php echo esc_url($business_form_image['url']); ?>" />
  <?php endif ?>
  <div class="secttion-details-agreement__form-wrapper">
    <form id="form-details-agreement" method="post" enctype="multipart/form-data" class="secttion-details-agreement__form" action="<?php echo esc_url(admin_url('admin-ajax.php')); ?>">
      <?php if (!empty($business_form_title)): ?>
        <?php
        get_template_part("template-parts/section-title", null, array('title' => $business_form_title)) ?>

      <?php endif ?>
      <div class="secttion-details-agreement__form-input-container">
        <div class="secttion-details-agreement__form-input-wrapper">
          <label id="name-label" class="secttion-details-agreement-label">Ваше ім’я та прізвище<span class="asterisk">*</span></label>
          <input id="detalies-name" type="phone" name="name" required>
          <div class="details-nema-max-length">
            <p id='error-name' class="error"></p>
            <p id="validation-name">Введіть не менше ніж 2 символа</p><span><span id="current-length-name">0</span>/40</span></>
          </div>
        </div>
        <div class="secttion-details-agreement__form-input-wrapper">
          <label class="details-phone-label">Ваш номер телефону<span class="asterisk">*</span></label>
          <input id="phone" class="input-phone" type="tel" name="phone" required>
          <p id='error-phone' class="error"></p>
        </div>
      </div>
      <div class="secttion-details-agreement__form-texterea-wrapper">
        <label id="paleceholder-text-details">Залишіть свій коментар</label>
        <textarea id="text-details" name="text" rows="1" minlength="40" maxlength="1000" placeholder=""></textarea>
        <div class="details-text-max-length">
          <p id="validation-text-details">Введіть не менше ніж 40 символів</p><span><span id="current-length-text">0</span>/1000</span>
        </div>
      </div>
      <a href="<?php echo home_url() . '/privacy-policy' ?>" class="secttion-details-agreement__form-policy ">Політика конфеденційності</a>
      <button class="secttion-details-agreement__form-submit">Надіслати</button>
      <input type="hidden" name="action" value="do_insert_detalies">
    </form>
    <div class="secttion-details-agreement__bottom-wrapper">
      <a href="<?php echo home_url() . '/biznes-detali' ?>" class="details-agreement-link">
        <div class="detalies-link-wrapper">
          <svg class="detalies-link-wrapper__icon-left" viewBox="0 0 50 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M40.634 0.328125C41.3339 3.28027 44.0847 9.18457 49.4895 9.18457M49.4895 9.18457C41.0714 12.2587 40.1919 16.1764 40.1919 16.7022M49.4895 9.18457H17.6755M0.742188 9.18457H8.39307M8.39307 9.18457L0.742188 5.21062M8.39307 9.18457L0.742188 14.0511M8.39307 9.18457H13.108M13.108 9.18457L7.06701 5.21062M13.108 9.18457L7.06701 14.0511M13.108 9.18457H17.6755M17.6755 9.18457L13.108 5.21062M17.6755 9.18457L13.108 14.0511" stroke="#E67739" stroke-width="1.8" />
          </svg>
          <p>Деталі угоди</p><svg class="detalies-link-wrapper__icon-right" viewBox="0 0 50 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.36596 0.328125C8.66613 3.28027 5.91527 9.18457 0.51049 9.18457M0.51049 9.18457C8.92862 12.2587 9.80812 16.1764 9.80812 16.7022M0.51049 9.18457H32.3245M49.2578 9.18457H41.6069M41.6069 9.18457L49.2578 5.21062M41.6069 9.18457L49.2578 14.0511M41.6069 9.18457H36.892M36.892 9.18457L42.933 5.21062M36.892 9.18457L42.933 14.0511M36.892 9.18457H32.3245M32.3245 9.18457L36.892 5.21062M32.3245 9.18457L36.892 14.0511" stroke="#E67739" stroke-width="1.8" />
          </svg>

        </div>
      </a>

      <p class="secttion-details-agreement__bottom-wrapper-detalies">Переходь за посиланням,
        отримавши код від адміністратора</p>
    </div>

  </div>


</section>