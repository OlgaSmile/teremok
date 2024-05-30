<?php acf_form_head()?>
<?php
/**
 * The template for displaying all pages
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
  <!-- <section class="section">
    <div class="container">
      
      <button class="_button primary_button">Додати відгук</button>
      <button class="_button secondary_button">Забронювати проживання</button>
    </div>
  </section> -->

  <?php
		the_content();
		?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();