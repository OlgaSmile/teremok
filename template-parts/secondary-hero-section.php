<?php
if (isset($args['img_array']) &&   $title = $args['title_section']) {
  $img = $args['img_array'];
  $title = $args['title_section'];
}

?>

<section class="secondary-hero-section">
  <?php
  if (!empty($img)) : ?>
    <img class="secondary-hero-section__img" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']) ? esc_attr($img['alt']) : 'hero image'; ?>" />
  <?php endif; ?>
  <h2 class="secondary-hero-section__title">
    <?php echo $title ?>
  </h2>
</section>