<section class="location-section">
  <?php
    $location_title = get_field('location_title', 'options');
    get_template_part("template-parts/section-title", null, array('title' => $location_title)); ?>
  <p class="location-section__subtitle"><?php the_field('location_subtitle'); ?></p>
  <p class="location-section__address"><?php the_field('location_address'); ?></p>
  <?php
  $location_image = get_field('location_image');
  if($location_image) {
    echo wp_get_attachment_image( $location_image, 'large' );
  }; ?>
</section>