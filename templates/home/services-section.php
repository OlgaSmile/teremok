<?php
$services_title = get_field('services_title', 'options');
$is_winter = get_field('winter_summer_toggle', 'options');
$learn_more = get_field('learn_more', 'options');

?>

<section class="services-section">
    <div class="services-section__image">
        <?php if (get_field('services-section-left-photos')): ?>
        <?php while (has_sub_field('services-section-left-photos')): ?>
        <?php if ($is_winter) {
    $img_url_left = get_sub_field('services-section-left-photo_winter');
} else {
    $img_url_left = get_sub_field('services-section-left-photo');
}
;?>
        <img class="services-section__image-item" src="<?php echo $img_url_left; ?>" />
        <?php endwhile;?>
        <?php endif;?>

    </div>

    <div class="services-section__container">
        <?php get_template_part("template-parts/section-title", null, array('title' => $services_title));?>

        <div class="services-section__content">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>"
                class="services-section__decor-trees2 decor-trees2" />

            <div class="services-section__image-mobile">
                <?php if (get_field('services-section-left-photos')): ?>
                <?php while (has_sub_field('services-section-left-photos') and get_row_index() <= 2): ?>
                <div class="services-section__image-mobile-item_wrapper">

                    <?php if ($is_winter) {
    $img_url_left_m = get_sub_field('services-section-left-photo_winter');
} else {
    $img_url_left_m = get_sub_field('services-section-left-photo');
}
;?>
                    <img class="services-section__image-mobile-item" src="<?php echo $img_url_left_m; ?>" />

                </div>
                <?php endwhile;?>
                <?php endif;?>

            </div>
            <h2 class="services-section__subtitle">Безкоштовні</h2>

            <ul class="services-section__free">
                <?php if (get_field('free_services_data', 'options')): ?>
                <?php while (has_sub_field('free_services_data', 'options')): ?>

                <li class="services-section__service-item services-section__service-item_free">
                    <?php $free_img = get_sub_field('free_services_icon');?>
                    <?php get_template_part('template-parts/facilities_icon', null, array('img' => $free_img));?>
                    <div class="services-section__service-name">
                        <?php the_sub_field('free_services_name');?>
                    </div>
                </li>
                <?php endwhile;?>
                <?php endif;?>
            </ul>
        </div>

        <div class="services-section__content">
            <div class="services-section__image-mobile services-section__image-mobile_bottom">
                <?php if (get_field('services-section-right-photos')): ?>
                <?php while (has_sub_field('services-section-right-photos')): ?>
                <?php if (get_row_index() <= 2): ?>
                <?php if ($is_winter) {
    $img_url_right_m = get_sub_field('services-section-right-photo_winter');
} else {
    $img_url_right_m = get_sub_field('services-section-right-photo');
}
;?>

                <div class="services-section__image-mobile-item_wrapper">
                    <img class="services-section__image-mobile-item" src="<?php echo $img_url_right_m; ?>" />
                </div>
                <?php endif;?>

                <?php endwhile;?>
                <?php endif;?>

            </div>
            <h2 class="services-section__subtitle">Додаткові</h2>
            <ul class="services-section__additional">
                <?php if (get_field('additional_service_data', 'options')): ?>
                <?php while (has_sub_field('additional_service_data', 'options')): ?>

                <li class="services-section__service-item services-section__service-item-additional">
                    <?php $add_img = get_sub_field('additional_service_icon', 'options');?>
                    <?php get_template_part('template-parts/facilities_icon', null, array('img' => $add_img));?>
                    <div class="services-section__service-name">
                        <?php the_sub_field('additional_service_name', 'options');?>
                    </div>
                </li>
                <?php endwhile;?>
                <?php endif;?>
            </ul>
        </div>

        <?php
global $wp;

$link = add_query_arg($wp->query_vars, home_url()) . '/services';

get_template_part("template-parts/learn-more-btn", null, array('btn_name' => $learn_more, 'link_name' => $link));?>

    </div>
    <div class="services-section__image">
        <?php if (get_field('services-section-right-photos')): ?>
        <?php while (has_sub_field('services-section-right-photos')): ?>
        <?php if ($is_winter) {
    $img_url_right = get_sub_field('services-section-right-photo_winter');
} else {
    $img_url_right = get_sub_field('services-section-right-photo');
}
;?>
        <img class="services-section__image-item" src="<?php echo $img_url_right; ?>" />
        <?php endwhile;?>
        <?php endif;?>
    </div>

</section>