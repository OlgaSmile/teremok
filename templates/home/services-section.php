<section class="services-section">
  <div class="services-section__image"></div>

  <div class="services-section__container">
    <?php get_template_part("template-parts/section-title", null, array('title' => "послуги"));?>

    <div class="services-section__content">
      <h2 class="services-section__subtitle">Безкоштовні</h2>
      <ul class="services-section__free">
        <?php if (get_field('free_services')): ?>
        <?php while (has_sub_field('free_services')): ?>

        <li class="services-section__service-item">
          <img class="services-section__service-icon" src="<?php the_sub_field('free_services_icon');?>" />
          <div class="services-section__service-name">
            <?php the_sub_field('free_services_name');?>
          </div>
        </li>
        <?php endwhile;?>
        <?php endif;?>
      </ul>
    </div>

    <div class="services-section__content">
      <h2 class="services-section__subtitle">Додаткові</h2>
      <ul class="services-section__additional">
        <?php if (get_field('additional_service')): ?>
        <?php while (has_sub_field('additional_service')): ?>

        <li class="services-section__service-item services-section__service-item-additional">
          <img class="services-section__service-icon" src="<?php the_sub_field('additional_service_icon');?>" />
          <div class="services-section__service-name">
            <?php the_sub_field('additional_service_name');?>
          </div>
        </li>
        <?php endwhile;?>
        <?php endif;?>
      </ul>
    </div>

    <?php
        $learn_more = get_field('learn_more', 'options');
        get_template_part("template-parts/learn-more-btn", null, array('btn_name' => $learn_more));?>

  </div>
  <div class="services-section__image"></div>

</section>