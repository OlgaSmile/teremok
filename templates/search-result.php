<?php
/*
Template Name: search-result
 */

get_header();


?>

<main class="">

  <!--   <?php if (empty($hero_reviews_image)) {

            get_template_part("temp late-parts/section-reserve", null, ['image' => $services_section_reserve['services_section_reserve_img']]);
            get_template_part("template-parts/secondary-hero-section", null, ['img_array' => $hero_reviews_image, "title_section" => get_the_title()]);
          } ?>
 -->
  <section class="">

    <div class="site-content-wrapper">
      <?php echo do_shortcode('[mphb_search_results class="search-result"]'); ?>

    </div>

    </div>


  </section>
</main>


<?php get_footer(); ?>