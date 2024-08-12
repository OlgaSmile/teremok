<?php
$services = get_field('section_services');
$images = $services['section__foto_gallery'];
$repeater_field = $services['services'];

?>
<section class="section-services-page">

  <div class="teremok-section__desktop-wrapper">
    <div class="teremok-section__box">

      <?php if (!empty($images)) : ?>
        <div class="section-services-page__image teremok-section__Image">
          <?php
          foreach ($images as  $index => $image) :
          ?>
            <?php if ($index < 6) : ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']) ?  esc_attr($image['alt']) : 'image'; ?>">
            <?php endif ?>
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
        <?php
        get_template_part("template-parts/section-title", null, array('title' => get_field('services_title', 'option'))) ?>

      </div>
      <?php if (!empty($repeater_field)) : ?>
        <ul class="section-services-page__list teremok-section__list">
          <?php
          foreach ($repeater_field as $row) :
          ?>
            <?php if ($row['services_title'] === 'Харчування') : ?>
              <li class="section-services-page__item teremok-section__item">
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



            <?php else : ?>
              <li class="section-services-page__item teremok-section__item">
                <img class="teremok-section__img" src="<?php echo $row['services_logo']['url']; ?>" alt="">
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
      <?php if (!empty($images)) : ?>
        <div class="section-services-page__image teremok-section__Image">
          <?php
          foreach ($images as  $index => $image) :
          ?>
            <?php if ($index > 5) : ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']) ?  esc_attr($image['alt']) : 'image'; ?>">
            <?php endif ?>
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
            <?php if ($index < 2) : ?>
              <?php if ($row['services_title'] === 'Харчування') : ?>
                <li class="section-services-page__item teremok-section__item">
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



              <?php else : ?>
                <li class="section-services-page__item teremok-section__item">
                  <img class="teremok-section__img" src="<?php echo $row['services_logo']['url']; ?>" alt="">
                  <h3>
                    <?php echo $row['services_title']; ?>
                  </h3>
                  <p>
                    <?php echo $row['services_desc']; ?>
                  </p>
                </li>
              <?php endif; ?>
            <?php endif ?>
          <?php
          endforeach
          ?>
        </ul>
      <?php endif; ?>
      <?php if (!empty($images)) : ?>
        <div class="section-services-page__image teremok-section__Image-mobile">
          <div class="swiper swiper-image-mobile">
            <div class="swiper-wrapper">
              <?php
              foreach ($images as  $index => $image) :
              ?>
                <?php if ($index < 4) : ?>
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
            <?php if ($index > 1 && $index < 4) : ?>
              <?php if ($row['services_title'] === 'Харчування') : ?>
                <li class="section-services-page__item teremok-section__item">
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



              <?php else : ?>
                <li class="section-services-page__item teremok-section__item">
                  <img class="teremok-section__img" src="<?php echo $row['services_logo']['url']; ?>" alt="">
                  <h3>
                    <?php echo $row['services_title']; ?>
                  </h3>
                  <p>
                    <?php echo $row['services_desc']; ?>
                  </p>
                </li>
              <?php endif; ?>
            <?php endif ?>
          <?php
          endforeach
          ?>
        </ul>
      <?php endif; ?>

      <?php if (!empty($images)) : ?>
        <div class="section-services-page__image teremok-section__Image-mobile">
          <div class="swiper swiper-image-mobile">
            <div class="swiper-wrapper">
              <?php
              foreach ($images as  $index => $image) :
              ?>
                <?php if ($index > 3 && $index < 8) : ?>
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
            <?php if ($index > 3) : ?>
              <?php if ($row['services_title'] === 'Харчування') : ?>
                <li class="section-services-page__item teremok-section__item">
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



              <?php else : ?>
                <li class="section-services-page__item teremok-section__item">
                  <img class="teremok-section__img" src="<?php echo $row['services_logo']['url']; ?>" alt="">
                  <h3>
                    <?php echo $row['services_title']; ?>
                  </h3>
                  <p>
                    <?php echo $row['services_desc']; ?>
                  </p>
                </li>
              <?php endif; ?>
            <?php endif ?>
          <?php
          endforeach
          ?>

        </ul>
      <?php endif; ?>

      <?php if (!empty($images)) : ?>
        <div class="teremok-section__Image-mobile section-services-page__image services-m-b-0 ">
          <div class="swiper swiper-image-mobile">
            <div class="swiper-wrapper">
              <?php
              foreach ($images as  $index => $image) :
              ?>
                <?php if ($index > 7) : ?>
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