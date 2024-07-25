<?php
/*
Template Name: reviews
 */
get_header();
$hero_reviews_image = get_field('reviews_main_photo');

$feedbacks_full_name = get_field('feedbacks_full_name');


?>


<main>
  <section class="hero-reviews-section">
    <?php
    $image = get_field('image');
    if (!empty($hero_reviews_image)) : ?>
      <img class="hero-reviews-section__img" src="<?php echo esc_url($hero_reviews_image['url']); ?>" alt="<?php echo esc_attr($hero_reviews_image['alt']) ? esc_attr($hero_reviews_image['alt']) : 'hero image'; ?>" />
    <?php endif; ?>
    <h2 class="hero-reviews-section__title">
      <?php the_title() ?>
    </h2>
  </section>
</main>

<?php get_footer() ?>