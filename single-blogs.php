<?php

get_header();

?>

<main class="">

    <section class="single-blog__hero">
        <img class="single-blog__hero-image" src="<?php the_field("blog_image");?>" />
    </section>
    <div class="section_title--icon_wrap single-blog__svg">
        <div class="anim-items">
            <svg class="section_title--icon small">
                <use href="#tree">
                </use>
            </svg>
        </div>
        <div class="anim-items">
            <svg class="section_title--icon big">
                <use href="#big-tree">
                </use>
            </svg>
        </div>
        <div class="anim-items">
            <svg class="section_title--icon small">
                <use href="#tree">
                </use>
            </svg>
        </div>
    </div>
    <section class="single-blog__section single-blog__blogs-section-container">
        <h1 class="single-blog__section-title"><?php the_title();?></h1>
        <div class="single-blog__section-text"><?php the_content();?></div>
    </section>

    <?php get_template_part("template-parts/location-section");?>
</main>

<?php get_footer();