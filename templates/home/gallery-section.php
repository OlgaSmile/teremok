<?php


$gallery = get_field('gallery');


$video_url = get_field('video');

?>
<section class="section-gallery">

  <div class="masonry">
    <?php if (!empty($gallery)) : ?>
      <?php foreach ($gallery as $index => $image) : ?>
        <div class="masonry-item 
        <?php
        if ($index == 0 || $index == 2) echo 'masonry-item-size2';
        if ($index == 3) echo 'masonry-item-height2';
        if ($index == 4 || $index == 6) echo 'masonry-item-height';
        if ($index == 5) echo 'masonry-item-height2';
        ?>">

          <?php if (!empty($video_url) && $index == 3) : ?>
            <video class="custom-video-player" controls autoplay muted loop>
              <source src="<?php echo $video_url ?>" type="video/mp4">
              Your browser does not support the video tag.
            </video>
          <?php else : ?>
            <img class="masonry-item__img" src="<?php echo esc_attr($image['url']); ?>" alt="<?php echo esc_attr($image['alt'] ? $image['alt'] : 'Галерея'); ?>" />
          <?php endif; ?>

        </div>

      <?php endforeach; ?>
    <?php endif; ?>
  </div>


  <?php if (!empty($gallery)) : ?>
    <div class="masonry-mobile">
      <?php foreach ($gallery as $index => $image) : ?>
        <div class="masonry-mobile-item 
        <?php if ($index == 2) : ?>masonry-mobile-item masonry-mobile-item---height masonry-mobile-item-width2<?php endif ?> 
        <?php if ($index == 3) : ?>masonry-mobile-item---long sizer<?php endif ?>  
        <?php if ($index == 4) : ?>masonry-mobile-item-width2 masonry-mobile-item-height2<?php endif ?>">

          <?php if (!empty($video_url) && $index == 2) : ?>

            <div class="player-wrapper">
              <video id="mobile-video-player" class="custom-video-player" controls muted>
                <source src="<?php echo $video_url ?>" type="video/mp4">
                Your browser does not support the video tag.
              </video>

              <button id="btn-play" class="player-wrapper__btn player-play-active">
                <svg>
                  <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-play"></use>
                </svg>
              </button>

              <button id="btn-pause" class="player-wrapper__btn">

              </button>
            </div>


          <?php else : ?>
            <img src="<?php echo esc_attr($image['url']); ?>" alt="<?php echo esc_attr($image['alt'] ? $image['alt'] : 'Галерея');  ?>" />
          <?php endif; ?>

        </div>
      <?php endforeach; ?>

    </div>
  <?php endif; ?>
</section>