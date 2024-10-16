<?php /* Template Name: reviews */ get_header();
$hero_reviews_image = get_field('reviews_main_photo');
$feedbacks_full_name = get_field('feedbacks_full_name');

$current_page = !empty($_GET['paged']) ? $_GET['paged'] : 1;

$btn_name = get_field('read_all', 'options');
?>

<main>
    <div class="reviews-decor">
        <img class="reviews-section__decor-1"
            src="<?php echo get_template_directory_uri() . '/assets/images/decor-branch-left.png'; ?>">
        <?php
    get_template_part("template-parts/secondary-hero-section", null, ['img_array' => $hero_reviews_image, "title_section" => get_the_title()]); ?>
    </div>
    <section class="reviews-section">
        <img class="reviews-section__decor-2"
            src="<?php echo get_template_directory_uri() . '/assets/images/decor-branch.png'; ?>">

        <div class="reviews-section__title">
            <?php
      get_template_part("template-parts/section-title", null, array('title' =>  get_the_title())); ?>

        </div>

        <?php
    $args = array(
      'post_type' => 'feedbacks',
      'numberposts' => -1,
      'posts_per_page' => 8,
      'orderby' => 'modified',
      'post_status' => 'publish',
      'paged' => $current_page
    );

    $query = new WP_Query($args);
    $index = 0;
    $total_posts = $query->post_count;
    if ($query->have_posts()) : ?>
        <ul class="reviews-section__list">

            <?php while ($query->have_posts()) : $query->the_post();
          if (is_object($post) && property_exists($post, 'ID')) {
            $post_id = $post->ID;
          } else {
            echo 'Error: $post is not an object or ID property does not exist.';
          }

        ?>
            <li class="reviews-section__item">

                <?php if ($index === 0  && $total_posts > 3): ?>
                <img class="reviews-section__decor-3"
                    src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>">
                <?php endif ?>

                <?php if ($index === 2): ?>
                <img class="reviews-section__decor-desc-4"
                    src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees1.png'; ?>">

                <?php endif ?>
                <?php if ($index === 4): ?>
                <img class="reviews-section__decor-5"
                    src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>">
                <?php endif ?>
                <?php if ($index === 6): ?>
                <img class="reviews-section__decor-6"
                    src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>">
                <?php endif ?>
                <?php if ($index === 7): ?>
                <img class="reviews-section__decor-desc-7"
                    src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees1.png'; ?>">

                <?php endif ?>
                <div class="reviews-section__item-top-box">
                    <div class="reviews-section__item-top-wrapper">

                        <div class="onefeedback__user-image_wrap">
                            <?php

                  $image = get_field('feedback_person_photo', $post_id);
                  $size = 'thumbnail';
                  if ($image) { ?>
                            <?php
                    echo wp_get_attachment_image($image, $size); ?>
                            <?php } else { ?>
                            <img src="<?php the_field('user_placeholder', "options") ?>"
                                alt="плейсхолдер фотографії користувача">
                            <?php } ?>
                        </div>
                        <div class="reviews-section__name-box">
                            <?php
                  $name = get_field('feedback_name', $post_id);
                  ?>
                            <?php if ($name) : ?>
                            <p><?php echo  $name ? $name : '' ?></p>
                            <?php endif ?>


                            <div class='reviews-section__user-info_date'><?php the_time('d.m.Y'); ?></div>
                        </div>
                    </div>
                    <div class="reviews-section__date-box">
                        <?php if (get_field('house_number', $post_id)) : ?>
                        <p> <span class="date-box-icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                    height="20" viewBox="0 0 20 20" fill="none">

                                    <g clip-path="url(#clip0_3559_656)">
                                        <path
                                            d="M3.33203 5C3.33203 4.30962 3.89168 3.75 4.58203 3.75H15.4154C16.1057 3.75 16.6654 4.30962 16.6654 5V9.58333H3.33203V5Z"
                                            stroke="#689762" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M2.5 14.5835V16.2502" stroke="#689762" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M17.5 14.5835V16.2502" stroke="#689762" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M8.33203 7.5H5.83203C5.14166 7.5 4.58203 8.05962 4.58203 8.75V9.58333H9.58203V8.75C9.58203 8.05962 9.02241 7.5 8.33203 7.5Z"
                                            stroke="#689762" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M14.168 7.5H11.668C10.9776 7.5 10.418 8.05962 10.418 8.75V9.58333H15.418V8.75C15.418 8.05962 14.8583 7.5 14.168 7.5Z"
                                            stroke="#689762" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M1.66797 10.8335C1.66797 10.1431 2.22761 9.5835 2.91797 9.5835H17.0846C17.775 9.5835 18.3346 10.1431 18.3346 10.8335V14.5835H1.66797V10.8335Z"
                                            stroke="#689762" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_3559_656">
                                            <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg></span><span><?php echo get_field('house_number', $post_id)  ? get_field('house_number', $post_id) : ' no number' ?></span>
                        </p>


                        <?php endif ?>

                    </div>
                </div>
                <div>
                    <div class="onefeedback__rate rate-js"
                        data-num="<?php the_field("feedback_astimation", $post_id) ?>"></div>

                    <div class="reviews-section__content-wrapper">

                        <div>
                            <?php
                  $feedback_text = get_field('feedback_text', $post_id);
                  $feedback_text_string = (string) $feedback_text;

                  $feedback_text_without_spaces = preg_replace('/\s+/', ' ', $feedback_text_string);
                  $feedback_text_without_spaces = str_replace(['\t', '\n', '\r'], '', $feedback_text_without_spaces);
                  $feedback_text_length = mb_strlen($feedback_text_without_spaces)

                  ?>

                            <p id="desc-<?php echo $post_id ?>"
                                class="reviews-section__description reviews-text-hidden">
                                <?php echo $feedback_text_without_spaces ?>
                            </p>

                        </div>

                        <?php
                get_template_part("template-parts/images_review_feedback_swiper", null, ['post_id' => $post_id]); ?>


                    </div>
                    <div id="btn-wrapper-<?php echo $post_id ?>" class="reviews-section__button-wrapper">
                        <button id="btn-<?php echo $post_id ?>" type="button" class="reviews-btn-watch-more"
                            data-target="<?php echo $post_id ?>">
                            <span><?php echo $btn_name ? $btn_name : "Читати все" ?></span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13"
                                fill="none">
                                <path
                                    d="M12 5.48431C9.83647 5.99923 5.5094 8.02326 5.5094 12M5.5094 12C3.25648 5.80609 0.385307 5.15897 -4.26734e-07 5.15897M5.5094 12L5.5094 -2.83713e-07"
                                    stroke="#E67739" stroke-width="1.8" />
                            </svg>
                        </button>
                    </div>
                </div>
            </li>

            <?php
          $index++;
        endwhile;
        ?>
        </ul>



        <?php
      $left = '<svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
<path d="M7.51569 12C7.00077 9.83647 4.97674 5.5094 1 5.5094M1 5.5094C7.1939 3.25649 7.84103 0.385307 7.84103 2.49783e-07M1 5.5094L13 5.5094" stroke="" stroke-width="1.8" />
</svg>';
      $right = '<svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
<path d="M5.48431 12C6.99923 9.83647 9.02326 5.5094 13 5.5094M13 5.5094C6.8061 3.25649 6.15897 0.385307 6.15897 2.49783e-07M13 5.5094L1 5.5094" stroke="" stroke-width="1.8" />
</svg>';

      $pagination =  paginate_links(array(
        'base' => get_pagenum_link() . '%_%',
        'format' => '?paged=%#%',
        'total' => $query->max_num_pages,
        'current' => max(1, get_query_var('paged')),
        'prev_text' => $left,
        'next_text' => $right,
      ));



      ?>

        <?php
      if (!empty($pagination)) :
      ?>

        <div class="pagination">
            <?php echo  $pagination ?>
        </div>
        <?php endif ?>


        <?php
      wp_reset_postdata();
      ?>
        <?php endif ?>

        <div class="container">
            <button id="add_comment-js" class="_button primary_button"
                type="button"><?php the_field('add_feedback_btn', 'options') ?></button>
        </div>
        <img class="reviews-section__decor-bottom"
            src="<?php echo get_template_directory_uri() . '/assets/images/decor-branch.png'; ?>">
    </section>
    <div class="reviews-reserve-decor">

        <?php get_template_part("template-parts/section-reserve") ?>
    </div>
    <?php get_template_part("template-parts/feedback-form"); ?>
    <?php get_template_part("template-parts/location-section") ?>
</main>

<?php get_footer() ?>