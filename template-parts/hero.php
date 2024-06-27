<?php
$main_bg = get_field('main_bg');
$secondary_bg = get_field('secondary_bg');
$third_bg = get_field('third_bg');
$fourth_bg = get_field('fourth_bg');
$title_bg = get_field('title_bg');

$hero_subtitle = get_field('hero_subtitle');
$location = get_field('location');

//socials
$facebook = get_field('facebook', 'option');
$instagram = get_field('instagram', 'option');
$telegram = get_field('telegram', 'option');
$viber = get_field('viber', 'option');
?>

<section class="hero__section">
  <div id="enter-parallax">
    <?php if($fourth_bg) {?>
    <div class="enter-parallax-bg hero__bg hero__bg--fourth">
      <?php echo wp_get_attachment_image( $fourth_bg, 'large'); ?>
    </div>
    <?php } ?>
    <?php if($third_bg) {?>
    <div class="enter-parallax-bg hero__bg hero__bg--third">
      <?php echo wp_get_attachment_image( $third_bg, 'medium_large'); ?>
    </div>
    <?php } ?>
    <?php if($main_bg) {?>
    <div class="enter-parallax-bg hero__bg hero__bg--main">
      <?php echo wp_get_attachment_image( $main_bg, 'medium_large'); ?>
    </div>
    <?php } ?>
    <?php if($secondary_bg) {?>
    <div class="enter-parallax-bg hero__bg hero__bg--secondary">
      <?php echo wp_get_attachment_image( $secondary_bg, 'medium_large'); ?>
    </div>
    <?php } ?>
    <?php if($title_bg) {?>
    <div class="enter-parallax-bg hero__bg hero__title">
      <img src="<?php echo esc_url($title_bg['sizes']['medium_large']); ?>"
        alt="<?php echo esc_attr($title_bg['alt']); ?>" />
    </div>
    <?php } ?>
  </div>
  <div class="hero__content">
    <div class="hero__location">
      <svg width="24" height="24">
        <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#point_map"></use>
      </svg>
      <p><?php if($location) echo $location; ?></p>
    </div>
    <div class="hero__route">
      <svg class="hero__route--one" width="14" height="14">
        <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#point_map"></use>
      </svg>
      <svg class="hero__route--two" width="18" height="18">
        <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#point_map"></use>
      </svg>
      <svg class="hero__route--line" viewBox="0 0 732 117" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M0.234375 28.2136L117.35 0.878906L181.622 28.2136L244.465 10.4448L384.433 76.0515L548.682 10.4448L730.853 115.923"
          stroke="white" />
      </svg>
    </div>
    <ul class="hero__socials">
      <?php if($facebook) { ?>
      <li class="">
        <a class="" href="<?php echo esc_attr($facebook['url'] ); ?>"
          target="<?php echo esc_attr($facebook['target'] ); ?>" aria-label="Facebook">
          <svg class="" width="28" height="28">
            <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#facebook"></use>
          </svg>
        </a>
      </li>
      <?php } ?>
      <?php if($instagram) { ?>
      <li class="">
        <a class="" href="<?php echo esc_attr($instagram['url']); ?>" target="<?php echo $instagram['target']; ?>"
          aria-label="instagram">
          <svg class="" width="28" height="28">
            <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#instagram"></use>
          </svg>
        </a>
      </li>
      <?php } ?>
      <?php if($telegram) { ?>
      <li class="">
        <a class="" href="<?php echo esc_attr($telegram['url']); ?>" target="<?php echo $telegram['target']; ?>"
          aria-label="telegram">
          <svg class="" width="28" height="28">
            <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#telegram"></use>
          </svg>
        </a>
      </li>
      <?php } ?>
      <?php if($viber) { ?>
      <li class="viber_item">
        <a class="" href="<?php echo esc_attr($viber['url']); ?>" target="<?php echo $viber['target']; ?>"
          aria-label="viber">
          <svg class="hero__socials--viber" width="28" height="28">
            <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#viber">
            </use>
          </svg>
        </a>
      </li>
      <?php } ?>
    </ul>
    <div class="hero__cta">
      <p class="hero__subtitle"><?php if($hero_subtitle) echo $hero_subtitle; ?></p>
    </div>
  </div>
</section>