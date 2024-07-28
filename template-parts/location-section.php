<section class="location-section">

    <?php
$location_title = get_field('location_title', 'options');
get_template_part("template-parts/section-title", null, array('title' => $location_title));?>
    <h2 class="location-section__subtitle"><?php the_field('location_subtitle');?></h2>
    <p class="location-section__address"><?php the_field('location_address');?></p>
    <div class="location-section__map">
        <a href="<?php echo get_field('google_maps_address', 'options'); ?>">
            <?php
$location_image = get_field('location_map', 'options');
if ($location_image) {
    echo wp_get_attachment_image($location_image, 'large');
}
;?>
        </a>
    </div>
</section>