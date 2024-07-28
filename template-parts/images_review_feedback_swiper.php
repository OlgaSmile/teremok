<?php


if (isset($args['post_id'])) {
  $post_id = $args['post_id'];
}

$add_photos = get_field('feedback_add_photos', $post_id);

?>
<div>

  <?php
  if ($add_photos) : ?>
    <div class="images-box-item">
      <?php
      $max_photos = 5;
      $counter = 0;
      $tota_number = 0;
      if (is_array($add_photos) && !empty($add_photos))
        $filtered_photos = array_filter($add_photos, function ($value) {
          return !empty($value) || $value === '0' || $value === 0;
        });

      $total_photos = count($filtered_photos);


      foreach ($add_photos as $key => $image) {
        preg_match('/\d+/', $key, $matches);

        $number = isset($matches[0]) ? (int)$matches[0] : 0;

        if ($counter >= $max_photos) {
          break;
        }

        if ($image) {
          $alt = $image['alt'];
          $thumbnail = $image['sizes']['thumbnail'];
          $counter++;
          $is_fifth_image = ($counter === 5);
      ?>


          <div class="images-box-item__img-box <?php echo $is_fifth_image && $total_photos > 5 ? "blur-slide" : "" ?>">
            <?php if ($total_photos > 5) : ?>
              <span>+<?php echo $total_photos - 4 ?></span>
            <?php endif ?>
            <img id="<?php echo $post_id ?>" onclick="" class="img-thumbnail" image-id="<?php echo    $counter ?>" src="<?php echo esc_url($thumbnail) ?>" alt="<?php echo esc_attr($alt) ?>">
          </div>
      <?php }
      } ?>


    </div>


  <?php endif ?>

  <?php
  if ($add_photos) : ?>
    <div id="modal-<?php echo $post_id ?>" class="modal-swiper-backdrop">
      <div class="modal-swiper">
        <button type="button" class="close-modal" data-target="<?php echo $post->ID ?>">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 35 34" fill="">
            <path d="M1 33L33 1M33.5269 33L1.52691 1" stroke="" stroke-width="1.5" stroke-linecap="round" />
          </svg>
        </button>
        <div id="swiper-top-<?php echo $post_id ?>" style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper">
          <div class="swiper-wrapper">
            <?php foreach ($add_photos as $key => $image) {
              preg_match('/\d+/', $key, $matches);
              $number = isset($matches[0]) ? (int)$matches[0] : 0;
              if ($image) {
                $alt = $image['alt'];
                $thumbnail = $image['sizes']['thumbnail'];
                $full_image = $image['sizes']['large'];

            ?>
                <div class="swiper-slide">
                  <img src="<?php echo esc_url($full_image); ?>" alt="<?php echo esc_attr($alt) ?>" />
                </div>
            <?php }
            } ?>
          </div>

          <div class="swiper-button-next">
            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="20" viewBox="0 0 29 20" fill="none">
              <path d="M11.0569 1C10.2226 4.51933 6.94325 11.558 0.500084 11.558M0.500084 11.558C10.5355 15.2227 11.0569 19.2204 11.0569 19.8472M0.500084 11.558H29" stroke="#3C4839" stroke-width="1.19212" />
            </svg>
          </div>
          <div class="swiper-button-prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="20" viewBox="0 0 29 20" fill="none">
              <path d="M11.0569 1C10.2226 4.51933 6.94325 11.558 0.500084 11.558M0.500084 11.558C10.5355 15.2227 11.0569 19.2204 11.0569 19.8472M0.500084 11.558H29" stroke="#3C4839" stroke-width="1.19212" />
            </svg>
          </div>
        </div>
        <div id="swiper-bottom-<?php echo $post_id ?>" thumbsSlider="" class="swiper">
          <div class="swiper-wrapper">
            <?php foreach ($add_photos as $key => $image) {
              preg_match('/\d+/', $key, $matches);

              $number = isset($matches[0]) ? (int)$matches[0] : 0;
              if ($image) {
                $alt = $image['alt'];
                $thumbnail = $image['sizes']['thumbnail'];


            ?>
                <div class="swiper-slide">
                  <img src="<?php echo esc_url($thumbnail); ?>" />
                </div>
            <?php }
            } ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif ?>
</div>