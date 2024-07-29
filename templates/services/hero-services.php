<?php
$hero_reviews_image = get_field('hero_services_img');

?>
<section class="secondary-hero-section">
  <?php
  $image = get_field('image');
  if (!empty($hero_reviews_image)) : ?>
    <img class="secondary-hero-section__img" src="<?php echo esc_url($hero_reviews_image['url']); ?>" alt="<?php echo esc_attr($hero_reviews_image['alt']) ? esc_attr($hero_reviews_image['alt']) : 'hero image'; ?>" />
  <?php endif; ?>
  <h2 class="secondary-hero-section__title">
    <?php the_title() ?>
  </h2>
</section>


<?php get_footer() ?>