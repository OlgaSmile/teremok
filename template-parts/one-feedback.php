<div class="swiper-slide onefeedback">
  <div>
    <div class="onefeedback__rate rate-js" data-num="<?php the_field("feedback_astimation", $post->ID) ?>"></div>
    <div class="onefeedback__box">
      <div class="onefeedback__box-description"><?php the_field('feedback_text', $post->ID) ?></div>

      <?php
      $add_photos = get_field('feedback_add_photos', $post->ID);

      if($add_photos){?>

      <ul class="onefeedback__box-photos">
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
        <li class="onefeedback__box-image">
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

  <div>
    <?php get_template_part( "template-parts/read-more-btn"); ?>

    <div class="onefeedback__user">

      <div class="onefeedback__user-image_wrap">
        <?php 
            $image = get_field('feedback_person_photo', $post->ID);
            $size = 'thumbnail';
            if( $image ) { ?>
        <?php 
                echo wp_get_attachment_image( $image, $size ); ?>
        <?php } 
      else { ?>
        <img src="<?php the_field('user_placeholder', "options") ?>" alt="плейсхолдер фотографії користувача">
        <?php } ?>
      </div>


      <div class="onefeedback__user-info">

        <?php 
      $nameGroup = get_field('feedbacks_full_name',$post->ID);
      if($nameGroup) {
        echo "<p class='onefeedback__user-info_name'>" . $nameGroup['name'] . "</p>";
      }?>

        <?php the_time('d.m.Y'); ?>
      </div>
    </div>
  </div>
</div>