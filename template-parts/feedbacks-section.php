<section class="section feedbacks__section">
  <div class="container">

    <div class="feedbacks__section-title">
      <?php
    $feedback_title = get_field('feedback_title', 'options');
    
    get_template_part( "template-parts/section-title", null, array('title' => $feedback_title )); ?>
    </div>

    <div class="swiper feedback__section-swiper">
      <div class="swiper-wrapper feedback__section-wrapper">
        <?php
        $args = array(
          'post_type' => 'feedbacks',
          'numberposts'    => 18,
          'orderby' => 'modified',
          'post_status' => 'publish'
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post(); ?>

        <?php get_template_part('template-parts/one-feedback'); ?>
        <?php endwhile;
        endif;

        wp_reset_postdata(); ?>

      </div>
      <div class="swiper-pagination feedbacks__swiper-pagination"></div>
    </div>
  </div>
</section>