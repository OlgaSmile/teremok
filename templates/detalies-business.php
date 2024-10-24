<?php
/*
Template Name: detalies-business
*/

get_header();



$hero_detalies_busuness = get_field('hero_detalies_busuness')


?>

<main>
    <div class="business-detalies-hero-wrapper">
        <?php
        if (!empty($hero_detalies_busuness)) {

            get_template_part("template-parts/secondary-hero-section", null, ['img_array' => $hero_detalies_busuness, "title_section" => 'Деталі бізнеса']);
        } ?>

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
    <?php if (!post_password_required()): ?>
        <div>
            <h2> Контент</h2>
        </div>

    <?php endif ?>
    <?php

    get_template_part("template-parts/feedbacks-section");
    get_template_part("template-parts/location-section");


    ?>

</main>

<?php get_footer(); ?>