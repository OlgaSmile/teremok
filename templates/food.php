<?php
/*
Template Name: food
 */
get_header();

$hero_food_image = get_field('hero_food_image');
$food_title = get_field('hero_food_title');
$menu_title = get_field('food_menu_title');
$menu_icon = get_field('food_menu_item_icon');
$certificates_title = get_field('food_menu_certificates_section_title');
?>

<main>
    <div class="food__hero-section">
        <?php get_template_part("template-parts/secondary-hero-section", null, ['img_array' => $hero_food_image, "title_section" => get_the_title()]);?>
        <img src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>"
            class="food__hero-section_decor-trees2 decor-trees2" />
        <img src="<?php echo get_template_directory_uri() . '/assets/images/decor-mount.png'; ?>"
            class="food__hero-section_decor-mount decor-mount" />
    </div>

    <section class="food__introduction-section">

        <div class="food__introduction-section_container container">
            <div class="section_title--icon_wrap food__introduction-section_threes">
                <div class="anim-items">
                    <svg class="section_title--icon small food__introduction-section_threes">
                        <use href="#tree">
                        </use>
                    </svg>
                </div>
                <div class="anim-items">
                    <svg class="section_title--icon big food__introduction-section_threes">
                        <use href="#big-tree">
                        </use>
                    </svg>
                </div>
                <div class="anim-items">
                    <svg class="section_title--icon small food__introduction-section_threes">
                        <use href="#tree">
                        </use>
                    </svg>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/decor-branch.png'; ?>"
                class="food__introduction-section_decor-branch decor-branch" />
            <h2 class="food__introduction-section_title"><?php echo get_field('food_introduction_title'); ?></h2>
            <div class="food__introduction-section_text"><?php echo get_field('food_introduction_text'); ?></div>
            <div class="food__introduction-section_photo-wrapper">
                <img class="food__introduction-section_photo-frame"
                    src="<?php echo get_template_directory_uri() . '/assets/images/frame.svg'; ?>" />
                <img class="food__introduction-section_photo"
                    src="<?php echo get_field('food_introduction_owner_photo'); ?>" />
            </div>
            <div class="food__introduction-section_owner-name"><?php echo get_field('food_introduction_owner_name'); ?>
            </div>
            <div class="food__introduction-section_owner-title">
                <?php echo get_field('food_introduction_owner_title'); ?></div>
            <div class="food__introduction-section_owner-text">
                <?php echo get_field('food_introduction_owner_text'); ?></div>
        </div>
        <img src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.svg'; ?>"
            class="food__introduction-section_decor-trees2 decor-trees2" />
    </section>

    <section class="food__menu-section">

        <div class="food__menu-section_img">
            <?php if (get_field('food_menu_photo_left')): ?>
            <?php while (has_sub_field('food_menu_photo_left')): ?>
            <img class="" src="<?php the_sub_field('food_menu_photo_left_item');?>" />
            <?php endwhile;?>
            <?php endif;?>
        </div>
        <div class="food__menu-section_content">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees1.png'; ?>"
                class="food__menu-section_decor-trees1 decor-trees1" />
            <img src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>"
                class="food__menu-section_decor-trees2 decor-trees2" />
            <img src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>"
                class="food__menu-section_decor-trees3 decor-trees2" />
            <?php get_template_part("template-parts/section-title", null, array('title' => $menu_title));?>

            <div class="food__menu-section_wrapper">
                <?php if (get_field('food_option_item')): ?>
                <?php while (has_sub_field('food_option_item')): ?>
                <div class="food__menu-section-item">
                    <div
                        class="food-section__images-mobile food-section__images-mobile-top food__menu-section-item-img_mobile-top">
                        <?php if (get_field('food_top_images', 'options')): ?>
                        <?php while (has_sub_field('food_top_images', 'options') and get_row_index() <= 3): ?>
                        <img class="food-section__images-mobile_item"
                            src="<?php the_sub_field('food_top_image', 'options');?>" />
                        <?php endwhile;?>
                        <?php endif;?>
                    </div>
                    <div
                        class="food-section__images-mobile food-section__images-mobile-bottom food__menu-section-item-img_mobile-bottom">
                        <?php if (get_field('food_bottom_images', 'options')): ?>
                        <?php while (has_sub_field('food_bottom_images', 'options') and get_row_index() <= 3): ?>
                        <img class="food-section__images-mobile_item"
                            src="<?php the_sub_field('food_bottom_img', 'options');?>" />
                        <?php endwhile;?>
                        <?php endif;?>
                    </div>

                    <img class="food__menu-section-item_icon" src="<?php echo $menu_icon; ?>" />

                    <h3 class="food__menu-section-item_title food__menu-section_container">
                        <?php the_sub_field('food_option_item_title');?>
                    </h3>
                    <p class="food__menu-section-item_subtitle food__menu-section_container">
                        <?php the_sub_field('food_option_item_subtitle');?>

                    <ul class="food__menu-section-item_text food__menu-section_container">
                        <?php if (get_sub_field('food_option_item_menu')): ?>
                        <?php while (has_sub_field('food_option_item_menu')): ?>
                        <li>
                            <div class="food__menu-section-item_text-item_name">
                                <?php the_sub_field('food_option_item_menu_name');?></div>
                            <?php if (get_sub_field('food_option_item_menu_desc')): ?>
                            <div class="food__menu-section-item_text-item_desc">
                                <?php the_sub_field('food_option_item_menu_desc');?>
                            </div>
                            <?php endif;?>
                        </li>
                        <?php endwhile;?>
                        <?php endif;?>

                    </ul>
                    </p>

                </div>
                <?php endwhile;?>
                <?php endif;?>
                <p class="food__menu-section-desc "> <?php the_field('food_menu_note');?>
                </p>
                <div
                    class="food-section__images-mobile food-section__images-mobile-bottom food__menu-section-item-img_mobile-end">
                    <?php if (get_field('food_bottom_images', 'options')): ?>
                    <?php while (has_sub_field('food_bottom_images', 'options') and get_row_index() <= 3): ?>
                    <img class="food-section__images-mobile_item"
                        src="<?php the_sub_field('food_bottom_img', 'options');?>" />
                    <?php endwhile;?>
                    <?php endif;?>
                </div>
            </div>
        </div>
        <div class="food__menu-section_img">
            <?php if (get_field('food_menu_photo_right')): ?>
            <?php while (has_sub_field('food_menu_photo_right')): ?>
            <img class="food-section__images-mobile_item" src="<?php the_sub_field('food_menu_photo_right_item');?>" />
            <?php endwhile;?>
            <?php endif;?>
        </div>
    </section>
    <section class="food__certificates-section">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/decor-branch.svg'; ?>"
            class="food__certificates-section_decor-branch1 decor-branch" />
        <div class="food__certificates-section_container container">
            <?php get_template_part("template-parts/section-title", null, array('title' => $certificates_title));?>
            <div class="food__certificates-section-subtitle">
                <?php the_field('food_menu_certificates_section_subtitle');?>
            </div>
            <div class="food__certificates-section-images">
                <?php if (get_field('food_menu_certificates_section_photos')): ?>
                <?php while (has_sub_field('food_menu_certificates_section_photos')): ?>
                <img class="" src="<?php the_sub_field('food_menu_certificates_section_photo');?>" />
                <?php endwhile;?>
                <?php endif;?>
            </div>
        </div>

    </section>
    <?php
get_template_part('template-parts/feedbacks-section');
get_template_part("template-parts/location-section");
?>
</main>

<?php get_footer()?>