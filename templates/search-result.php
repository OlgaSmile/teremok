<?php
/*
Template Name: search-result
 */

get_header();

$heroImg = get_field('search-result-img')

?>

<main>

  <?php if (!empty($heroImg)) {

    get_template_part("template-parts/section-reserve", null, ['image' => $heroImg]);
  } ?>

  <section class="section-search-result">
    <?php
    get_template_part("template-parts/section-title-secondary", null, array('title' => get_field('search_result_title', 'options'))) ?>

    <div class="container">
      <?php echo do_shortcode('[mphb_search_results class="search-result"]'); ?>
    </div>

    </div>


  </section>

  <?php
  get_template_part("template-parts/feedbacks-section");
  get_template_part("template-parts/location-section");
  ?>
</main>


<?php get_footer(); ?>