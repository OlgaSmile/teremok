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
            <video class="custom-video-player" controls>
              <source src="<?php echo $video_url ?>" type="video/mp4">
              Your browser does not support the video tag.
            </video>
          <?php else : ?>
            <img src="<?php echo esc_attr($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>

          <!-- <img src="<?php echo esc_attr($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /> -->
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
            <video class="custom-video-player" controls>
              <source src="<?php echo $video_url ?>" type="video/mp4">
              Your browser does not support the video tag.
            </video>

          <?php else : ?>
            <img src="<?php echo esc_attr($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>


          <!-- <img src="<?php echo esc_attr($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /> -->
        </div>
      <?php endforeach; ?>
    <?php endif; ?>

</section>


<!-- <div class="masonry">
  <?php if (!empty($img_gallery_1)) : ?>
      <div class="masonry-item masonry-item-size2"><img src="<?php echo esc_attr($img_gallery_1['url']) ?>" alt="<?php echo esc_attr($img_gallery_1['alt']); ?>" /></div>
    <?php endif; ?>
    <?php if (!empty($img_gallery_2)) : ?>
      <div class="masonry-item"><img src="<?php echo esc_attr($img_gallery_2['url']) ?>" alt="<?php echo esc_attr($img_gallery_2['alt']); ?>" /></div>
    <?php endif; ?>
    <?php if (!empty($img_gallery_3)) : ?>
      <div class="masonry-item masonry-item-size2"><img src="<?php echo esc_attr($img_gallery_3['url']) ?>" alt="<?php echo esc_attr($img_gallery_3['alt']); ?>" /></div>
    <?php endif; ?>
    <?php if (!empty($img_gallery_4)) : ?>
      <div class="masonry-item"><img src="<?php echo esc_attr($img_gallery_4['url']) ?>" alt="<?php echo esc_attr($img_gallery_4['alt']); ?>" /></div>
    <?php endif; ?>
    <?php if (!empty($img_gallery_5)) : ?>
      <div class="masonry-item masonry-item-height"><img src="<?php echo esc_attr($img_gallery_5['url']) ?>" alt="<?php echo esc_attr($img_gallery_5['alt']); ?>" /></div>
    <?php endif; ?>
    <?php if (!empty($img_gallery_6)) : ?>
      <div class="masonry-item "><img src="<?php echo esc_attr($img_gallery_6['url']) ?>" alt="<?php echo esc_attr($img_gallery_6['alt']); ?>" /></div>
    <?php endif; ?>
    <?php if (!empty($img_gallery_7)) : ?>
      <div class="masonry-item masonry-item-height "><img src="<?php echo esc_attr($img_gallery_7['url']) ?>" alt="<?php echo esc_attr($img_gallery_7['alt']); ?>" /></div>
    <?php endif; ?>


  </div> -->

<!-- <div class="masonry-mobile">
    <?php if (!empty($img_gallery_1)) : ?>
      <div class="masonry-mobile-item"><img src="<?php echo esc_attr($img_gallery_1['url']) ?>" alt="<?php echo esc_attr($img_gallery_1['alt']); ?>" /></div>
    <?php endif; ?>
    <?php if (!empty($img_gallery_2)) : ?>
      <div class="masonry-mobile-item"><img src="<?php echo esc_attr($img_gallery_2['url']) ?>" alt="<?php echo esc_attr($img_gallery_2['alt']); ?>" /></div>
    <?php endif; ?>
    <?php if (!empty($img_gallery_4)) : ?>
      <div class="masonry-mobile-item masonry-mobile-item---height masonry-mobile-item-width2"><img src="<?php echo esc_attr($img_gallery_4['url']) ?>" alt="<?php echo esc_attr($img_gallery_4['alt']); ?>" /></div>
    <?php endif; ?>
    <?php if (!empty($img_gallery_6)) : ?>
      <div class="masonry-mobile-item masonry-mobile-item---long sizer"><img src="<?php echo esc_attr($img_gallery_6['url']) ?>" alt="<?php echo esc_attr($img_gallery_6['alt']); ?>" /></div>
    <?php endif; ?>
    <?php if (!empty($img_gallery_7)) : ?>
      <div class="masonry-mobile-item masonry-mobile-item-width2 masonry-mobile-item-height2 "><img src="<?php echo esc_attr($img_gallery_7['url']) ?>" alt="<?php echo esc_attr($img_gallery_7['alt']); ?>" /></div>
    <?php endif; ?>
    <?php if (!empty($img_gallery_3)) : ?>
      <div class="masonry-mobile-item"><img src="<?php echo esc_attr($img_gallery_3['url']) ?>" alt="<?php echo esc_attr($img_gallery_3['alt']); ?>" /></div>
    <?php endif; ?>
    <?php if (!empty($img_gallery_5)) : ?>
      <div class="masonry-mobile-item"><img src="<?php echo esc_attr($img_gallery_5['url']) ?>" alt="<?php echo esc_attr($img_gallery_5['alt']); ?>" /></div>
    <?php endif; ?>
  </div> -->