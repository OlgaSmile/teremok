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

<section class="section hero__section">

  <div id="enter-parallax">
    <div class="enter-parallax-bg hero__bg hero__bg--main">
      <?php echo wp_get_attachment_image( $main_bg, 'large'); ?>
    </div>
    <div class="enter-parallax-bg hero__bg hero__bg--secondary">
      <?php echo wp_get_attachment_image( $secondary_bg, 'large'); ?>
    </div>
    <div class="enter-parallax-bg hero__bg hero__bg--third">
      <?php echo wp_get_attachment_image( $third_bg, 'large'); ?>
    </div>
    <div class="enter-parallax-bg hero__bg hero__bg--fourth">
      <?php echo wp_get_attachment_image( $fourth_bg, 'large'); ?>
    </div>
    <div class="enter-parallax-bg hero__bg hero__title">
      <img src="<?php echo esc_url($title_bg['sizes']['medium_large']); ?>"
        alt="<?php echo esc_attr($title_bg['alt']); ?>" />
    </div>
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
        <a class="" href="<?php echo esc_attr($facebook ); ?>" target="_blank" aria-label="Facebook">
          <svg class="" width="28" height="28">
            <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#facebook"></use>
          </svg>
        </a>
      </li>
      <?php } ?>

      <?php if($instagram) { ?>
      <li class="">
        <a class="" href="<?php echo esc_attr($instagram ); ?>" target="_blank" aria-label="instagram">
          <svg class="" width="28" height="28">
            <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#instagram"></use>
          </svg>
        </a>
      </li>
      <?php } ?>

      <?php if($telegram) { ?>
      <li class="">
        <a class="" href="<?php echo esc_attr($telegram ); ?>" target="_blank" aria-label="telegram">
          <svg class="" width="28" height="28">
            <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#telegram"></use>
          </svg>
        </a>
      </li>
      <?php } ?>

      <?php if($viber) { ?>
      <li class="viber_item">
        <a class="" href="<?php echo esc_attr($viber ); ?>" target="_blank" aria-label="viber">
          <svg class="hero__socials--viber" viewBox="0 0 32 32">
            <path stroke="" style=""
              d="M17.048 11.587c0.009-0.175 0.159-0.31 0.334-0.301 0.656 0.034 1.202 0.233 1.591 0.635 0.387 0.401 0.577 0.96 0.611 1.632 0.009 0.175-0.127 0.325-0.302 0.333s-0.325-0.126-0.333-0.302c-0.029-0.575-0.186-0.967-0.433-1.222-0.245-0.253-0.618-0.413-1.167-0.442-0.175-0.009-0.31-0.159-0.301-0.334z">
            </path>
            <path stroke="" style=""
              d="M16.906 9.58c-0.175-0.013-0.328 0.119-0.34 0.294s0.119 0.328 0.294 0.34c1.211 0.089 2.121 0.494 2.771 1.204 0.653 0.713 0.973 1.602 0.949 2.691-0.004 0.176 0.136 0.321 0.311 0.325s0.321-0.135 0.325-0.311c0.027-1.235-0.341-2.288-1.116-3.134l-0-0c-0.783-0.855-1.858-1.311-3.194-1.409z">
            </path>
            <path stroke="" style=""
              d="M16.004 8.245c0.001-0.176 0.145-0.317 0.32-0.316 1.846 0.013 3.406 0.627 4.659 1.849 1.263 1.231 1.888 2.908 1.904 4.99 0.001 0.176-0.14 0.319-0.316 0.321s-0.319-0.14-0.32-0.316c-0.015-1.951-0.595-3.451-1.712-4.539-1.127-1.098-2.526-1.656-4.219-1.668-0.176-0.001-0.317-0.145-0.316-0.32z">
            </path>
            <path stroke="" style=""
              d="M18.116 17.57c-0.241 0.297-0.688 0.259-0.688 0.259-3.268-0.834-4.142-4.144-4.142-4.144s-0.039-0.447 0.259-0.688l0.591-0.469c0.293-0.226 0.48-0.773 0.181-1.308-0.229-0.401-0.477-0.791-0.745-1.167-0.26-0.355-0.866-1.082-0.868-1.084-0.292-0.344-0.722-0.424-1.174-0.189-0.001 0-0.003 0.001-0.005 0.001s-0.003 0.001-0.004 0.001c-0.45 0.259-0.856 0.589-1.203 0.976-0.001 0.002-0.002 0.004-0.004 0.005s-0.002 0.002-0.003 0.004c-0.28 0.338-0.44 0.668-0.48 0.993-0.008 0.048-0.011 0.096-0.009 0.145-0.002 0.143 0.020 0.286 0.065 0.422l0.015 0.011c0.141 0.501 0.494 1.336 1.262 2.727 0.439 0.805 0.945 1.571 1.513 2.291 0.285 0.361 0.59 0.705 0.914 1.030 0.004 0.004 0.008 0.008 0.012 0.012 0.008 0.008 0.015 0.015 0.023 0.023l0.104 0.104c0.326 0.324 0.67 0.629 1.030 0.914 0.72 0.568 1.486 1.074 2.291 1.513 1.391 0.767 2.226 1.121 2.727 1.262l0.011 0.016c0.136 0.044 0.279 0.066 0.422 0.065 0.048 0.002 0.097-0.001 0.145-0.009 0.325-0.038 0.655-0.198 0.992-0.48 0.004-0.002 0.004-0.004 0.009-0.007 0.387-0.347 0.717-0.753 0.977-1.203 0-0.001 0-0.002 0.001-0.004s0.001-0.004 0.001-0.006c0.236-0.453 0.156-0.882-0.191-1.174-0 0-0.029-0.023-0.077-0.063-0.196-0.162-0.722-0.595-1.008-0.805-0.376-0.268-0.765-0.516-1.166-0.745-0.535-0.298-1.081-0.111-1.308 0.181l-0.469 0.59z">
            </path>
            <path stroke="" style=""
              d="M25.725 5.881c-0.625-0.577-3.15-2.409-8.774-2.434 0 0-6.632-0.4-9.865 2.566-1.8 1.8-2.433 4.434-2.5 7.7s-0.153 9.385 5.746 11.045h0.006l-0.004 2.532c0 0-0.038 1.025 0.637 1.234 0.681 0.212 1.128-0.296 1.71-0.958 0.115-0.131 0.236-0.269 0.365-0.407 0.428-0.461 1.019-1.138 1.464-1.656 4.035 0.34 7.137-0.437 7.49-0.551 0.073-0.024 0.176-0.050 0.303-0.082v0c1.303-0.331 5.188-1.319 5.87-6.892 0.774-6.307-0.374-10.297-2.449-12.095zM26.408 17.524c-0.57 4.601-3.657 5.319-4.77 5.578l-0 0c-0.123 0.029-0.222 0.052-0.29 0.074-0.293 0.094-3.018 0.772-6.445 0.549 0 0-2.553 3.081-3.351 3.882-0.125 0.125-0.271 0.176-0.369 0.151-0.137-0.034-0.175-0.196-0.174-0.434 0.002-0.34 0.022-4.208 0.022-4.208-4.825-1.34-4.713-6.254-4.649-9.043v-0c0.002-0.095 0.004-0.188 0.006-0.278 0.057-2.728 0.569-4.962 2.091-6.465 2.735-2.477 8.368-2.107 8.368-2.107 4.757 0.021 7.037 1.453 7.566 1.933 1.755 1.503 2.649 5.099 1.996 10.367v0.002z">
            </path>

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