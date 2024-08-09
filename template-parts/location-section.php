<section class="location-section">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>"
        class="location-section_decor-trees1 decor-trees1" />
    <?php
$location_title = get_field('location_title', 'options');
$google_maps_address = get_field('google_maps_address', 'options');

get_template_part("template-parts/section-title", null, array('title' => $location_title));?>
    <h2 class="location-section__subtitle"><?php the_field('location_subtitle');?></h2>
    <p class="location-section__address"><?php the_field('location_address');?></p>
    <div class="location-section__map">

        <a href="<?php echo esc_url($google_maps_address['url']); ?>"
            target="<?php echo $google_maps_address['target']; ?>">
            <?php
$location_image = get_field('location_map', 'options');
if ($location_image) {
    echo wp_get_attachment_image($location_image, 'size-large');
}
;?>
        </a>
    </div>
</section>