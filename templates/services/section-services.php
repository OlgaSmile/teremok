<?php
$services = get_field('section_services');
$images_left = $services['section__foto_gallery_left'];
$images_right = $services['section__foto_gallery_right'];
$repeater_field = $services['services'];

?>
<section class="section-services-page">

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
    <div class="teremok-section__box teremok-section__box---center">
      <div class="teremok-section__title">
        <img class="teremok-section__decor-1" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>">
        <?php
        get_template_part("template-parts/section-title", null, array('title' => get_field('services_title', 'option'))) ?>

      </div>
      <?php if (!empty($repeater_field)) : ?>
        <ul class="section-services-page__list teremok-section__list">
          <?php

          foreach ($repeater_field as $index => $row) :



          ?>
            <?php if ($row['services_title'] === 'Харчування') : ?>
              <li class="section-services-page__item teremok-section__item">
                <img class="teremok-section__img" src="<?php echo $row['services_logo']['url']; ?>" alt="">
                <img class="section-services-page__item-decor-2" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>">
                <h3>
                  <?php echo $row['services_title']; ?>
                </h3>
                <p>
                  <?php echo $row['services_desc']; ?>
                </p>
                <div class="section-services-page__learn-more">
                  <?php
                  global $wp;
                  $learn_more = get_field('learn_more', 'options');
                  $link = add_query_arg($wp->query_vars, home_url()) . '/harchuvannya';

                  get_template_part("template-parts/learn-more-btn", null, array('btn_name' => $learn_more, 'link_name' => $link)); ?>
                </div>
              </li>



            <?php else : ?>
              <li class="section-services-page__item teremok-section__item">
                <img class="teremok-section__img" src="<?php echo $row['services_logo']['url']; ?>" alt="">
                <?php if ($index === 1): ?>
                  <img class="section-services-page__item-decor-1" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees1.png'; ?>">
                <?php endif ?>
                <?php if ($index === 5): ?>
                  <img class="section-services-page__item-decor-3" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>">
                <?php endif ?>
                <h3>
                  <?php echo $row['services_title']; ?>
                </h3>
                <p>
                  <?php echo $row['services_desc']; ?>
                </p>
              </li>
            <?php endif; ?>
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
        get_template_part("template-parts/section-title", null, array('title' => $services['section_name'])); ?>

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
                <img class="teremok-section__img" src="<?php echo $row['services_logo']['url']; ?>" alt="">
                <h3>
                  <?php echo $row['services_title']; ?>
                </h3>
                <p>
                  <?php echo $row['services_desc']; ?>
                </p>
              </li>

            <?php endif ?>
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
          foreach ($repeater_field as  $index => $row) :
          ?>
            <?php if ($index > 0 && $index < 3) : ?>

              <li class="section-services-page__item teremok-section__item">
                <img class="teremok-section__img" src="<?php echo $row['services_logo']['url']; ?>" alt="">
                <?php if ($index === 2): ?>
                  <img class="section-services-page__item-decor-2" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees1.png'; ?>">
                <?php endif ?>
                <h3>
                  <?php echo $row['services_title']; ?>
                </h3>
                <p>
                  <?php echo $row['services_desc']; ?>
                </p>
              </li>

            <?php endif ?>
          <?php
          endforeach
          ?>
        </ul>
      <?php endif; ?>

      <?php if (!empty($images_left) && count($images_right) > 2) : ?>
        <div class="section-services-page__image teremok-section__Image-mobile">
          <div class="swiper swiper-image-mobile">
            <div class="swiper-wrapper">
              <?php
              foreach ($images_left as  $index => $image) :
              ?>
                <?php if ($index > 2) : ?>
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
          foreach ($repeater_field as  $index => $row) :
          ?>
            <?php if ($row['services_title'] === 'Харчування') : ?>
              <li class="section-services-page__item teremok-section__item">
                <img class="section-services-page__item-decor-1-position-t" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>">
                <img class="section-services-page__item-decor-1-position-b" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>">
                <img class="teremok-section__img" src="<?php echo $row['services_logo']['url']; ?>" alt="">
                <h3>
                  <?php echo $row['services_title']; ?>
                </h3>
                <p>
                  <?php echo $row['services_desc']; ?>
                </p>
                <div class="section-services-page__learn-more">
                  <?php
                  global $wp;
                  $learn_more = get_field('learn_more', 'options');
                  $link = add_query_arg($wp->query_vars, home_url()) . '/harchuvannya';

                  get_template_part("template-parts/learn-more-btn", null, array('btn_name' => $learn_more, 'link_name' => $link)); ?>
                </div>
              </li>



            <?php endif  ?>
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

            <?php if ($index > 3) : ?>
              <li class="section-services-page__item teremok-section__item">
                <img class="teremok-section__img" src="<?php echo $row['services_logo']['url']; ?>" alt="">
                <?php if ($index === 5): ?>
                  <img class="section-services-page__item-decor-3" src="<?php echo get_template_directory_uri() . '/assets/images/decor-mount.png'; ?>">
                <?php endif ?>
                <h3>
                  <?php echo $row['services_title']; ?>
                </h3>
                <p>
                  <?php echo $row['services_desc']; ?>
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



  <img class="section-services-page__decor-left-popsition-b-desc" src="<?php echo get_template_directory_uri() . '/assets/images/decor-branch.png'; ?>">
  <img class="section-services-page__decor-left-popsition-b" src="<?php echo get_template_directory_uri() . '/assets/images/decor-branch-left.png'; ?>">
</section>