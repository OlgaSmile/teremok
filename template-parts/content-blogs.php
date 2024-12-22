<?php

get_header();

?>

<main class="">
    <section class="single-blog__hero">
        <img class="single-blog__hero-image" src="<?php the_field("blog_image");?>" />
    </section>

    <section class="single-blog__section single-blog__blogs-section-container">
        <h1 class="single-blog__section-title"><?php the_title();?></h1>
        <p class="single-blog__section-text"><?php the_content();?></p>
    </section>
</main>


<?php get_footer();?>