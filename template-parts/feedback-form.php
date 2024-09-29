<?php
$user_name_placeholder = get_field('form_user_name', 'options');
$user_photo_placeholder = get_field('form_user_photo', 'options');
$user_house_placeholder = get_field('form_user_house', 'options');
$user_rating_placeholder = get_field('form_user_rating', 'options');
$user_reviews_photos_placeholder = get_field('form_user_reviews_photos', 'options');
$user_reviews_desc_placeholder = get_field('form_user_reviews_desc', 'options');

$names_apartments_otions = get_field('form_user_apartments', 'options');

?>


<div class="feedback__backdrop is-hidden" id="js-feedback-form">

  <div id="feedback-modal" class="feedback__modal">

    <button class="feedback__modal-close" type="button" id="js-close-feedback-form" aria-label="Close modal">
      <svg class="icon__cross" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1.28125 30.3381L30.2443 1.375M30.7212 30.3381L1.75816 1.375" stroke-linecap="round" />
      </svg>
    </button>

    <div class="feedback__modal-title">
      <?php
      $add_feedback_title = get_field('add_feedback_title', 'options');

      get_template_part("template-parts/section-title", null, ['title' => $add_feedback_title]); ?>
    </div>


    <form id="feedback-form" method="post" enctype="multipart/form-data" class="form-feedback" action="<?php echo esc_url(admin_url('admin-ajax.php')); ?>">
      <div class="form-feedback__user-name">
        <label id="feedback-name-placeholder" class="feedback-name-placeholder"><?php echo $user_name_placeholder ?><span class="asterisk">*</span></label>
        <input id="feedback_name" type="text" name="feedback_name" placeholder="" min='2' max="40" required>
        <div class="form-feedback__warning-box">
          <p id="name-error" class="feedback-error"></p>
          <p id="name-max-length" class="feedback-max-length" name="text">0/40</p>
        </div>
      </div>

      <div class="form-feedback__user-photo-wrapper">
        <label><?php echo $user_photo_placeholder ?></label>

        <div class="user-image-box">
          <div class="custom-user-photo-input">
            <img id="default-user-img" class="default-user-img" src="<?php echo get_template_directory_uri() ?>/assets/images/user-photo-form.svg" ?>
            <img id="user-img" class="user-img" src="" />
            <input tabindex="0" id="user-file" type="file" name="feedback_person_photo" accept="image/*" max="1">
          </div>
          <button type="button" class="edit-image"></button>

        </div>


      </div>

      <div class="custom-select">
        <?php if (!empty($names_apartments_otions)) : ?>
          <div>
            <div class="custom-select__selected-option">
              <p id="current-option" class="current-option"><?php echo $user_house_placeholder ?><span class="asterisk">*</span></p>
              <span><svg id="selected-open" class="" xmlns="http://www.w3.org/2000/svg" width="12" height="6" viewBox="0 0 12 6" fill="">
                  <path d="M5.71862 5.72151C5.87449 5.87578 6.12551 5.87578 6.28138 5.72151L11.3708 0.684298C11.6248 0.432914 11.4468 0 11.0894 0H0.910592C0.553235 0 0.375222 0.432913 0.629211 0.684297L5.71862 5.72151Z" fill="" />
                </svg></span>
            </div>
            <div class="custom-select__options-list">
              <?php
              foreach ($names_apartments_otions as $row) :
              ?>
                <div class="options-item">

                  <?php echo $row['option']; ?>
                </div>
              <?php
              endforeach
              ?>
            </div>
          </div>


          <select id='feedback_housing' name="house_number" required>
            <option value="Виберіть опцію" disabled selected>Виберіть опцію</option>
            <?php
            foreach ($names_apartments_otions as $row) :
            ?>
              <option value="<?php echo $row['option']; ?>"> <?php echo $row['option']; ?></option>
            <?php
            endforeach
            ?>

          </select>

        <?php endif ?>
        <div class="form-feedback__warning-box">
          <p id="apartment-error" class="feedback-error"></p>
        </div>
      </div>

      <div class="form-feedback__ratinge-box">
        <label><?php echo $user_rating_placeholder ?><span class="asterisk">*</span></label>
        <input id="feedback_ratinge" type="range" name="feedback_astimation" max="5" value="0" required>
        <div class="star-rating">
          <span class="star" data-value="5">&#9733;</span>
          <span class="star" data-value="4">&#9733;</span>
          <span class="star" data-value="3">&#9733;</span>
          <span class="star" data-value="2">&#9733;</span>
          <span class="star" data-value="1">&#9733;</span>
        </div>
        <div class="form-feedback__warning-box">
          <p id="ratinge-error" class="feedback-error"></p>
        </div>
      </div>


      <div class="form-feedback__add-images-wrapper">
        <label><?php echo $user_reviews_photos_placeholder ?></label>

        <div class="custom-add-images">
          <div class="custom-add-photos-input">
            <img class="animation-input-img-other" src="<?php echo get_template_directory_uri() ?>/assets/images/add-images.svg" ?>
            <div class="add-img-wraper">
              <img class="animation-input-img" src="<?php echo get_template_directory_uri() ?>/assets/images/add-photos-camera.svg" ?>
            </div>
            <img class="animation-input-img-other" src="<?php echo get_template_directory_uri() ?>/assets/images/add-images.svg" ?>
            <input id="photos-file" type="file" accept="image/*" multiple max="8">
          </div>
          <div class="custom-images-wrapper">
            <div class="custom-images-box"></div>
            <div><button id="next-add-images" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                  <line x1="9" y1="0.5" x2="9" y2="18.5" stroke="#689762" stroke-width="2" />
                  <line x1="18" y1="9.5" x2="-8.74228e-08" y2="9.5" stroke="#689762" stroke-width="2" />
                </svg>
              </button></div>
          </div>
        </div>

      </div>

      <div class="form-feedback__text-box">
        <label id="plahceholder-text" class="feedback-name-placeholder"><?php echo $user_reviews_desc_placeholder ?><span class="asterisk">*</span></label>
        <textarea id="feedback-text" name="feedback_text" id="" rows="1" minlength="40" maxlength="1000" placeholder="" required></textarea>
        <div class="form-feedback__warning-box">
          <p id="texterea-error" class="feedback-error"></p>
          <p id="text-max-length" class="feedback-max-length" name="text">0/1000</p>
        </div>
      </div>

      <div class="form-feedback__btn_box">
        <input id="feedback-form-submit" class="feedback-submit-btn" tabindex="0" type="submit" value="<?php echo get_field('send', 'options') ?>">
        <button type='button' id="feedback-cancel" class="feedback-cancel" tabindex="0"><?php echo get_field('cancel', 'options') ?></button>
      </div>
    </form>





  </div>

  <div id="feedback-response" class="feedback-response">
    <button class="feedback__modal-close" type="button" id="js-close-feedback-response-form" aria-label="Close modal">
      <svg class="icon__cross" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1.28125 30.3381L30.2443 1.375M30.7212 30.3381L1.75816 1.375" stroke-linecap="round" />
      </svg>
    </button>
    <div class="feedback__modal-title">
      <?php
      $thanks_feedback = get_field('thanks-feedback', 'options');

      get_template_part("template-parts/section-title", null, ['title' => $thanks_feedback]); ?>
    </div>
    <h3 id="positive-response"><?php echo  get_field('thanks-feedback-desc', 'options'); ?></h3>
    <h3 id="error-response"></h3>
    <div class="feedback-response__logo">
      <?php get_template_part("template-parts/logo_footer"); ?>
    </div>
  </div>
</div>