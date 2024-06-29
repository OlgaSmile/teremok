<section class="proposition-section">
  <?php 
  $proposition_image = get_field('proposition_image');
  if($proposition_image) {
    echo wp_get_attachment_image( $proposition_image, 'large' );
  };
  ?>
  <div class="proposition-section__container">
    <div class="proposition-section__content">
      <?php
      $proposition_title = get_field('proposition_title', 'options');
      get_template_part("template-parts/section-title", null, array('title' => $proposition_title));?>
      <div class="proposition-section__subtitle-wrapper">
        <svg class="proposition-section__subtitle-icon">
          <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#mountain"></use>
        </svg>
        <h2 class="proposition-section__subtitle">
          <?php the_field('proposition_subtitle') ?>
        </h2>
      </div>
      <div>
        <p class="proposition-section__text">
          <?php the_field('proposition_text_first'); ?>
        </p>
        <p class="proposition-section__text">
          <?php the_field('proposition_text_second'); ?>
        </p>
        <p class="proposition-section__text">
          <?php the_field('proposition_text_third'); ?>
        </p>
      </div>

      <?php
      $learn_more = get_field('learn_more', 'options');
      get_template_part("template-parts/learn-more-btn", null, array('btn_name' => $learn_more));?>
    </div>
  </div>
</section>