<?php
/*
Template Name: All accommodations
 */

get_header();

$accommodations_hero_image = get_field('accommodations_hero_image');
$accommodation_rules = get_field('accommodation_rules');

$houses_title = get_field('houses_section_title');
$family_rooms_title = get_field('family-rooms_section_title');
$double_rooms_title = get_field('double-rooms_section_title');
?>
<main class="accommodations-main">
    <section class="accommodations-hero">
        <?php get_template_part("template-parts/secondary-hero-section", null, ['img_array' => $accommodations_hero_image, "title_section" => get_the_title()]);?>

        <div class="accommodations-hero_info">
            <div class="accommodations-hero_info-content">
                <?php if ($accommodation_rules): ;?>
                <div class="accommodations-hero_info-item">
                    <?php echo $accommodation_rules['accommodation_rule_1']; ?>
                </div>
                <svg class="accommodations-hero_info-divider">
                    <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#one_tree">
                    </use>
                </svg>
                <div class="accommodations-hero_info-item">
                    <?php echo $accommodation_rules['accommodation_rule_2']; ?>

                </div>
                <svg class="accommodations-hero_info-divider">
                    <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#one_tree">
                    </use>
                </svg>
                <div class="accommodations-hero_info-item">
                    <?php echo $accommodation_rules['accommodation_rule_3']; ?>

                </div>
                <?php endif;?>
            </div>
        </div>
    </section>

    <section class="accommodations-houses accommodations-section">
        <?php get_template_part("template-parts/section-title", null, array('title' => $houses_title));?>
        <div class="accommodations-desc">
            <?php echo get_field('houses_section_desc'); ?>
        </div>

        <?php echo do_shortcode('[mphb_rooms class="accommodations" price="1"]'); ?>
    </section>

    <section class="accommodations-family_rooms accommodations-section">
        <?php get_template_part("template-parts/section-title", null, array('title' => $family_rooms_title));?>
        <div class="accommodations-desc">
            <?php echo get_field('family-rooms_desc'); ?>
        </div>

        <?php echo do_shortcode('[mphb_rooms class="accommodations"]'); ?>
    </section>

    <section class="accommodations-double_rooms accommodations-section">
        <?php get_template_part("template-parts/section-title", null, array('title' => $double_rooms_title));?>
        <div class="accommodations-desc">
            <?php echo get_field('double-rooms_desc'); ?>
        </div>

        <?php echo do_shortcode('[mphb_rooms class="accommodations"]'); ?>
    </section>

    <section class="accommodations_search-section">
        <img src="<?php echo get_field("accommodations-search_summer-photo"); ?>"
            class="accommodations_search-section_img" />

        <div class="accommodations_search-section_form">
            <?php get_template_part("template-parts/search-reserv")?>
        </div>
    </section>

    <?php
get_template_part("template-parts/feedbacks-section");
get_template_part("template-parts/location-section");
?>
</main>

<?php get_footer();