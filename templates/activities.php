<?php
/*
Template Name: Activities
 */




$hero_active_image = get_field('hero_activity_image');
$title_main = get_field('activity_introduction_title');
$main_text = get_field('activity_introduction_text');
$section_reserve_img = get_field('activity_reserve_Image');





get_header();
?>
<main class="activities-main">
  <div class="activities-bg-decor-hero">
    <?php
    if (!empty($hero_active_image)) {

      get_template_part("template-parts/secondary-hero-section", null, ['img_array' => $hero_active_image, "title_section" => get_the_title()]);
    } ?>
    <img class="activities-main__decor-1" src="<?php echo get_template_directory_uri() . '/assets/images/decor-branch-left.png'; ?>">

  </div>


  <?php




  ?>

  <section class="section-activity">
    <img class="section-activity__decor2" src="<?php echo get_template_directory_uri() . '/assets/images/decor-branch.png'; ?>">
    <?php
    get_template_part("template-parts/section-title", null, array('title' => $title_main)) ?>

    <div class="section-activity__text"><?php echo $main_text ?></div>
    <?php
    $args = array(
      'post_type' => 'activities',
      'posts_per_page' => -1,
      'orderby' => 'modified',
      'post_status' => 'publish'
    );

    $query = new WP_Query($args);
    $number_of_posts  = $query->found_posts
    ?>

    <div class="activity-nearby">

      <?php

      $index = 0;
      if ($number_of_posts >= 5): ?>
        <img class="activity-nearby__decor-1" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees1.png'; ?>">
        <img class="activity-nearby__decor-2" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>">
      <?php endif ?>
      <?php if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
          if (is_object($post) && property_exists($post, 'ID')) {
            $post_id = $post->ID;
          } else {
            echo 'Error: $post is not an object or ID property does not exist.';
          }

          $activity_distance_repeat = get_field('activity_distance_repeat', $post_id);
          $activity_gallery_swiper = get_field('activity_repeet_item_images', $post_id);
          $activity_text_contents = get_field('activity_repeet_item_text_box', $post_id);
          $main_img = get_field('activity_repeet_item_main_img', $post_id);

          $index++;
      ?>

          <div class="activity-nearby__item">
            <?php if ($index === 1 &&  $number_of_posts >= 12): ?>
              <img class="activity-nearby__item-decor-1" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>">
            <?php endif ?>
            <?php if ($index === 16 &&  $number_of_posts >= 24): ?>
              <img class="activity-nearby__item-decor-2" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>">
            <?php endif ?>
            <?php if (!empty($main_img)): ?>
              <div class="activity-nearby__item-image-box">
                <img src="<?php echo $main_img['url'] ?>" alt="<?php echo $main_img['alt'] ?>">
              </div>
              <div class="activity-nearby__item-mobile-gallery">
                <?php if (!empty($activity_gallery_swiper)): ?>
                  <?php
                  get_template_part('template-parts/images-activites-swiper', null, array('images' => $activity_gallery_swiper)); ?>
                <?php endif ?>
              </div>
            <?php endif ?>
            <h3><?php echo the_title() ?></h3>

            <?php if (!empty($activity_distance_repeat)): ?>
              <?php foreach ($activity_distance_repeat as  $rowDistance) : ?>
                <div class="activity-nearby__distance-wrapper">
                  <?php if (!empty(get_field("distance_icon", "options")['url'])): ?>
                    <img width="24" height="24" src="<?php echo get_field("distance_icon", "options")['url'] ?>" alt="<?php echo get_field("distance_icon", "options")['alt'] ?>">
                  <?php endif ?>
                  <p><?php echo $rowDistance['from'] === true ? 'від' : '' ?> <?php echo $rowDistance['distance'] ?> <?php echo $rowDistance['select'] ?></p>
                </div>

              <?php endforeach ?>
            <?php endif ?>

            <?php if (!empty($activity_text_contents)): ?>
              <div id="activity-content-<?php echo $post_id ?>" class="activity-nearby__content-mobile">
                <?php foreach ($activity_text_contents as  $rowContent) : ?>

                  <?php if (!empty(get_field("mountains_icon", "options")['url'])): ?>
                    <img class="section-activity-content__item-content-img" src="<?php echo get_field("mountains_icon", "options")['url'] ?>" alt="<?php echo get_field("mountains_icon", "options")['alt'] ?>">
                  <?php endif ?>
                  <div>
                    <p><?php echo $rowContent['text'] ?></p>
                  </div>
                <?php endforeach ?>

              </div>

            <?php endif ?>
            <div class="activity-nearby__item-bottom-wrapper">

              <a href="#post-<?php echo $post_id ?>" class="activity-nearby__detalies-btn"><?php echo get_field('more-details', 'options') ? get_field('more-details', 'options') : 'Детальніше' ?></a>

              <button id="activity-<?php echo $post_id ?>" class="activity-nearby__detalies-btn-mobile"><span id="text-more-<?php echo $post_id ?>"><?php echo get_field('more-details', 'options') ? get_field('more-details', 'options') : 'Детальніше' ?></span>




                <svg id='activity-icon-<?php echo $post_id  ?>' class="activity-nearby__detalies-btn-mobile-icon" xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                  <path d="M12.5 5.48431C10.3365 5.99923 6.0094 8.02326 6.0094 12M6.0094 12C3.75648 5.80609 0.885307 5.15897 0.5 5.15897M6.0094 12L6.0094 -2.83713e-07" stroke="#E67739" />
                </svg> </button>
            </div>


          </div>




      <?php endwhile;
      endif;
      ?>


    </div>
    <?php wp_reset_postdata(); ?>

  </section>
  <section>
    <img src="" alt="">



  </section>

  <?php
  $args = array(
    'post_type' => 'activities',
    'posts_per_page' => -1,
    'orderby' => 'modified',
    'post_status' => 'publish'
  );

  $query = new WP_Query($args);

  if ($query->have_posts()) :
  ?>
    <section class="section-activity-content">
      <?php while ($query->have_posts()) : $query->the_post();
        if (is_object($post) && property_exists($post, 'ID')) {
          $post_id = $post->ID;
        } else {
          echo 'Error: $post is not an object or ID property does not exist.';
        }

        $activity_distance_repeat = get_field('activity_distance_repeat', $post_id);
        $activity_gallery_swiper = get_field('activity_repeet_item_images', $post_id);
        $activity_text_contents = get_field('activity_repeet_item_text_box', $post_id)

      ?>



        <div id="post-<?php echo $post_id ?>" class="section-activity-content__item">


          <div class="section-activity-content__item-top-wrapper">
            <?php
            get_template_part("template-parts/section-title-secondary", null, array('title' => get_the_title())) ?>




            <?php if (!empty($activity_distance_repeat)): ?>
              <?php foreach ($activity_distance_repeat as  $rowDistance) : ?>
                <div class="section-activity-content__item-distance-wrapper">

                  <?php if (!empty(get_field("distance_icon", "options")['url'])): ?>
                    <img width="24" height="24" src="<?php echo get_field("distance_icon", "options")['url'] ?>" alt="<?php echo get_field("distance_icon", "options")['alt'] ?>">
                  <?php endif ?>

                  <p><?php echo $rowDistance['from'] === true ? 'від' : '' ?> <?php echo $rowDistance['distance'] ?> <?php echo $rowDistance['select'] ?></p>
                </div>
              <?php endforeach ?>
            <?php endif ?>
          </div>



          <?php if (!empty($activity_gallery_swiper)): ?>
            <?php
            get_template_part('template-parts/images-activites-swiper', null, array('images' => $activity_gallery_swiper)); ?>
          <?php endif ?>

          <?php if (!empty($activity_text_contents)): ?>
            <div class="section-activity-content__item-content">
              <?php foreach ($activity_text_contents as $rowContent) : ?>
                <?php if (!empty(get_field("mountains_icon", "options")['url'])): ?>
                  <img class="section-activity-content__item-content-img" src="<?php echo get_field("mountains_icon", "options")['url'] ?>" alt="<?php echo get_field("mountains_icon", "options")['alt'] ?>">
                <?php endif ?>
                <div>
                  <p><?php echo $rowContent['text'] ?></p>
                </div>
              <?php endforeach ?>
            </div>
          <?php endif ?>

        </div>

      <?php endwhile;    ?>
    </section>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>
  <?php


  if (!empty($section_reserve_img)) {
    get_template_part("template-parts/section-reserve", null, ['image' => $section_reserve_img]);
  } else {
    get_template_part("template-parts/section-reserve", null,);
  }

  get_template_part("template-parts/feedbacks-section");
  get_template_part("template-parts/location-section");
  ?>

</main>

<?php get_footer(); ?>