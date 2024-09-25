<?php
$main_bg = get_field('main_bg');
$secondary_bg = get_field('secondary_bg');
$third_bg = get_field('third_bg');
$fourth_bg = get_field('fourth_bg');
$title_bg = get_field('title_bg');

$google_maps_address = get_field('google_maps_address', 'option');
$hero_subtitle = get_field('hero_subtitle');
$location = get_field('location');
$address_location = get_field('address_location');

//socials
$facebook = get_field('facebook', 'option');
$instagram = get_field('instagram', 'option');
$telegram = get_field('telegram', 'option');
$viber = get_field('viber', 'option');
?>

<section class="hero__section">
    <div id="enter-parallax">
        <?php if ($fourth_bg) { ?>
            <div class="enter-parallax-bg hero__bg hero__bg--fourth">
                <?php echo wp_get_attachment_image($fourth_bg, 'large'); ?>
            </div>
        <?php } ?>
        <?php if ($third_bg) { ?>
            <div class="enter-parallax-bg hero__bg hero__bg--third">
                <?php echo wp_get_attachment_image($third_bg, 'medium_large'); ?>
            </div>
        <?php } ?>
        <?php if ($main_bg) { ?>
            <div class="enter-parallax-bg hero__bg hero__bg--main">
                <?php echo wp_get_attachment_image($main_bg, 'large'); ?>
            </div>
        <?php } ?>
        <?php if ($secondary_bg) { ?>
            <div class="enter-parallax-bg hero__bg hero__bg--secondary">
                <?php echo wp_get_attachment_image($secondary_bg, 'medium_large'); ?>
            </div>
        <?php } ?>
        <?php if ($title_bg) { ?>
            <div class="enter-parallax-bg hero__bg hero__title">
                <img src="<?php echo esc_url($title_bg['sizes']['medium_large']); ?>"
                    alt="<?php echo esc_attr($title_bg['alt']); ?>" />
            </div>
        <?php } ?>
    </div>
    <div class="hero__content">
        <div class="reserv-position-hero">

            <?php get_template_part("template-parts/search-reserv") ?>
        </div>
        <a href="<?php echo esc_url($google_maps_address['url']); ?>"
            target="<?php echo $google_maps_address['target']; ?>" class="hero__location">
            <svg width="24" height="24">
                <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#point_map"></use>
            </svg>
            <div class="location-wrapper">
                <p class="location-text-hide"><?php if ($location) {
                                                    echo $location;
                                                }
                                                ?></p>
                <p class="location-text-show"><?php
                                                if ($address_location) {
                                                    echo $address_location;
                                                }
                                                ?></p>
            </div>
        </a>
        <div class="hero__route">
            <svg class="hero__route--one" width="14" height="14">
                <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#point_map"></use>
            </svg>
            <svg class="hero__route--two" width="18" height="18">
                <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#point_map"></use>
            </svg>
            <svg class="hero__route--line" viewBox="0 0 732 117" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0.234375 28.2136L117.35 0.878906L181.622 28.2136L244.465 10.4448L384.433 76.0515L548.682 10.4448L730.853 115.923"
                    stroke="white" />
            </svg>
        </div>
        <ul class="hero__socials">
            <?php if ($facebook) { ?>
                <li class="hero__socials--item">
                    <a href="<?php echo esc_attr($facebook['url']); ?>"
                        target="<?php echo esc_attr($facebook['target']); ?>" aria-label="Facebook">
                        <svg class="" width="28" height="28">
                            <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#facebook"></use>
                        </svg>
                    </a>
                    <div class="hero__socials--title-wrap">
                        <p class="hero__socials--title"><?php echo esc_attr($facebook['title']); ?></p>
                    </div>
                </li>
            <?php } ?>
            <?php if ($instagram) { ?>
                <li class="hero__socials--item">
                    <a href="<?php echo esc_attr($instagram['url']); ?>" target="<?php echo $instagram['target']; ?>"
                        aria-label="instagram">
                        <svg class="" width="28" height="28">
                            <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#instagram"></use>
                        </svg>
                    </a>
                    <div class="hero__socials--title-wrap">
                        <p class="hero__socials--title"><?php echo esc_attr($instagram['title']); ?></p>
                    </div>
                </li>
            <?php } ?>
            <?php if ($telegram) { ?>
                <li class="hero__socials--item">
                    <a href="<?php echo esc_attr($telegram['url']); ?>" target="<?php echo $telegram['target']; ?>"
                        aria-label="telegram">
                        <svg class="" width="28" height="28">
                            <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#telegram"></use>
                        </svg>
                    </a>
                    <div class="hero__socials--title-wrap">
                        <p class="hero__socials--title"><?php echo esc_attr($telegram['title']); ?></p>
                    </div>
                </li>
            <?php } ?>
            <?php if ($viber) { ?>
                <li class="hero__socials--item viber_item">
                    <a href="<?php echo esc_attr($viber['url']); ?>" target="<?php echo $viber['target']; ?>"
                        aria-label="viber">
                        <svg class="hero__socials--viber" width="28" height="28">
                            <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#viber">
                            </use>
                        </svg>
                    </a>
                    <div class="hero__socials--title-wrap">
                        <p class="hero__socials--title"><?php echo esc_attr($viber['title']); ?></p>
                    </div>
                </li>
            <?php } ?>
        </ul>
        <div class="hero__cta">
            <p class="hero__subtitle"><?php if ($hero_subtitle) {
                                            echo $hero_subtitle;
                                        }
                                        ?></p>
        </div>
    </div>
</section>