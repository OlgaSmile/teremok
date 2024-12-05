<?php
$proposition_title = get_field('proposition_title', 'options');
$proposition_image = get_field('proposition_image');
$proposition_image_winter = get_field('proposition_image_winter');
$is_winter_season = get_field('winter_summer_toggle', 'options');
$proposition_bg = get_field('proposition_bg');
$learn_more = get_field('learn_more', 'options');
$link = add_query_arg($wp->query_vars, home_url()) . '/activity';
?>

<section class="proposition-section">
    <?php
if ($proposition_image and !$is_winter_season) {
    echo wp_get_attachment_image($proposition_image, 'large');
} elseif ($proposition_image_winter and $is_winter_season) {
    echo wp_get_attachment_image($proposition_image_winter, 'large');
}
;
?>
    <div class="proposition-section__container">
        <?php
if ($proposition_bg) {
    echo wp_get_attachment_image($proposition_bg, 'large');
}
;
?>
        <div class="proposition-section__content">
            <div class="proposition-section__title-desktop">
                <?php get_template_part("template-parts/section-title", null, array('title' => $proposition_title));?>
            </div>
            <div class="proposition-section__title-mobile">
                <?php get_template_part("template-parts/section-title_small", null, array('title' => $proposition_title));?>

            </div>

            <div class="proposition-section__text-wrapper">
                <?php if (get_field('proposition_text_wrapper')): ?>
                <?php while (has_sub_field('proposition_text_wrapper')): ?>
                <div class="proposition-section__text-wrapper_item">
                    <img src="<?php the_sub_field('proposition_text-icon');?>" class="proposition_text-icon" />
                    <?php the_sub_field('proposition_text');?>
                </div>
                <?php endwhile;?>
                <?php endif;?>
            </div>

            <?php
global $wp;

$link_page_special_ofers = 'services/#special-offers';
get_template_part("template-parts/learn-more-btn", null, array('btn_name' => $learn_more, 'link_name' => $link_page_special_ofers));?>
        </div>
    </div>
</section>