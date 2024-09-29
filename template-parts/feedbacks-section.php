<section class="section feedbacks__section">
    <div class="container">
        <div class="feedbacks__section-title">

            <?php
$feedback_title = get_field('feedback_title', 'options');
get_template_part("template-parts/section-title", null, ['title' => $feedback_title]);?>
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

if ($query->have_posts()):
    while ($query->have_posts()): $query->the_post();?>


                <?php get_template_part('template-parts/one-feedback');?>


                <?php endwhile;
endif;

wp_reset_postdata();?>



            </div>
            <div class="feedbacks__section-custom-btn-next">
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="20" viewBox="0 0 29 20" fill="none">
                    <path
                        d="M11.0569 1C10.2226 4.51933 6.94325 11.558 0.500084 11.558M0.500084 11.558C10.5355 15.2227 11.0569 19.2204 11.0569 19.8472M0.500084 11.558H29"
                        stroke="" stroke-width="1.19212" />
                </svg>
            </div>
            <div class="feedbacks__section-custom-btn-prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="20" viewBox="0 0 29 20" fill="none">
                    <path
                        d="M11.0569 1C10.2226 4.51933 6.94325 11.558 0.500084 11.558M0.500084 11.558C10.5355 15.2227 11.0569 19.2204 11.0569 19.8472M0.500084 11.558H29"
                        stroke="" stroke-width="1.19212" />
                </svg>
            </div>
            <div class="swiper-pagination feedbacks__swiper-pagination"></div>
        </div>
        <div class="feedbacks__section-btns">

            <?php
$link_next_page = home_url() . '/vidguky';
$watch_all_feedbacks = get_field('watch_all_feedbacks', 'options');
get_template_part("template-parts/learn-more-btn", null, ['btn_name' => $watch_all_feedbacks, "link_name" => $link_next_page]);?>


            <button id="add_comment-js" class="_button primary_button"
                type="button"><?php the_field('add_feedback_btn', 'options')?></button>
        </div>
    </div>


    <?php get_template_part("template-parts/feedback-form");?>



</section>