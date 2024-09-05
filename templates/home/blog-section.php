  <?php $args = array('post_type' => 'blogs',
    'orderby' => 'id',
    'order' => 'ASC',
    'post_per_page' => -1,
);

$query = new WP_Query($args);

$blog_title = get_field('blog_title', 'options');
$learn_more = get_field('learn_more', 'options');
$blogs_link = add_query_arg($wp->query_vars, home_url()) . '/blogs';

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
        $link = get_permalink($query->ID);
        ?>
              <div class="blog__section-card swiper-slide">
                  <?php get_template_part("templates/home/blog-card", null, array('blog' => $query, 'link_name' => $link));
        ?>
              </div>
              <?php

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
    $counter = 0;
    while ($query->have_posts() and $counter < 4) {
        $query->the_post();
        $link = get_permalink($query->ID);
        $counter++;
        ?>
          <div class="blog__section-card swiper-slide">

              <?php get_template_part("templates/home/blog-card", null, array('blog' => $query, 'link_name' => $link));?>
          </div>
          <?php
}
}
;
wp_reset_postdata();
?>
      </div>
      <!-- Desktop version  END -->
      <div class="blog__section-reed-more-btn">
          <?php get_template_part("template-parts/learn-more-btn", null, array('btn_name' => $learn_more, 'link_name' => $blogs_link));?>
      </div>
  </section>