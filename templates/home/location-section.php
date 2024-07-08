<section class="location-section">

  <!-- <svg>
        <use href="<?php echo get_template_directory_uri() ?>/assets/images/bg.svg#fff64"></use>
    </svg> -->
  <?php
$location_title = get_field('location_title', 'options');
get_template_part("template-parts/section-title", null, array('title' => $location_title));?>
  <h2 class="location-section__subtitle"><?php the_field('location_subtitle');?></h2>
  <p class="location-section__address"><?php the_field('location_address');?></p>
  <div class="location-section__map">
    <?php
$location_image = get_field('location_image');
if ($location_image) {
    echo wp_get_attachment_image($location_image, 'large');
}
;?>
  </div>
</section>