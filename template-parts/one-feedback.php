<div class="swiper-slide onefeedback">
  <div>
    <div class="onefeedback__rate rate-js" data-num="<?php the_field("feedback_astimation", $post->ID) ?>"></div>
    <div class="onefeedback__box">
      <div class="onefeedback__box-description"><?php 
      $text = get_field('feedback_text', $post->ID);
      $characterAmount = 380;

      $add_photos = get_field('feedback_add_photos', $post->ID);
      if($add_photos){
      foreach ($add_photos as $key => $image) {
          if ($image) {
            $characterAmount= 230;
          }
        }
       } 


      echo wp_html_excerpt( $text, $characterAmount, '...' ); 
      ?></div>

      <?php

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
        <li class="onefeedback__box-image <?php echo 'more';?>">
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

    <div class="watchmore_button">
      <?php
      $btn_name = get_field('watch_all', 'options');
      get_template_part( "template-parts/read-more-btn", null, ['btn_name' => $btn_name ]); ?>
    </div>

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