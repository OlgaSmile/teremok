<div class="swiper-slide one__feedback">
  <div class="one__feedback-rate rate-js" data-num="<?php the_field("feedback_astimation", $post->ID) ?>"></div>
  <div class="one__feedback-box">
    <div class="one__feedback-description"><?php the_field('feedback_text', $post->ID) ?></div>

    <?php
      $add_photos = get_field('feedback_add_photos', $post->ID);

      if($add_photos){?>

    <ul class="one__feedback-photos">
      <?php 
      $max_photos = 5;
      $counter = 0;
      
      foreach ($add_photos as $key => $image) {
        if ($counter >= $max_photos) {
          break;
        }

        if ($image) {
          $alt = $image['alt'];
          $thumbnail = $image['sizes']['thumbnail'];
          //$medium_large = $image['sizes']['medium_large'];
          $counter++;
      ?>
      <li class="one__feedback-box_image">
        <img class="one__feedback-image" src="<?= $thumbnail ?>" alt="<?= $alt ?>">
      </li>
      <?php 
    }
  }
  ?>
    </ul>
    <?php } ?>

  </div>
  <?php get_template_part( "template-parts/read-more-btn"); ?>
</div>