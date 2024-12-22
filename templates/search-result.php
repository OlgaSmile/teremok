<?php
/*
Template Name: search-result
 */

get_header();

$heroImg = get_field('search-result-img')

?>

<main>

    <section class="reserve-section">
        <div class="wrapper-search-hero">
            <img src="<?php echo $heroImg['url'] ?>" alt="<?php echo $heroImg['alt'] ?>">
            <div class="reserve-section__position-box-reserve">
                <?php get_template_part("template-parts/search-reserv")?>
            </div>
        </div>
    </section>



    <section class="section-search-result">
        <?php
get_template_part("template-parts/section-title-secondary", null, array('title' => get_field('search_result_title', 'options')))?>

        <div class="container">
            <?php echo do_shortcode('[mphb_search_results class="search-result"]'); ?>
        </div>

        </div>


    </section>

    <?php
get_template_part("template-parts/feedbacks-section");
get_template_part("template-parts/location-section");
?>
</main>


<?php get_footer();?>