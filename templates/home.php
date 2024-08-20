<?php
/*
Template Name: home
 */

$gallery = get_field('gallery');

$video_url = get_field('video');
get_header();
?>

<?php
get_template_part("template-parts/hero");
the_content();

get_template_part("templates/home/teremok-section");
get_template_part("template-parts/gallery-section", null, ['photos' => $gallery, "video" => $video_url]);
get_template_part("template-parts/apartments");
get_template_part("templates/home/food-section");
get_template_part("templates/home/services-section");
get_template_part("templates/home/proposition-section");
get_template_part("templates/home/photo-collage-section");
get_template_part("template-parts/feedbacks-section");
get_template_part("templates/home/blog-section");
get_template_part("template-parts/location-section");
?>


<?php get_footer();?>