<section class="blog-section container">
  <?php

$args = array(
    'post_type' => 'blogs',
    'orderby' => 'id',
    'order' => 'ASC',
    'post_per_page' => -1,
);

$query = new WP_Query($args);

get_template_part("template-parts/section-title", null, array('title' => "блог"));?>
  <div class="blog-section__content">

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
  <?php get_template_part("template-parts/buttons", null, array('text' => 'Дізнатися більше', 'variant' => 'find_more_btn'));?>

</section>