<?php

?>
<?php if (get_field('free_services_data', 'options')) : ?>
  <section class="free-services-section">
    <img class="free-services-section__item-decor-1-position-t" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>">
    <img class="free-services-section__item-decor-1-position-b" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>">
    <div class="free-services-section__title-wrapper">
      <?php
      get_template_part("template-parts/section-title", null, array('title' => get_field('free_service_title', 'option'))) ?>

    </div>

    <div class="free-services-section__wrapper">

      <ul class="services-section__free">

        <?php while (has_sub_field('free_services_data', 'options')) : ?>

          <li class="services-section__service-item">
            <?php $free_img = get_sub_field('free_services_icon'); ?>
            <?php get_template_part('template-parts/facilities_icon', null, array('img' => $free_img)); ?>
            <div class="services-section__service-name">
              <?php the_sub_field('free_services_name', 'options'); ?>
            </div>
          </li>
        <?php endwhile; ?>

      </ul>
    </div>
  </section>
<?php endif; ?>