<section class="section feedbacks__section">
  <div class="container">
    <div class="feedbacks__section-title">
      <?php
      $feedback_title = get_field('feedback_title', 'options');
      get_template_part("template-parts/section-title", null, ['title' => $feedback_title]); ?>
    </div>
    <div class="swiper feedbacks__section-swiper">
      <div class="swiper-wrapper feedback__section-wrapper">
        <?php
        $args = array(
          'post_type' => 'feedbacks',
          'numberposts' => 12,
          'orderby' => 'modified',
          'post_status' => 'publish',
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

      <div class="feedbacks__swiper--navigation">
        <div class="feedbacks-custom-prev-icon feedbacks__swiper--navigation--prev">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="" xmlns="http://www.w3.org/2000/svg">
            <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#left_arrow"></use>
          </svg>
        </div>
        <div class="feedbacks-custom-next-icon feedbacks__swiper--navigation--next">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="" xmlns="http://www.w3.org/2000/svg">
            <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#left_arrow"></use>
          </svg>
        </div>
      </div>
    </div>
    <div class="feedbacks__section-btns">
      <a href="<?php echo home_url() . '/vidguky'; ?>">
        <?php
        $watch_all_feedbacks = get_field('watch_all_feedbacks', 'options');
        get_template_part("template-parts/learn-more-btn", null, ['btn_name' => $watch_all_feedbacks,]); ?>

      </a>
      <button id="add_comment-js" class="_button primary_button" type="button"><?php the_field('add_feedback_btn', 'options') ?></button>
    </div>
  </div>
  <?php get_template_part("template-parts/feedback-form"); ?>
</section>