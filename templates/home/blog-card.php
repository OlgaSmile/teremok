<?php
if (isset($args['blog'])) {
    $blog = $args['blog'];
    $link = $args['link_name'];
}
?>


<div class="blog-card ">
    <div class="blog-card__image-wrapper">
        <img class="blog-card__image" src="<?php the_field('blog_image', $blog->ID);?>">
    </div>
    <div class="blog-card__content">
        <h2 class="blog-card__title"> <?php the_title();?><?php the_field('title', $blog->ID);?></h2>
        <div class="blog-card__text"><?php the_excerpt();?></div>
        <div class="blog-card__read-more-btn">
            <div class="watchmore_button">
                <?php
$read_more = get_field('read_more', 'options');
get_template_part("template-parts/read-more-btn", null, ['btn_name' => $read_more, 'link_name' => $link]);?>
            </div>
        </div>
    </div>
</div>