<section class="location-section">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>"
        class="location-section_decor-trees1 decor-trees2" />
    <?php
$location_title = get_field('location_title', 'options');
$google_maps_address = get_field('google_maps_address', 'options');
$location_image = get_field('location_map', 'options');
$location_pin = get_field('location_pin', 'options');

get_template_part("template-parts/section-title", null, array('title' => $location_title));?>
    <h2 class="location-section__subtitle"><?php the_field('location_subtitle', 'options');?></h2>
    <p class="location-section__address"><?php the_field('location_address', 'options');?></p>
    <div class="location-section__map">
        <a class="location-section__map-link" href="<?php echo esc_url($google_maps_address['url']); ?>"
            target="<?php echo $google_maps_address['target']; ?>">
            <img class="location-section__map-image" src="<?php echo $location_image; ?>" />
        </a>
        <a class="location-section__map-pin" href="<?php echo esc_url($google_maps_address['url']); ?>"
            target="<?php echo $google_maps_address['target']; ?>">
            <img src="<?php echo $location_pin; ?>" />
            <span>Вишка</span>
        </a>

    </div>
</section>