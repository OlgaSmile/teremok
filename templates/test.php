<?php
/*
Template Name: Test page
 */

get_header();

$blog_title = get_field('mphb_room_details', 'options');
$read_more = get_field('read_more', 'options');
$hero_blog_image = get_field("blog_hero_image");

$args = array(
    'post_type' => 'mphb_room_details',
    'orderby' => 'id',
    'order' => 'ASC',
    'post_per_page' => -1,
);
$query = new WP_Query($args);

?>

<main class="blog-page">
    <section class="blog-page__hero">
        <?php echo $blog_title; ?>
        <?php get_template_part("template-parts/secondary-hero-section", null, ['img_array' => $hero_blog_image, "title_section" => get_the_title()]);?>
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
            <div class="blog-page_blog">
                <div class="blog-page_blog__image-wrapper">
                    <img class="blog-page_blog__image" src="<?php the_field('blog_image', $query->ID);?>" alt="">
                </div>
                <div class="blog-page_blog__content">
                    <h2 class="blog-page_blog__title"> <?php the_title();?><?php the_field('title', $query->ID);?>
                    </h2>
                    <div class="blog-page_blog__text"><?php the_content();?></div>
                    <div class="blog-page_blog__text-mb"></div>
                    <div class="blog-page_blog__read-more-btn">
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

    <?php get_template_part("template-parts/location-section");?>

</main>


<?php get_footer();?>