<?php

?>
<?php if (get_field('free_services_data', 'options')) : ?>
  <section class="free-services-section">
    <div class="free-services-section__title-wrapper">
      <?php
      get_template_part("template-parts/section-title", null, array('title' => get_field('free_service_title', 'option'))) ?>

    </div>
    <div class="free-services-section__wrapper">
      <ul class="services-section__free">

        <?php while (has_sub_field('free_services_data', 'options')) : ?>

          <li class="services-section__service-item">
            <img class="services-section__service-icon" src="<?php the_sub_field('free_services_icon', 'options'); ?>" />
            <div class="services-section__service-name">
              <?php the_sub_field('free_services_name', 'options'); ?>
            </div>
          </li>
        <?php endwhile; ?>

      </ul>
    </div>
  </section>
<?php endif; ?>