<?php
/*
Template Name: home
 */
get_header();
?>

<?php get_template_part( "template-parts/hero");
get_template_part("template-parts/services-section");
get_template_part("template-parts/proposition-section");
get_template_part("template-parts/feedbacks-section");
get_template_part("template-parts/blog-section");
get_template_part("template-parts/location-section");
?>


<?php get_footer();?>