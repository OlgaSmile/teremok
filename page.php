<?php acf_form_head()?>
<?php
/**
 * The template for displaying all pages
 *
 *
 * Template Name: main
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp-teremok
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="section">
        <div class="container">
            <div style="width: 200px;
  height: 100px;
  background-color: #99b7a2;
  display: flex;
  justify-content: center;
  align-items: center;">
                <?php get_template_part("template-parts/logo");?></div>

            <button class="_button primary_button">Додати відгук</button>
            <button class="_button secondary_button">Забронювати проживання</button>

            <?php get_template_part("template-parts/read-more-btn");?>
        </div>
        </div>
    </section>

    <?php
the_content();
?>

</main><!-- #main -->

<?php
get_sidebar();

get_template_part("template-parts/main-page/services-section");
get_template_part("template-parts/main-page/proposition-section");
get_template_part("template-parts/main-page/blog-section");

get_template_part("template-parts/location-section");

get_footer();