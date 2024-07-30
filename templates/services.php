<?php
/*
Template Name: services
 */

$hero_reviews_image = get_field('hero_services_img');
get_header();
?>
<main>
  <?php
  get_template_part("template-parts/secondary-hero-section", null, ['img_array' => $hero_reviews_image, "title_section" => get_the_title()]);
  get_template_part("templates/services/section-desc-services");
  get_template_part("templates/services/section-services");
  get_template_part("templates/services/free-services-section");


  // get_template_part("templates/home/gallery-section");
  // get_template_part("template-parts/apartments");
  // get_template_part("templates/home/food-section");
  // get_template_part("templates/home/services-section");
  // get_template_part("templates/home/proposition-section");
  // get_template_part("templates/home/photo-collage-section");
  // get_template_part("template-parts/feedbacks-section");
  // get_template_part("templates/home/blog-section");
  // get_template_part("template-parts/location-section");
  ?>
</main>

<?php get_footer(); ?>