<?php

$title = get_field('business_success_title');
$text = get_field('business_success_desc');
$business_rating_title = get_field('business_rating_title');
$business_rating_desc = get_field('business_rating_desc');
$business_rating_logo = get_field('business_rating_logo');
$business_rating_logo_link = get_field('business_rating_logo_link');
$business_rating_desc2 = get_field('business_rating_desc2');
$business_rating_rating_points = get_field('business_rating_rating_points');
$business_rating_desc3 = get_field('business_rating_desc3');
$business_rating_booking_link = get_field('business_rating_booking_link');
$business_kitchen_title = get_field('business_kitchen_title');
$business_kitchen_desc = get_field('business_kitchen_desc');

$business_autonomy_title = get_field('business_autonomy_title');
$business_autonomy_desc  = get_field('business_autonomy_desc');

$business_platforms_title = get_field('business_platforms_title');
$business_platforms_desc_top = get_field('business_platforms_desc-top');
$business_platforms = get_field('business_platforms');

$business_website_title = get_field('business_website_title');
$business_website_desc = get_field('business_website_desc');

$business_social_title = get_field('business_social_title');
$business_social_desc = get_field('business_social_desc');
$business_social_link_facebook = get_field('business_social_link_facebook');
$business_social_link_instagram = get_field('business_social_link_instagram');

$business_client_title = get_field('business_client_title');
$business_client_desc = get_field('business_client_desc');

$business_client_title_final = get_field('business_client_title_final')
?>


<section class="section-business-success">
  <?php if (!empty($title)): ?>
    <?php
    get_template_part("template-parts/section-title", null, array('title' => $title)) ?>

  <?php endif ?>
  <?php if (!empty($text)): ?>
    <p class="section-business-success__desc-top">
      <?php echo $text ?>
    </p>
  <?php endif ?>
  <div class="section-business-success__container">
    <?php if (!empty($business_rating_title)): ?>
      <h2 class="section-business-success__title">
        <?php echo $business_rating_title ?>
      </h2>

    <?php endif ?>
    <?php if (!empty($business_rating_desc)): ?>
      <p class="">
        <?php echo $business_rating_desc ?>
      </p>
    <?php endif ?>

    <?php if (!empty($business_rating_booking_link)): ?>
      <div class="section-business-success__logo-wrapper">
        <a href="<?php echo $business_rating_booking_link ?>" target="_blank">
          <?php get_template_part("template-parts/booking-icon"); ?>
        </a>
      </div>
    <?php endif ?>
    <?php if (!empty($business_rating_desc2)): ?>
      <div class="section-business-success__rating-desc"> <?php echo $business_rating_desc2 ?></div>
    <?php endif ?>
    <?php if (!empty($business_rating_rating_points)): ?>
      <div class="section-business-success__rating-points">
        <p> <?php echo $business_rating_rating_points ?></p>
      </div>
    <?php endif ?>
    <?php if (!empty($business_rating_desc3)): ?>
      <div class="section-business-success__rating-desc"> <?php echo $business_rating_desc3 ?></div>
    <?php endif ?>
  </div>

  <div class="section-business-success__container">
    <?php if (!empty($business_kitchen_title)): ?>
      <h2 class="section-business-success__title">
        <?php echo $business_kitchen_title ?>
      </h2>
    <?php endif ?>
    <?php if (!empty($business_kitchen_desc)): ?>
      <p class="">
        <?php echo $business_kitchen_desc ?>
      </p>
    <?php endif ?>
  </div>

  <div class="section-business-success__container">
    <?php if (!empty($business_autonomy_title)): ?>
      <h2 class="section-business-success__title">
        <?php echo $business_autonomy_title ?>
      </h2>
    <?php endif ?>
    <?php if (!empty($business_autonomy_desc)): ?>
      <p class="">
        <?php echo $business_autonomy_desc ?>
      </p>
    <?php endif ?>
  </div>

  <div class="section-business-success__container">
    <?php if (!empty($business_platforms_title)): ?>
      <h2 class="section-business-success__title">
        <?php echo $business_platforms_title ?>
      </h2>
    <?php endif ?>
    <?php if (!empty($business_platforms_desc_top)): ?>
      <p class="">
        <?php echo $business_platforms_desc_top ?>
      </p>
    <?php endif ?>


    <?php if (!empty($business_platforms)): ?>

      <ul class="business_platforms__list">
        <?php foreach ($business_platforms  as $index => $row): ?>
          <li>
            <a href="<?php echo esc_url($row['link']); ?>">
              <img src="<?php echo esc_url($row['logo']['url']); ?>" alt="<?php echo esc_attr($row['logo']['alt']); ?>">
            </a>
          </li>
        <?php endforeach ?>
      </ul>
    <?php endif ?>


  </div>

  <div class="section-business-success__container">
    <?php if (!empty($business_website_title)): ?>
      <h2 class="section-business-success__title">
        <?php echo $business_website_title ?>
      </h2>
    <?php endif ?>
    <?php if (!empty($business_website_desc)): ?>
      <p class="">
        <?php echo $business_website_desc ?>
      </p>
    <?php endif ?>

    <div class="section-business-success__logo-box-teremok">
      <a href="/" target="_blank">
        <?php get_template_part("template-parts/logo_business"); ?>

        <p>teremok-welcome.com</p>
      </a>

    </div>

  </div>


  <div class="section-business-success__container">
    <?php if (!empty($business_social_title)): ?>
      <h2 class="section-business-success__title">
        <?php echo $business_social_title ?>
      </h2>
    <?php endif ?>
    <?php if (!empty($business_social_desc)): ?>
      <p class="">
        <?php echo $business_social_desc ?>
      </p>
    <?php endif ?>

    <div class="section-business-success__logo-box">

      <?php if (!empty($business_social_link_facebook)): ?>
        <a href="<?php echo $business_social_link_facebook ?>" target="_blank">
          <?php get_template_part("template-parts/facebook-icon"); ?>
        </a>
      <?php endif ?>
      <?php if (!empty($business_social_link_instagram)): ?>
        <a href="<?php echo $business_social_link_instagram ?>" target="_blank">
          <?php get_template_part("template-parts/instagram-icon"); ?>
        </a>
      <?php endif ?>


    </div>
  </div>
  <div class="section-business-success__container">
    <?php if (!empty($business_client_title)): ?>
      <h2 class="section-business-success__title">
        <?php echo $business_client_title ?>
      </h2>
    <?php endif ?>
    <?php if (!empty($business_client_desc)): ?>
      <p class="">
        <?php echo $business_client_desc ?>
      </p>
    <?php endif ?>

    <?php get_template_part("template-parts/heart-icon-animate"); ?>
  </div>
  <?php if (!empty($business_client_title_final)): ?>
    <div class="section-business-success__final-title-wrapper">
      <?php
      get_template_part("template-parts/section-title", null, array('title' => $business_client_title_final)) ?>
    </div>
  <?php endif ?>
</section>