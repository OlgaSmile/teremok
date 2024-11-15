<section class="section apartments__section">
    <div class="apartments__section-title">
        <?php
$apartments_title = get_field('apartments_title', 'options');
get_template_part("template-parts/section-title", null, ['title' => $apartments_title]);?>
    </div>
    <div class="apartments__section-wrapper">
        <?php
$args = array(
    'post_type' => 'apartments',
    'numberposts' => 3,
    'orderby' => 'modified',
    'post_status' => 'publish',
);

$query = new WP_Query($args);

if ($query->have_posts()):
    while ($query->have_posts()): $query->the_post();?>
		        <?php get_template_part('template-parts/one-apartment');?>
		        <?php endwhile;
endif;

wp_reset_postdata();?>

    </div>
</section>