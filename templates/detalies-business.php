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
$phone = get_field('phone', 'options');


$hero_detalies_busuness = get_field('hero_detalies_busuness');
$detalies_title = get_field('detalies_title');
$detalies_repeater = get_field('detalies_repeater');
$detalies_title_contacts = get_field('detalies_title_contacts');


$detalies_videos_title = get_field('detalies_videos_title');
$detalies_videos = get_field('detalies_videos');

$google_maps_address = get_field('google_maps_address', 'option');
?>

<main>
    <section class="section-hero-detalies">
        <img class="activities-main__decor-1" src="<?php echo get_template_directory_uri() . '/assets/images/decor-branch-left.png'; ?>">

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


        <?php get_template_part("template-parts/hero-soccials") ?>

        <?php get_template_part("template-parts/logo-detalies"); ?>

        <a href="<?php echo esc_url($google_maps_address['url']) ?>" class="section-hero-detalies__location" target="_blank"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.0001 2C7.58908 2 4.00008 5.589 4.00008 9.995C3.97108 16.44 11.6961 21.784 12.0001 22C12.0001 22 20.0291 16.44 20.0001 10C20.0001 5.589 16.4111 2 12.0001 2ZM12.0001 14C9.79008 14 8.00008 12.21 8.00008 10C8.00008 7.79 9.79008 6 12.0001 6C14.2101 6 16.0001 7.79 16.0001 10C16.0001 12.21 14.2101 14 12.0001 14Z" fill="white" />
            </svg>
            <span><?php echo get_field('location_address', 'options') ?></span></a>
    </section>



    <?php if (!post_password_required()): ?>
        <section class="section-buisness-detalies">
            <img class="section-activity__decor2" src="<?php echo get_template_directory_uri() . '/assets/images/decor-branch.png'; ?>">
            <img class="activity-nearby__decor-2" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>">
            <img class="activity-nearby__decor-2 activity-nearby__decor-2-next" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>">
            <img class="activity-nearby__decor-2 activity-nearby__decor-2-next-2" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>">
            <img class="activity-nearby__decor-1" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees1.png'; ?>">
            <img class="activity-nearby__decor-2 activity-nearby__decor-2-next-3" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>">
            <img class="section-activity__decor2 section-activity__decor2-bottom" src="<?php echo get_template_directory_uri() . '/assets/images/decor-branch.png'; ?>">
            <img class="section-activity__decor2-right" src="<?php echo get_template_directory_uri() . '/assets/images/decor-branch.png'; ?>">
            <img class="activity-nearby__decor-2-right" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>">
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
                <?php if (!empty($phone)): ?>
                    <a href="tel:<?php echo $phone ?>"><?php echo $phone ?></a>
                <?php endif ?>

                <div class="section-detalies-contacts__wrapper-soccial">
                    <?php if (!empty($telegram)): ?>
                        <a href="<?php echo $telegram['url'] ?>" target="blank">
                            <?php get_template_part("./template-parts/social_icons", null, array('icon' => 'telegram')); ?>
                            <span>Telegram</span></a>
                    <?php endif ?>
                    <?php if (!empty($viber)): ?>
                        <a href="<?php echo esc_attr($viber['url']); ?>" target="blank">
                            <?php get_template_part("./template-parts/social_icons", null, array('icon' => 'viber')); ?>
                            <span>Viber</span></a>
                    <?php endif ?>
                    <?php if (!empty($whatsapp)): ?>
                        <a href="<?php echo $whatsapp['url'] ?>" target="blank">

                            <?php get_template_part("./template-parts/social_icons", null, array('icon' => 'whatsapp')); ?>
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