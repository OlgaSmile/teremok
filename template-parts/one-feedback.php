<?php

if (is_object($post) && property_exists($post, 'ID')) {
  $post_id = $post->ID;
} else {
  echo 'Error: $post is not an object or ID property does not exist.';
}

?>
<div class="swiper-slide onefeedback">
  <div>
    <div class="onefeedback__rate rate-js" data-num="<?php the_field("feedback_astimation", $post_id) ?>"></div>
    <div class="onefeedback__box">
      <?php
      $text = get_field('feedback_text', $post_id);
      $characterAmount = 380;
      $characterAmountMobile = 300;

      $add_photos = get_field('feedback_add_photos', $post_id);
      if ($add_photos) {
        foreach ($add_photos as $key => $image) {
          if ($image) {
            $characterAmount = 220;
            $characterAmountMobile = 130;
          }
        }
      }; ?>

      <div class="onefeedback__box-description">
        <p>
          <?php echo wp_html_excerpt($text, $characterAmount, '...');
          ?>
        </p>
      </div>
      <div class="onefeedback__box-description--mobile">
        <p>
          <?php echo wp_html_excerpt($text, $characterAmountMobile, '...');
          ?>
        </p>
      </div>

      <?php

      if ($add_photos) { ?>

        <ul class="onefeedback__box-photos">
          <?php
          $max_photos = 5;
          $counter = 0;

          if (is_array($add_photos) && !empty($add_photos))
            $filtered_photos = array_filter($add_photos, function ($value) {
              return !empty($value) || $value === '0' || $value === 0;
            });
          $total_photos = count($filtered_photos);
          foreach ($add_photos as $key => $image) {
            if ($counter >= $max_photos) {
              break;
            }

            if ($image) {
              $alt = $image['alt'];
              $thumbnail = $image['sizes']['thumbnail'];
              $is_fifth_image = ($counter === 5);
              $counter++;

          ?>
              <li class="onefeedback__box-image <?php echo 'more'; ?>">
                <?php if ($total_photos > 5) : ?>
                  <span class="more-number">+<?php echo $total_photos - 4 ?></span>
                <?php endif ?>
                <img class="onefeedback__image" src="<?= $thumbnail ?>" alt="<?= $alt ?>">
              </li>
          <?php
            }
          }
          ?>
        </ul>
      <?php } ?>

    </div>
  </div>

  <div class="onefeedback__bottom-wrapper">

    <div class="watchmore_button">
      <?php
      $btn_name = get_field('watch_all', 'options');
      $link_page = home_url() . '/vidguky';
      get_template_part("template-parts/read-more-btn", null, ['btn_name' => $btn_name, 'link_name' => $link_page]); ?>
    </div>

    <div class="onefeedback__user">

      <div class="onefeedback__user-image_wrap">
        <?php
        $image = get_field('feedback_person_photo', $post_id);
        $size = 'thumbnail';
        if ($image) { ?>
          <?php
          echo wp_get_attachment_image($image, $size); ?>
        <?php } else { ?>
          <img src="<?php the_field('user_placeholder', "options") ?>" alt="плейсхолдер фотографії користувача">
        <?php } ?>
      </div>


      <div class="onefeedback__user-info">

        <?php
        $nameGroup = get_field('feedback_name', $post_id);
        if ($nameGroup) { ?>
          <p class='onefeedback__user-info_name'><?php echo  $nameGroup; ?>
          </p>
        <?php } ?>

        <div class='onefeedback__user-info_date'><?php the_time('d.m.Y'); ?></div>
      </div>
    </div>
  </div>

</div>