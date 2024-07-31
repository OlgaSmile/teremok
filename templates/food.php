<?php
/*
Template Name: food
 */
get_header();

?>

<?php
global $wp;
$food_title = get_field('food_title', 'options');
$learn_more = get_field('learn_more', 'options');
$link = add_query_arg($wp->query_vars, home_url()) . '/food';

?>

<section class="food-section">


    <div class="food-section__container">
        <div class="food-section__title">
            <?php get_template_part("template-parts/section-title", null, array('title' => $food_title));?>
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

    </div>

</section>

<?php get_footer()?>