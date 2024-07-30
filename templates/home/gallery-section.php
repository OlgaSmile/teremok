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
                <svg fill="#000000" height="200px" width="200px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60 60" xml:space="preserve">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <g>
                      <path d="M45.563,29.174l-22-15c-0.307-0.208-0.703-0.231-1.031-0.058C22.205,14.289,22,14.629,22,15v30 c0,0.371,0.205,0.711,0.533,0.884C22.679,45.962,22.84,46,23,46c0.197,0,0.394-0.059,0.563-0.174l22-15 C45.836,30.64,46,30.331,46,30S45.836,29.36,45.563,29.174z M24,43.107V16.893L43.225,30L24,43.107z"></path>
                      <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30 S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"></path>
                    </g>
                  </g>
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