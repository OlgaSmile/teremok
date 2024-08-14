<?php
/*
Template Name: services
 */

$hero_reviews_image = get_field('hero_services_img');

$gallery_service = get_field('gallery_service');

$gallery = $gallery_service['photos'];
$video_url = $gallery_service['video'];
get_header();
?>
<main>
  <div class="reviews-decor">
    <img class="reviews-section__decor-1" src="<?php echo get_template_directory_uri() . '/assets/images/decor-branch-left.png'; ?>">
    <?php
    if (!empty($hero_reviews_image)) {

      get_template_part("template-parts/secondary-hero-section", null, ['img_array' => $hero_reviews_image, "title_section" => get_the_title()]);
    } ?>
  </div>
  <?php




  get_template_part("templates/services/section-desc-services");
  get_template_part("templates/services/section-services");
  get_template_part("templates/services/free-services-page-section");
  // get_template_part("templates/services/gallery-services-page-section");

  if (!empty($gallery)) {
    get_template_part("template-parts/gallery-section", null, ['photos' => $gallery, "video" => $video_url]);
  }



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