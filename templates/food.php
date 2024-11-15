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
$mobile_photo_1 = get_field('food_menu_mobile_photo1');
$mobile_photo_2 = get_field('food_menu_mobile_photo2');
$mobile_photo_3 = get_field('food_menu_mobile_photo3');
$mobile_photo_4 = get_field('food_menu_mobile_photo4');

$breakfast = get_field('food_page_breakfast');
$lunch = get_field('food_page_lunch');
$dinner = get_field('food_page_dinner');
$additional_fee = get_field('additional_fee_food');
$previous_order = get_field('food_page_previous_order');
$additionally = get_field('food_page_additionally');
$variant1 = get_field('menu_variant_1');
$variant2 = get_field('menu_variant_2');
?>

<main class="food_page">
    <div class="food__hero-section">
        <?php get_template_part("template-parts/secondary-hero-section", null, ['img_array' => $hero_food_image, "title_section" => get_the_title()]);?>
        <img src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>"
            class="food__hero-section_decor-trees2 decor-trees2" />
        <img src="<?php echo get_template_directory_uri() . '/assets/images/decor-mount.png'; ?>"
            class="food__hero-section_decor-mount decor-mount" />
    </div>

    <section class="food__introduction-section">
        <div class="food__introduction-section_container container">
            <?php get_template_part("template-parts/animated_title_trees");?>

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
        <img src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>"
            class="food__introduction-section_decor-trees2 decor-trees2" />
    </section>

    <section class="food__menu-section">
        <div class="food__menu-section_img">
            <?php if (get_field('food_menu_photo_left')): ?>
            <?php while (has_sub_field('food_menu_photo_left')): ?>
            <div class="food__menu-section_img-wrapper">
                <img class="" src="<?php the_sub_field('food_menu_photo_left_item');?>" />
            </div>
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
                <div class="food__menu_mobile-photo">
                    <?php if (!empty($mobile_photo_1['photo1']) and !empty($mobile_photo_1['photo2']) and !empty($mobile_photo_1['photo3'])): ?>
                    <img class="food-section__images-mobile_item" src="<?php echo $mobile_photo_1['photo1']; ?>" />
                    <img class="food-section__images-mobile_item" src="<?php echo $mobile_photo_1['photo2']; ?>" />
                    <img class="food-section__images-mobile_item" src="<?php echo $mobile_photo_1['photo3']; ?>" />
                    <?php endif;?>
                </div>

                <div class="food__menu-section-item container">
                    <div class="food__menu-section_variant-wrapper">
                        <div class="food__menu-section_variant">
                            <ul class="menu_variant-list">
                                <?php if (get_field('menu_variant_1')): ?>
                                <?php while (has_sub_field('menu_variant_1')): ?>
                                <li class="menu_variant-item">
                                    <div class="menu_variant_title">
                                        <?php the_sub_field('menu_variant_title');?>
                                    </div>
                                    <div class="menu_variant_desc">
                                        <?php the_sub_field('menu_variant_desc');?>
                                    </div>
                                </li>
                                <?php endwhile;?>
                                <?php endif;?>
                            </ul>
                        </div>

                        <div class="food__menu-section_variant-divider">або</div>

                        <div class="food__menu-section_variant">
                            <ul class="menu_variant-list">
                                <?php if (get_field('menu_variant_2')): ?>
                                <?php while (has_sub_field('menu_variant_2')): ?>
                                <li class="menu_variant-item">
                                    <div class="menu_variant_title">
                                        <?php the_sub_field('menu_variant_title');?>
                                    </div>
                                    <div class="menu_variant_desc">
                                        <?php the_sub_field('menu_variant_desc');?>
                                    </div>
                                </li>
                                <?php endwhile;?>
                                <?php endif;?>
                            </ul>
                        </div>
                    </div>
                    <p class="food__menu-section_variant-price">
                        <span class="food__menu-section_variant-price_title">Вартість:</span>
                        <?php the_field('food_menu_note');?>
                    </p>
                </div>

                <div class="food__menu_mobile-photo">
                    <?php if (!empty($mobile_photo_2['photo1']) and !empty($mobile_photo_2['photo2']) and !empty($mobile_photo_2['photo3'])): ?>
                    <img class="food-section__images-mobile_item" src="<?php echo $mobile_photo_2['photo1']; ?>" />
                    <img class="food-section__images-mobile_item" src="<?php echo $mobile_photo_2['photo2']; ?>" />
                    <img class="food-section__images-mobile_item" src="<?php echo $mobile_photo_2['photo3']; ?>" />
                    <?php endif;?>
                </div>

                <div class="food__menu-section-item">
                    <img class="food__menu-section-item_icon" src="<?php echo $menu_icon; ?>" />

                    <?php if (!empty($breakfast['breakfast_title'])): ?>
                    <h3 class="food__menu-section-item_title food__menu-section_container">
                        <?php echo $breakfast['breakfast_title']; ?>
                    </h3>
                    <?php endif;?>

                    <?php if (!empty($breakfast['breakfast_subtitle'])): ?>
                    <p class="food__menu-section-item_subtitle food__menu-section_container">
                        <?php echo $breakfast['breakfast_subtitle']; ?>
                    </p>
                    <?php endif;?>

                    <?php if (!empty($breakfast['breakfast_menu_item'])): ?>
                    <ul class="food__menu-section-item_text food__menu-section_container">

                        <?php foreach ($breakfast['breakfast_menu_item'] as $item): ?>
                        <li>
                            <div class="food__menu-section-item_text-item_name">
                                <?php echo $item['breakfast_menu_item_name']; ?>
                            </div>
                            <?php if ($item['breakfast_menu_item_desc']): ?>
                            <div class="food__menu-section-item_text-item_desc">
                                <?php echo $item['breakfast_menu_item_desc']; ?>
                            </div>
                            <?php endif;?>
                        </li>

                        <?php endforeach;?>
                    </ul>
                    <?php endif;?>
                    </p>
                </div>

                <div class="food__menu-section-item">
                    <img class="food__menu-section-item_icon" src="<?php echo $menu_icon; ?>" />

                    <?php if (!empty($lunch['lunch_title'])): ?>
                    <h3 class="food__menu-section-item_title food__menu-section_container">
                        <?php echo $lunch['lunch_title']; ?>
                    </h3>
                    <?php endif;?>

                    <?php if (!empty($lunch['lunch_subtitle'])): ?>
                    <p class="food__menu-section-item_subtitle food__menu-section_container">
                        <?php echo $lunch['lunch_subtitle']; ?>
                    </p>
                    <?php endif;?>

                    <?php if (!empty($lunch['lunch_menu_item'])): ?>
                    <ul class="food__menu-section-item_text food__menu-section_container">

                        <?php foreach ($lunch['lunch_menu_item'] as $item): ?>
                        <li>
                            <div class="food__menu-section-item_text-item_name">
                                <?php echo $item['lunch_menu_item_name']; ?>
                            </div>
                            <?php if ($item['lunch_menu_item_desc']): ?>
                            <div class="food__menu-section-item_text-item_desc">
                                <?php echo $item['lunch_menu_item_desc']; ?>
                            </div>
                            <?php endif;?>
                        </li>
                        <?php endforeach;?>

                    </ul>
                    <?php endif;?>
                </div>

                <div class="food__menu-section-item">
                    <img class="food__menu-section-item_icon" src="<?php echo $menu_icon; ?>" />

                    <?php if (!empty($dinner['dinner_title'])): ?>
                    <h3 class="food__menu-section-item_title food__menu-section_container">
                        <?php echo $dinner['dinner_title']; ?>
                    </h3>
                    <?php endif;?>

                    <?php if (!empty($dinner['dinner_subtitle'])): ?>
                    <p class="food__menu-section-item_subtitle food__menu-section_container">
                        <?php echo $dinner['dinner_subtitle']; ?>
                    </p>
                    <?php endif;?>

                    <?php if (!empty($dinner['dinner_menu_item'])): ?>
                    <ul class="food__menu-section-item_text food__menu-section_container">

                        <?php foreach ($dinner['dinner_menu_item'] as $item): ?>
                        <li>
                            <div class="food__menu-section-item_text-item_name">
                                <?php echo $item['dinner_menu_item_name']; ?>
                            </div>
                            <?php if ($item['dinner_menu_item_desc']): ?>
                            <div class="food__menu-section-item_text-item_desc">
                                <?php echo $item['dinner_menu_item_desc']; ?>
                            </div>
                            <?php endif;?>
                        </li>

                        <?php endforeach;?>
                    </ul>
                    <?php endif;?>
                </div>

                <div class="food__menu-section-item">
                    <img class="food__menu-section-item_icon" src="<?php echo $menu_icon; ?>" />

                    <?php if (!empty($additional_fee['additional_fee_title'])): ?>
                    <h3 class="food__menu-section-item_title food__menu-section_container">
                        <?php echo $additional_fee['additional_fee_title']; ?>
                    </h3>
                    <?php endif;?>

                    <?php if (!empty($additional_fee['additional_fee_subtitle'])): ?>
                    <p class="food__menu-section-item_subtitle food__menu-section_container">
                        <?php echo $additional_fee['additional_fee_subtitle']; ?>
                    </p>
                    <?php endif;?>

                    <?php if (!empty($additional_fee['additional_fee_menu_item'])): ?>
                    <ul class="food__menu-section-item_text food__menu-section_container">

                        <?php foreach ($additional_fee['additional_fee_menu_item'] as $item): ?>
                        <li>
                            <div class="food__menu-section-item_text-item_name">
                                <?php echo $item['additional_fee__menu_item_name']; ?>
                            </div>

                            <?php if ($item['additional_fee_menu_item_desc']): ?>
                            <div class="food__menu-section-item_text-item_desc">
                                <?php echo $item['additional_fee_menu_item_desc']; ?>
                            </div>
                            <?php endif;?>
                        </li>

                        <?php endforeach;?>
                    </ul>
                    <?php endif;?>
                </div>

                <div class="food__menu_mobile-photo">
                    <?php if (!empty($mobile_photo_3['photo1']) and !empty($mobile_photo_3['photo2']) and !empty($mobile_photo_3['photo3'])): ?>
                    <img class="food-section__images-mobile_item" src="<?php echo $mobile_photo_3['photo1']; ?>" />
                    <img class="food-section__images-mobile_item" src="<?php echo $mobile_photo_3['photo2']; ?>" />
                    <img class="food-section__images-mobile_item" src="<?php echo $mobile_photo_3['photo3']; ?>" />
                    <?php endif;?>
                </div>

                <div class="food__menu-section-item">
                    <img class="food__menu-section-item_icon" src="<?php echo $menu_icon; ?>" />

                    <?php if (!empty($previous_order['previous_order_title'])): ?>
                    <h3 class="food__menu-section-item_title food__menu-section_container">
                        <?php echo $previous_order['previous_order_title']; ?>
                    </h3>
                    <?php endif;?>

                    <?php if (!empty($previous_order['previous_order_subtitle'])): ?>
                    <p class="food__menu-section-item_subtitle food__menu-section_container">
                        <?php echo $previous_order['previous_order_subtitle']; ?>
                    </p>
                    <?php endif;?>

                    <?php if (!empty($previous_order['previous_order_menu_item'])): ?>
                    <ul class="food__menu-section-item_text food__menu-section_container">

                        <?php foreach ($previous_order['previous_order_menu_item'] as $item): ?>
                        <li>
                            <div class="food__menu-section-item_text-item_name">
                                <?php echo $item['previous_order_menu_item_name']; ?>
                            </div>
                            <?php if ($item['previous_order_menu_item_desc']): ?>
                            <div class="food__menu-section-item_text-item_desc">
                                <?php echo $item['previous_order_menu_item_desc']; ?>
                            </div>
                            <?php endif;?>
                        </li>

                        <?php endforeach;?>
                    </ul>
                    <?php endif;?>
                </div>

                <div class="food__menu-section-item">
                    <img class="food__menu-section-item_icon" src="<?php echo $menu_icon; ?>" />

                    <?php if (!empty($additionally['additionally_title'])): ?>
                    <h3 class="food__menu-section-item_title food__menu-section_container">
                        <?php echo $additionally['additionally_title']; ?>
                    </h3>
                    <?php endif;?>

                    <?php if (!empty($additionally['additionally_subtitle'])): ?>
                    <p class="food__menu-section-item_subtitle food__menu-section_container">
                        <?php echo $additionally['additionally_subtitle']; ?>
                    </p>
                    <?php endif;?>

                    <?php if (!empty($additionally['additionally_menu_item'])): ?>
                    <ul class="food__menu-section-item_text food__menu-section_container">

                        <?php foreach ($additionally['additionally_menu_item'] as $item): ?>
                        <li>
                            <div class="food__menu-section-item_text-item_name">
                                <?php echo $item['additionally_menu_item_name']; ?>
                            </div>
                            <?php if ($item['additionally_menu_item_desc']): ?>
                            <div class="food__menu-section-item_text-item_desc">
                                <?php echo $item['additionally_menu_item_desc']; ?>
                            </div>
                            <?php endif;?>
                        </li>

                        <?php endforeach;?>
                    </ul>
                    <?php endif;?>
                </div>

                <div class="food__menu_mobile-photo">
                    <?php if (!empty($mobile_photo_4['photo1']) and !empty($mobile_photo_4['photo2']) and !empty($mobile_photo_4['photo3'])): ?>
                    <img class="food-section__images-mobile_item" src="<?php echo $mobile_photo_4['photo1']; ?>" />
                    <img class="food-section__images-mobile_item" src="<?php echo $mobile_photo_4['photo2']; ?>" />
                    <img class="food-section__images-mobile_item" src="<?php echo $mobile_photo_4['photo3']; ?>" />
                    <?php endif;?>
                </div>
            </div>
        </div>

        <div class="food__menu-section_img">
            <?php if (get_field('food_menu_photo_right')): ?>
            <?php while (has_sub_field('food_menu_photo_right')): ?>
            <div class="food__menu-section_img-wrapper">
                <img class="" src="<?php the_sub_field('food_menu_photo_right_item');?>" />
            </div>
            <?php endwhile;?>
            <?php endif;?>
        </div>
    </section>
    <section class="food__certificates-section">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/decor-branch.png'; ?>"
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
get_template_part("template-parts/section-reserve");
get_template_part("template-parts/feedbacks-section");
get_template_part("template-parts/location-section");
?>
</main>

<?php get_footer()?>