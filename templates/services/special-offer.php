<?php
$special_offer = get_field('special_offer');
$images_left = $special_offer['special_offer_photo_left'];
$images_right = $special_offer['special_offer_photo_right'];
$repeater_field = $special_offer['special_offer_item'];

?>
<section id="special-offers" class="section-services-page-speccial">
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

    <div class="teremok-section__title">
      <?php
      get_template_part("template-parts/section-title-third", null, array('title' => get_field('proposition_title', 'option'))) ?>

    </div>


    <?php if (!empty($repeater_field)) : ?>
      <div class="special-offert-mobile">
        <?php foreach ($repeater_field as $index => $item) : ?>
          <div class="special-offer-desc-wrapper">
            <?php if (!empty(get_field("mountains_icon", "options")['url'])): ?>
              <img class="section-activity-content__item-content-img" src="<?php echo get_field("mountains_icon", "options")['url'] ?>" alt="<?php echo get_field("mountains_icon", "options")['alt'] ?>">
            <?php endif ?>
            <p><?php echo esc_html($item['text']);
                ?></p>
          </div>

          <?php if (($index + 1) % 2 == 0) : // Після кожного другого елементу 
          ?>
            <?php
            $hasLeftImage = !empty($images_left[$index / 2]);
            $hasRightImage = !empty($images_right[$index / 2]);
            ?>

            <?php if ($hasLeftImage || $hasRightImage) : ?>
              <div class="mobile-special-img-wrapper">
                <?php if ($hasLeftImage && !$hasRightImage) : ?>

                  <div class="mobile-special-img-wrapper__silide">
                    <img src="<?php echo esc_url($images_left[$index / 2]['url']); ?>" alt="<?php echo esc_attr($images_left[$index / 2]['alt']); ?>">
                  </div>
                <?php elseif ($hasRightImage && !$hasLeftImage) : ?>

                  <div class="mobile-special-img-wrapper__silide">
                    <img src="<?php echo esc_url($images_right[$index / 2]['url']); ?>" alt="<?php echo esc_attr($images_right[$index / 2]['alt']); ?>">
                  </div>
                <?php else : ?>

                  <div class="mobile-special-img-wrapper__silide <?php echo ($index / 2) % 2 == 0 ? 'anim-slide-wrapper-primary' : 'anim-slide-wrapper-secondary'; ?>">
                    <img src="<?php echo esc_url($images_left[$index / 2]['url']); ?>" alt="<?php echo esc_attr($images_left[$index / 2]['alt']); ?>">
                  </div>
                  <div class="mobile-special-img-wrapper__silide <?php echo ($index / 2) % 2 == 0 ? 'anim-slide-wrapper-primary' : 'anim-slide-wrapper-secondary'; ?>">
                    <img src="<?php echo esc_url($images_right[$index / 2]['url']); ?>" alt="<?php echo esc_attr($images_right[$index / 2]['alt']); ?>">
                  </div>
                <?php endif; ?>
              </div>
            <?php endif; ?>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>







  </div>


</section>