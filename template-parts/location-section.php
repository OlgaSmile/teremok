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
            <img class="location-section__map-image" src="<?php echo $location_image; ?>" alt="Мапа розташування" />
        </a>
        <a class="location-section__map-pin" href="<?php echo esc_url($google_maps_address['url']); ?>"
            target="<?php echo $google_maps_address['target']; ?>">
            <svg width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M8.00008 0.800781C3.58908 0.800781 8.14446e-05 4.38978 8.14446e-05 8.79578C-0.0289186 15.2408 7.69608 20.5848 8.00008 20.8008C8.00008 20.8008 16.0291 15.2408 16.0001 8.80078C16.0001 4.38978 12.4111 0.800781 8.00008 0.800781ZM8.00008 12.8008C5.79008 12.8008 4.00008 11.0108 4.00008 8.80078C4.00008 6.59078 5.79008 4.80078 8.00008 4.80078C10.2101 4.80078 12.0001 6.59078 12.0001 8.80078C12.0001 11.0108 10.2101 12.8008 8.00008 12.8008Z"
                    fill="currentColor" />
            </svg> <span>Вишка</span>
        </a>

    </div>
</section>