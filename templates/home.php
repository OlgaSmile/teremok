<?php
/*
Template Name: home
 */
get_header();
?>

<?php
get_template_part("template-parts/hero");
get_template_part("templates\home\gallery-section");
get_template_part("template-parts/apartments");
get_template_part("templates/home/services-section");
get_template_part("templates/home/proposition-section");
get_template_part("template-parts/feedbacks-section");
get_template_part("templates/home/blog-section");
get_template_part("template-parts/location-section");
?>


<?php get_footer(); ?>