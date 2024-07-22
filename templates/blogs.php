<?php
/*
Template Name: blogs
 */
get_header();

$blog_title = get_field('blog_title', 'options');
$read_more = get_field('read_more', 'options');

$args = array(
    'post_type' => 'blogs',
    'orderby' => 'id',
    'order' => 'ASC',
    'post_per_page' => -1,
);
$query = new WP_Query($args);

?>

<main class="">
    <section class="blog-page__hero">
        <img class="blog-page__hero-image" src="<?php the_field("blog_hero_image");?>" />
    </section>

    <section class="blog-page__blogs-section blog-page__blogs-section-container">
        <?php get_template_part("template-parts/section-title", null, array('title' => $blog_title));?>
        <div class="blog-page__blogs ">
            <?php
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        $link = get_permalink($query->ID);
        ?>
            <div class="blog-card">
                <div class="blog-card__image-wrapper">
                    <img class="blog-card__image" src="<?php the_field('blog_image', $query->ID);?>">
                </div>
                <div class="blog-card__content">
                    <h2 class="blog-card__title"> <?php the_title();?><?php the_field('title', $query->ID);?></h2>
                    <div class="blog-card__text"><?php the_content();?></div>
                    <div class="blog-card__read-more-btn">
                        <div class="watchmore_button">
                            <?php get_template_part("template-parts/read-more-btn", null, ['btn_name' => $read_more, 'link_name' => $link]);?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
}
}
;

wp_reset_postdata();
?>
        </div>
    </section>
</main>


<?php get_footer();?>