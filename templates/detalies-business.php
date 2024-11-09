<?php
/*
Template Name: detalies-business
*/

get_header();


//socials
$facebook = get_field('facebook', 'option');
$instagram = get_field('instagram', 'option');
$telegram = get_field('telegram', 'option');
$viber = get_field('viber', 'option');
$whatsapp = get_field('whatsapp', 'options');



$hero_detalies_busuness = get_field('hero_detalies_busuness');
$detalies_title = get_field('detalies_title');
$detalies_repeater = get_field('detalies_repeater');
$detalies_title_contacts = get_field('detalies_title_contacts');

$detalies_phone = get_field('detalies_phone');
$detalies_telegram = get_field('detalies_telegram');
$detalies_viber = get_field('detalies_viber');

$detalies_videos_title = get_field('detalies_videos_title');
$detalies_videos = get_field('detalies_videos');

$google_maps_address = get_field('google_maps_address', 'option');
?>

<main>
    <section class="section-hero-detalies">
        <img class="section-hero-detalies__img" src="<?php echo $hero_detalies_busuness['url'] ?>" alt="<?php echo esc_attr($hero_detalies_busuness['alt']) ?>">
        <div class="business-detalies-hero-wrapper">
            <?php if (!empty(post_password_required())): ?>
                <div class="business-detalies-hero-wrapper__password-wrapper">
                    <?php
                    if (post_password_required()) {
                        the_content();
                    }
                    ?>
                </div>

            <?php endif ?>
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
                        <svg class="whatsApp-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="28" viewBox="0 0 28 28" fill="none">
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

        <?php get_template_part("template-parts/logo-detalies"); ?>

        <a href="<?php echo esc_url($google_maps_address['url']) ?>" class="section-hero-detalies__location" target="_blank"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.0001 2C7.58908 2 4.00008 5.589 4.00008 9.995C3.97108 16.44 11.6961 21.784 12.0001 22C12.0001 22 20.0291 16.44 20.0001 10C20.0001 5.589 16.4111 2 12.0001 2ZM12.0001 14C9.79008 14 8.00008 12.21 8.00008 10C8.00008 7.79 9.79008 6 12.0001 6C14.2101 6 16.0001 7.79 16.0001 10C16.0001 12.21 14.2101 14 12.0001 14Z" fill="white" />
            </svg>
            <span><?php echo get_field('location_address', 'options') ?></span></a>
    </section>



    <?php if (!post_password_required()): ?>
        <section class="section-buisness-detalies">
            <?php if (!empty($detalies_title)): ?>
                <?php
                get_template_part("template-parts/section-title", null, array('title' => $detalies_title)) ?>

            <?php endif ?>

            <?php if (!empty($detalies_repeater)): ?>
                <div class="section-buisness-detalies__wrapper">

                    <?php foreach ($detalies_repeater as $row): ?>
                        <div class="section-buisness-detalies__item">
                            <div class="section-buisness-detalies__item-name">
                                <p><?php echo $row['name'] ?></p>
                            </div>

                            <div class="section-buisness-detalies__item-desc">
                                <?php echo $row['desc'] ?>
                            </div>
                        </div>

                    <?php endforeach ?>

                <?php endif ?>
        </section>

        <section class="section-detalies-contacts">
            <?php if (!empty($detalies_title_contacts)): ?>
                <?php
                get_template_part("template-parts/section-title-secondary", null, array('title' => $detalies_title_contacts)) ?>

            <?php endif ?>


            <div class="section-detalies-contacts__wrapper">
                <?php if (!empty($detalies_phone)): ?>
                    <a href="tel:<?php echo $detalies_phone ?>"><?php echo $detalies_phone ?></a>
                <?php endif ?>

                <div class="section-detalies-contacts__wrapper-soccial">
                    <?php if (!empty($detalies_telegram)): ?>
                        <a href="<?php echo $detalies_telegram ?>" target="blank"><svg class="telegram-icon" xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none" stroke="#3C4839">
                                <path d="M25.2652 6.96094C25.9998 6.96094 26.554 7.60534 26.2576 8.80393L22.6618 25.7517C22.4105 26.9567 21.6823 27.2467 20.6771 26.6861L12.1001 20.3516C12.0668 20.3277 12.0397 20.2963 12.021 20.2599C12.0023 20.2235 11.9926 20.1831 11.9926 20.1422C11.9926 20.1012 12.0023 20.0609 12.021 20.0245C12.0397 19.9881 12.0668 19.9566 12.1001 19.9327L22.0045 10.9884C22.4556 10.5889 21.9079 10.3956 21.315 10.7565L8.88451 18.5988C8.84681 18.6234 8.804 18.6391 8.75934 18.6447C8.71468 18.6503 8.66934 18.6456 8.62675 18.6311L3.34909 16.9621C2.17628 16.6205 2.17628 15.815 3.6133 15.2415L24.7303 7.09626C24.8978 7.01592 25.0797 6.96991 25.2652 6.96094Z" stroke="" stroke-linecap="round" stroke-linejoin="round" />
                            </svg><span>Telegram</span></a>
                    <?php endif ?>
                    <?php if (!empty($detalies_viber)): ?>
                        <a href="<?php echo $detalies_viber ?>" target="blank"><svg class="viber-icon" xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="#3C4839">
                                <path d="M15.4092 12.7488C15.4179 12.5814 15.5608 12.4527 15.7282 12.4614C16.3547 12.4941 16.8759 12.6837 17.2472 13.0676C17.617 13.4499 17.7982 13.9841 17.8301 14.6256C17.8384 14.7931 17.7093 14.9356 17.5419 14.9439C17.3744 14.9522 17.2319 14.8232 17.2236 14.6557C17.1964 14.1065 17.0457 13.7327 16.8107 13.4897C16.5771 13.2482 16.2206 13.0952 15.6966 13.0678C15.5291 13.0591 15.4005 12.9163 15.4092 12.7488Z" fill="current" />
                                <path d="M15.2739 10.8325C15.1067 10.8203 14.9612 10.9459 14.949 11.1131C14.9367 11.2804 15.0624 11.4259 15.2296 11.4381C16.3856 11.5227 17.2537 11.9096 17.8748 12.5875C18.4977 13.2682 18.8034 14.1167 18.7809 15.1563C18.7773 15.3239 18.9103 15.4628 19.0779 15.4664C19.2455 15.47 19.3844 15.3371 19.388 15.1694C19.4135 13.9905 19.0621 12.9855 18.3227 12.1775L18.3226 12.1774C17.5751 11.3614 16.5489 10.9258 15.2739 10.8325Z" fill="current" />
                                <path d="M14.413 9.55824C14.4141 9.39057 14.551 9.25559 14.7187 9.25676C16.4806 9.26903 17.9699 9.85559 19.1657 11.0213C20.3714 12.1967 20.9677 13.7969 20.9828 15.7843C20.9841 15.952 20.8492 16.089 20.6815 16.0902C20.5139 16.0915 20.3769 15.9566 20.3756 15.789C20.3615 13.9266 19.8074 12.4949 18.7418 11.4561C17.6662 10.4075 16.3307 9.87522 14.7145 9.86396C14.5468 9.86279 14.4118 9.72592 14.413 9.55824Z" fill="current" />
                                <path d="M16.4291 18.46C16.1993 18.7431 15.7725 18.7071 15.7725 18.7071C12.6533 17.9108 11.8184 14.7512 11.8184 14.7512C11.8184 14.7512 11.781 14.3244 12.0655 14.0947L12.6291 13.6466C12.9086 13.4313 13.0869 12.9087 12.8024 12.3983C12.5841 12.0153 12.3469 11.6434 12.0914 11.284C11.8433 10.9451 11.2652 10.2511 11.2631 10.249C10.9843 9.92015 10.5745 9.8438 10.1423 10.0689C10.141 10.0689 10.1392 10.0695 10.1375 10.07C10.1359 10.0706 10.1343 10.0711 10.1333 10.0711C9.70345 10.3187 9.31586 10.6334 8.98514 11.0031C8.98401 11.0054 8.98288 11.0065 8.98175 11.0075C8.98072 11.0085 8.97969 11.0095 8.97865 11.0114C8.71166 11.3336 8.55884 11.6495 8.52018 11.959C8.51216 12.0046 8.50938 12.051 8.5119 12.0973C8.51046 12.2339 8.53126 12.3699 8.57348 12.4999L8.58825 12.51C8.72295 12.9883 9.06005 13.7849 9.79259 15.1132C10.2116 15.8814 10.6948 16.6128 11.2372 17.2996C11.5089 17.6439 11.8001 17.9723 12.1094 18.2832C12.1132 18.2869 12.1168 18.2906 12.1205 18.2944C12.1278 18.3018 12.1351 18.3091 12.1426 18.3163L12.242 18.4157C12.5529 18.7251 12.8813 19.0163 13.2255 19.288C13.9124 19.8304 14.644 20.3137 15.4124 20.7326C16.7403 21.4651 17.5376 21.8022 18.0152 21.9369L18.0253 21.9517C18.1552 21.994 18.2912 22.015 18.4279 22.0136C18.4742 22.0159 18.5206 22.013 18.5662 22.005C18.8762 21.9683 19.1918 21.8157 19.5131 21.5472C19.517 21.5451 19.517 21.5429 19.5213 21.5408C19.8911 21.2099 20.2059 20.8224 20.4538 20.3926C20.4538 20.3917 20.4541 20.3905 20.4544 20.3892C20.4549 20.3872 20.4556 20.3851 20.4556 20.3836C20.6807 19.9514 20.6043 19.5416 20.2737 19.2625C20.2733 19.2625 20.2463 19.2402 20.2007 19.2026C20.0133 19.0482 19.5111 18.6345 19.2386 18.4341C18.8796 18.1787 18.5081 17.9414 18.1254 17.7232C17.6147 17.4387 17.0932 17.6169 16.8771 17.8964L16.4291 18.46Z" fill="current" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M23.6919 7.30186C23.0955 6.75155 20.6853 5.00193 15.3169 4.97816C15.3169 4.97816 8.98622 4.5964 5.90009 7.42719C4.18217 9.14547 3.57784 11.6597 3.51409 14.7768C3.45034 17.8939 3.36787 23.7355 8.99882 25.3195H9.00422L9.00062 27.7364C9.00062 27.7364 8.96461 28.715 9.60892 28.9145C10.2593 29.1165 10.6855 28.6319 11.2412 28C11.3514 27.8748 11.4666 27.7437 11.5897 27.6111C11.9982 27.171 12.5622 26.5245 12.9871 26.0304C16.8382 26.3545 19.8001 25.6137 20.1365 25.5042C20.2059 25.4817 20.3041 25.4567 20.4261 25.4257L20.4261 25.4257C21.6703 25.1093 25.3779 24.1666 26.0296 18.8472C26.7683 12.8266 25.6723 9.01833 23.6919 7.30186ZM24.3445 18.4154C23.8006 22.8068 20.8532 23.4926 19.7912 23.7398L19.7911 23.7398L19.791 23.7398C19.6736 23.7671 19.5793 23.7891 19.5138 23.8101C19.2339 23.9001 16.6326 24.5473 13.3613 24.3337C13.3613 24.3337 10.9238 27.2744 10.1625 28.039C10.0436 28.1585 9.90388 28.2068 9.8106 28.183C9.67951 28.151 9.64349 27.9957 9.64493 27.7688C9.64709 27.4447 9.66582 23.7525 9.66582 23.7525C5.05987 22.4737 5.1673 17.7827 5.22827 15.1202L5.22827 15.12C5.23036 15.0291 5.23238 14.9405 5.23417 14.8546C5.28819 12.251 5.77728 10.1182 7.23012 8.68375C9.84049 6.31936 15.2179 6.67267 15.2179 6.67267C19.759 6.69248 21.9351 8.05997 22.4396 8.51808C24.1151 9.95256 24.9686 13.3852 24.3445 18.4139V18.4154Z" fill="current" />
                            </svg><span>Viber</span></a>
                    <?php endif ?>
                    <?php if (!empty($whatsapp)): ?>
                        <a href="<?php echo $whatsapp['url'] ?>" target="blank">
                            <svg class="whatsApp-icon" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                <path d="M14 1.5C7.372 1.5 2 6.872 2 13.5c0 2.356.63 4.565 1.726 6.457L2 25l5.191-1.363C9.542 24.206 11.719 25 14 25c6.628 0 12-5.372 12-11.5S20.628 1.5 14 1.5z" stroke="current" stroke-width="1" fill="none" />
                                <path fill="transparent" stroke="current" fill-rule="evenodd" clip-rule="evenodd" d="M11.1071 9.0617C10.8955 8.57918 10.6604 8.56747 10.4605 8.56747C10.2841 8.55575 10.0952 8.55575 9.89529 8.55575C9.70779 8.55575 9.39002 8.62606 9.11981 8.9204C8.84891 9.21404 8.10858 9.90818 8.10858 11.3309C8.10858 12.7544 9.14324 14.1302 9.28455 14.3184C9.42517 14.5066 11.2836 17.5168 14.2242 18.6818C16.6699 19.6461 17.1641 19.458 17.6935 19.3987C18.2222 19.3401 19.3989 18.7052 19.6457 18.0228C19.8807 17.3528 19.8807 16.7648 19.8104 16.6469C19.7401 16.5297 19.5395 16.4587 19.2576 16.3057C18.9632 16.1651 17.5522 15.4592 17.282 15.3648C17.0111 15.2711 16.8229 15.2242 16.6347 15.5061C16.4465 15.8005 15.8937 16.447 15.7179 16.6352C15.5525 16.8234 15.3767 16.8468 15.0941 16.7055C14.8005 16.5649 13.8713 16.2588 12.7656 15.2711C11.9067 14.5059 11.3304 13.554 11.154 13.272C10.9899 12.9777 11.1305 12.8247 11.2836 12.6834C11.4132 12.5545 11.5779 12.3428 11.7192 12.1781C11.8598 12.0127 11.9067 11.8838 12.0129 11.6956C12.1066 11.5074 12.0597 11.3309 11.9894 11.1903C11.9184 11.0607 11.3663 9.63797 11.1071 9.0617Z" stroke="" stroke-linejoin="round" />
                            </svg>
                            <span>WhatsApp</span></span></a>
                    <?php endif ?>
                </div>

            </div>
        </section>

        <?php if (!empty($detalies_videos)): ?>

            <section class="section-detalies-videos">

                <?php if (!empty($detalies_videos)): ?>
                    <h2 class="section-detalies-videos__title"><?php echo $detalies_videos_title ?></h2>
                <?php endif ?>
                <div class="video-container">
                    <?php foreach ($detalies_videos as $row): ?>
                        <div class="video-container__item">
                            <iframe width="560" height="315" allowfullscreen src="<?php echo $row['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    <?php endforeach ?>

                </div>
            </section>
        <?php endif ?>
    <?php endif ?>
    <?php
    get_template_part("template-parts/location-section");
    ?>

</main>

<?php get_footer(); ?>