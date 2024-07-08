  <?php

$args = array(
    'post_type' => 'blogs',
    'orderby' => 'id',
    'order' => 'ASC',
    'post_per_page' => -1,
);

$query = new WP_Query($args);

$blog_title = get_field('blog_title', 'options');
$learn_more = get_field('learn_more', 'options');
?>


  <section class="blog__section">

      <?php get_template_part("template-parts/section-title", null, array('title' => $blog_title));?>

      <!--Mobile version  START-->
      <div class="swiper blog__section-mobile-swiper">
          <div class="swiper-wrapper blog__section-mobile-wrapper">

              <?php
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        get_template_part("templates/home/blog-card", null, array('blog' => $query));

    }
}
;

wp_reset_postdata();
?>
          </div>
          <div class="swiper-pagination blog__swiper-pagination"></div>
      </div>
      <!--Mobile version  END-->

      <!-- Desktop version  START -->
      <div class="blog__section-content">
          <?php
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        get_template_part("templates/home/blog-card", null, array('blog' => $query));

    }
}
;
wp_reset_postdata();
?>
      </div>
      <!-- Desktop version  END -->
      <div class="blog__section-reed-more-btn">
          <?php get_template_part("template-parts/learn-more-btn", null, array('btn_name' => $learn_more));?>
      </div>
  </section>