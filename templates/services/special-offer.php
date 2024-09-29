<?php
$special_offer = get_field('special_offer');
$images_left = $special_offer['special_offer_photo_left'];
$images_right = $special_offer['special_offer_photo_right'];
$repeater_field = $special_offer['special_offer_item'];

?>
<section class="section-services-page-speccial">
  <div class="teremok-section__desktop-wrapper">
    <div class="teremok-section__box">

      <?php if (!empty($images_left)) : ?>
        <div class="section-services-page__image teremok-section__Image">
          <?php
          foreach ($images_left as  $index => $image) :
          ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']) ?  esc_attr($image['alt']) : 'image'; ?>">
          <?php
          endforeach
          ?>
        </div>
      <?php
      endif
      ?>
    </div>
    <div class="section-services-page-speccial__box---center">
      <div class="section-services-page-speccial__title">
        <?php
        get_template_part("template-parts/section-title", null, array('title' => get_field('proposition_title', 'option'))) ?>

      </div>
      <?php if (!empty($repeater_field)) : ?>
        <ul class="section-services-page__list teremok-section__list">
          <?php

          foreach ($repeater_field as $index => $row) :



          ?>

            <li class="section-services-page-speccial__item">
              <?php if ($index === count($repeater_field) - 1): ?>
                <img class="item-decor" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees1.png'; ?>">
              <?php endif ?>

              <?php if ($index === count($repeater_field) - 2): ?>
                <img class="item-decor2" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>">
              <?php endif ?>
              <?php if (!empty(get_field("mountains_icon", "options")['url'])): ?>
                <img class="section-activity-content__item-content-img" src="<?php echo get_field("mountains_icon", "options")['url'] ?>" alt="<?php echo get_field("mountains_icon", "options")['alt'] ?>">
              <?php endif ?>
              <p>
                <?php echo $row['text']; ?>
              </p>
            </li>

          <?php

          endforeach
          ?>
        </ul>
      <?php endif; ?>

    </div>
    <div class="teremok-section__box">
      <?php if (!empty($images_right)) : ?>
        <div class="section-services-page__image teremok-section__Image">
          <?php
          foreach ($images_right as  $index => $image) :
          ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']) ?  esc_attr($image['alt']) : 'image'; ?>">
          <?php
          endforeach
          ?>
        </div>
      <?php
      endif
      ?>
    </div>
  </div>


  <div class="teremok-section__mobile-wrapper">
    <div class="teremok-section__box-center">
      <div class="teremok-section__title">
        <?php
        get_template_part("template-parts/section-title", null, array('title' => get_field('proposition_title', 'option'))) ?>

      </div>
      <?php if (!empty($repeater_field)) : ?>
        <ul class="section-services-page__list teremok-section__list">
          <?php
          foreach ($repeater_field as  $index => $row) :
          ?>
            <?php if ($index < 1) : ?>

              <li class="section-services-page__item teremok-section__item">
                <?php if ($index === 0): ?>
                  <img class="section-services-page__item-decor-1" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees1.png'; ?>">
                <?php endif ?>
                <img class="teremok-section__img" src="<?php echo $row['img']['url']; ?>" alt="">
                <p>
                  <?php echo $row['text']; ?>
                </p>
              </li>
            <?php endif; ?>

          <?php
          endforeach
          ?>
        </ul>
      <?php endif; ?>
      <?php if (!empty($images_left)) : ?>
        <div class="section-services-page__image teremok-section__Image-mobile">
          <div class="swiper swiper-image-mobile">
            <div class="swiper-wrapper">
              <?php
              foreach ($images_left as  $index => $image) :
              ?>
                <div class="swiper-slide"> <img src="<?php echo esc_attr($image['url']); ?>" alt="<?php echo esc_attr($image['alt']) ?  esc_attr($image['alt']) : 'image'; ?>"></div>
              <?php
              endforeach
              ?>
            </div>
            <div class="autoplay-progress">
              <svg viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="20"></circle>
              </svg>
              <span></span>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php if (!empty($repeater_field)) : ?>
        <ul class="section-services-page__list teremok-section__list">
          <?php
          foreach ($repeater_field as  $index => $row) :
          ?>
            <?php if ($index > 0 && $index < 3) : ?>

              <li class="section-services-page__item teremok-section__item">
                <img class="teremok-section__img" src="<?php echo $row['img']['url']; ?>" alt="">
                <?php if ($index === 2): ?>
                  <img class="section-services-page__item-decor-2" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees1.png'; ?>">
                <?php endif ?>
                <p>
                  <?php echo $row['text']; ?>
                </p>
              </li>

            <?php endif ?>
          <?php
          endforeach
          ?>
        </ul>
      <?php endif; ?>

      <?php if (!empty($images_right)) : ?>
        <div class="teremok-section__Image-mobile section-services-page__image">
          <div class="swiper swiper-image-mobile">
            <div class="swiper-wrapper">
              <?php
              foreach ($images_right as  $index => $image) :
              ?>
                <?php if ($index < 3) : ?>
                  <div class="swiper-slide"> <img src="<?php echo esc_attr($image['url']); ?>" alt="<?php echo esc_attr($image['alt']) ?  esc_attr($image['alt']) : 'image'; ?>"></div>
                <?php endif ?>
              <?php
              endforeach
              ?>
            </div>
            <div class="autoplay-progress">
              <svg viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="20"></circle>
              </svg>
              <span></span>
            </div>
          </div>
        </div>
      <?php endif; ?>


      <?php if (!empty($repeater_field)) : ?>
        <ul class="section-services-page__list teremok-section__list">

          <?php
          foreach ($repeater_field as $index => $row) :
          ?>

            <?php if ($index > 2) : ?>
              <li class="section-services-page__item teremok-section__item">
                <img class="teremok-section__img" src="<?php echo $row['img']['url']; ?>" alt="">
                <?php if ($index === 5): ?>
                  <img class="section-services-page__item-decor-3" src="<?php echo get_template_directory_uri() . '/assets/images/decor-mount.png'; ?>">
                <?php endif ?>

                <p>
                  <?php echo $row['text']; ?>
                </p>
              </li>
            <?php endif; ?>
          <?php
          endforeach
          ?>

        </ul>
      <?php endif; ?>

      <?php if (!empty($images_right) && count($images_right) > 3) : ?>
        <div class="teremok-section__Image-mobile section-services-page__image services-m-b-0 ">
          <div class="swiper swiper-image-mobile">
            <div class="swiper-wrapper">
              <h2></h2>
              <?php
              foreach ($images_right as  $index => $image) :
              ?>
                <?php if ($index > 3): ?>
                  <div class="swiper-slide"> <img src="<?php echo esc_attr($image['url']); ?>" alt="<?php echo esc_attr($image['alt']) ?  esc_attr($image['alt']) : 'image'; ?>"></div>
                <?php endif ?>
              <?php
              endforeach
              ?>
            </div>
            <div class="autoplay-progress">
              <svg viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="20"></circle>
              </svg>
              <span></span>
            </div>
          </div>
        </div>
      <?php endif; ?>

    </div>

  </div>


</section>