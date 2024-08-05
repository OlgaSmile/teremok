<?php
global $wp;
$food_title = get_field('food_title', 'options');
$learn_more = get_field('learn_more', 'options');
$link = add_query_arg($wp->query_vars, home_url()) . '/food';

?>

<section class="food-section">
    <?php if (get_field('food_top_images', 'options')): ?>
    <?php while (has_sub_field('food_top_images', 'options')): ?>
    <div class="food-section-bg_desktop food-section-bg_desktop-top">
        <img class="food-section-bg_desktop-image" src="<?php the_sub_field('food_top_img_desktop', 'options');?>" />
    </div>
    <?php endwhile;?>
    <?php endif;?>

    <div class="food-section__container">
        <div class="food-section__title">
            <?php get_template_part("template-parts/section-title", null, array('title' => $food_title));?>
        </div>
        <div class="food-section__title-tablet">
            <?php get_template_part("template-parts/section-title_small", null, array('title' => $food_title));?>
        </div>
        <div class="food-section__images-mobile food-section__images-mobile-top">
            <?php if (get_field('food_top_images', 'options')): ?>
            <?php while (has_sub_field('food_top_images', 'options') and get_row_index() <= 3): ?>
            <img class="food-section__images-mobile_item" src="<?php the_sub_field('food_top_image', 'options');?>" />
            <?php endwhile;?>
            <?php endif;?>
        </div>

        <div class="food-section__content">
            <?php if (get_field('food_rules')): ?>
            <?php while (has_sub_field('food_rules')): ?>
            <div class="food-section__content-item">
                <img class="food-section__content-item_icon" src="<?php the_sub_field('food_rules_img');?>" />
                <p class="food-section__content-item_text"><?php the_sub_field('food_rules_text');?></p>
            </div>
            <?php endwhile;?>
            <?php endif;?>

        </div>
        <?php get_template_part("template-parts/learn-more-btn", null, array('btn_name' => $learn_more, 'link_name' => $link));?>

        <div class="food-section__images-mobile food-section__images-mobile-bottom">
            <?php if (get_field('food_bottom_images', 'options')): ?>
            <?php while (has_sub_field('food_bottom_images', 'options') and get_row_index() <= 3): ?>
            <img class="food-section__images-mobile_item" src="<?php the_sub_field('food_bottom_img', 'options');?>" />
            <?php endwhile;?>
            <?php endif;?>
        </div>
    </div>
    <?php if (get_field('food_bottom_images', 'options')): ?>
    <?php while (has_sub_field('food_bottom_images', 'options')): ?>
    <div class="food-section-bg_desktop food-section-bg_desktop-bottom">
        <img class="food-section-bg_desktop-image" src="<?php the_sub_field('food_bottom_img_desktop', 'options');?>" />
    </div>
    <?php endwhile;?>
    <?php endif;?>
</section>