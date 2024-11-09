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
$whatsapp = get_field('whatsapp', 'options');



$winter_summer_toggle = get_field('winter_summer_toggle', 'options');


$winter_hero_image = get_field('winter_hero_image');


?>



<section class="hero__section">

    <?php if (!empty($winter_summer_toggle)): ?>
        <div class="hero-summer">
            <img src="<?php echo esc_url($winter_hero_image['sizes']['medium_large']); ?>"
                alt="<?php echo esc_attr($winter_hero_image['alt']); ?>" />
        </div>
    <?php else: ?>
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
    <?php endif ?>
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

            <?php if (!empty($whatsapp)): ?>
                <li class="hero__socials--item">
                    <a href="<?php echo $whatsapp['url'] ?>" target="blank"
                        aria-label="WhatsApp">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                            <path d="M14 1.5C7.372 1.5 2 6.872 2 13.5c0 2.356.63 4.565 1.726 6.457L2 25l5.191-1.363C9.542 24.206 11.719 25 14 25c6.628 0 12-5.372 12-11.5S20.628 1.5 14 1.5z" stroke="#fff" stroke-width="1" fill="none" />
                            <path fill="transparent" stroke="#fff" fill-rule="evenodd" clip-rule="evenodd" d="M11.1071 9.0617C10.8955 8.57918 10.6604 8.56747 10.4605 8.56747C10.2841 8.55575 10.0952 8.55575 9.89529 8.55575C9.70779 8.55575 9.39002 8.62606 9.11981 8.9204C8.84891 9.21404 8.10858 9.90818 8.10858 11.3309C8.10858 12.7544 9.14324 14.1302 9.28455 14.3184C9.42517 14.5066 11.2836 17.5168 14.2242 18.6818C16.6699 19.6461 17.1641 19.458 17.6935 19.3987C18.2222 19.3401 19.3989 18.7052 19.6457 18.0228C19.8807 17.3528 19.8807 16.7648 19.8104 16.6469C19.7401 16.5297 19.5395 16.4587 19.2576 16.3057C18.9632 16.1651 17.5522 15.4592 17.282 15.3648C17.0111 15.2711 16.8229 15.2242 16.6347 15.5061C16.4465 15.8005 15.8937 16.447 15.7179 16.6352C15.5525 16.8234 15.3767 16.8468 15.0941 16.7055C14.8005 16.5649 13.8713 16.2588 12.7656 15.2711C11.9067 14.5059 11.3304 13.554 11.154 13.272C10.9899 12.9777 11.1305 12.8247 11.2836 12.6834C11.4132 12.5545 11.5779 12.3428 11.7192 12.1781C11.8598 12.0127 11.9067 11.8838 12.0129 11.6956C12.1066 11.5074 12.0597 11.3309 11.9894 11.1903C11.9184 11.0607 11.3663 9.63797 11.1071 9.0617Z" stroke="#3C4839" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <div class="hero__socials--title-wrap">
                        <p class="hero__socials--title">WhatsApp</p>
                    </div>
                </li>
            <?php endif ?>
        </ul>
        <div class="hero__cta">
            <p class="hero__subtitle"><?php if ($hero_subtitle) {
                                            echo $hero_subtitle;
                                        }
                                        ?></p>
        </div>
    </div>
</section>