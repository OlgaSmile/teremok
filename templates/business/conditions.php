<?php

$title = get_field('business_condition_title');

$images_left = get_field('business_conditions_images_left');
$images_right = get_field('business_conditions_images_right');

$repeater_field =  get_field('conditions');
?>


<section class="section-conditions">
  <div class="teremok-section__desktop-wrapper">
    <div class="teremok-section__box">

      <?php if (is_array($images_left) && !empty($images_left)) : ?>
        <div class="section-services-page__image teremok-section__Image">
          <?php foreach ($images_left as $index => $image) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']) ? esc_attr($image['alt']) : 'image'; ?>">
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>

    <div class="section-services-page-speccial__box---center">
      <?php if (!empty($title)): ?>
        <?php
        get_template_part("template-parts/section-title", null, array('title' => $title)); ?>
      <?php endif; ?>

      <?php if (is_array($repeater_field) && !empty($repeater_field)) : ?>
        <ul class="section-services-page__list teremok-section__list section-conditions__list">
          <?php foreach ($repeater_field as $index => $row) : ?>

            <li class="section-services-page-speccial__item">
              <?php if (!empty(get_field("mountains_bg_icon", "options")['url'])): ?>
                <img class="section-activity-content__item-content-img" src="<?php echo get_field("mountains_bg_icon", "options")['url'] ?>" alt="<?php echo get_field("mountains_icon", "options")['alt'] ?>">
              <?php endif; ?>
              <p>
                <?php echo $row['desc']; ?>
              </p>
            </li>

          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

    </div>

    <div class="teremok-section__box">
      <?php if (is_array($images_right) && !empty($images_right)) : ?>
        <div class="section-services-page__image teremok-section__Image">
          <?php foreach ($images_right as $index => $image) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']) ? esc_attr($image['alt']) : 'image'; ?>">
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>

  <div class="teremok-section__mobile-wrapper">
    <?php if (have_rows("conditions")) : ?>
      <div class="special-offert-mobile">
        <?php if (!empty($title)): ?>
          <?php
          get_template_part("template-parts/section-title", null, array('title' => $title)); ?>
        <?php endif; ?>
        <?php
        $index = 0; // Індекс для циклу
        while (have_rows('conditions')) : the_row(); ?>
          <div class="special-offer-desc-wrapper">
            <?php if (!empty(get_field("mountains_bg_icon", "options")['url'])): ?>
              <img class="section-activity-content__item-content-img" src="<?php echo get_field("mountains_bg_icon", "options")['url'] ?>" alt="<?php echo get_field("mountains_icon", "options")['alt'] ?>">
            <?php endif; ?>
            <p><?php echo esc_html(get_sub_field('desc')); ?></p>
          </div>


          <?php if ($index === 1 && is_array($images_left)) : ?>
            <?php if (!empty($images_left)) : ?>
              <div class="teremok-section__Image-mobile" id="block2">
                <div class="swiper swiper-image-mobile">
                  <div class="swiper-wrapper">
                    <?php foreach ($images_left as $image) : ?>
                      <div class="swiper-slide">
                        <img src="<?php echo esc_attr($image['url']); ?>" alt="<?php echo esc_attr($image['alt']) ? esc_attr($image['alt']) : 'image'; ?>">
                      </div>
                    <?php endforeach; ?>
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
          <?php endif; ?>


          <?php if ($index === (count($repeater_field) - 1) && is_array($images_right)) : ?>
            <?php if (!empty($images_right)) : ?>
              <div class="teremok-section__Image-mobile" id="block2">
                <div class="swiper swiper-image-mobile">
                  <div class="swiper-wrapper">
                    <?php foreach ($images_right as $image) : ?>
                      <div class="swiper-slide">
                        <img src="<?php echo esc_attr($image['url']); ?>" alt="<?php echo esc_attr($image['alt']) ? esc_attr($image['alt']) : 'image'; ?>">
                      </div>
                    <?php endforeach; ?>
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
          <?php endif; ?>

        <?php $index++;
        endwhile; ?>
      </div>
    <?php endif; ?>
  </div>


</section>