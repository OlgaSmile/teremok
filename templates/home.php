<?php
/*
Template Name: home
 */
get_header();
?>

<?php get_template_part( "template-parts/hero"); ?>

<?php get_template_part("template-parts/feedbacks-section");?>
<?php get_template_part("template-parts/feedback-form");?>
<?php
get_template_part("template-parts/main-page/services-section");
get_template_part("template-parts/main-page/proposition-section");
get_template_part("template-parts/main-page/blog-section");
get_template_part("template-parts/location-section");
?>

<?php get_footer();?>