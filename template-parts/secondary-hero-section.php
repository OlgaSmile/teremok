<?php
if (isset($args['btn_name'])) {
  $img = $args['img'];
  $title = $args['title'];
}

?>

<section class="secondary-hero-section">
  <?php
  $image = get_field('image');
  if (!empty($img)) : ?>
    <img class="secondary-hero-section__img" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']) ? esc_attr($img['alt']) : 'hero image'; ?>" />
  <?php endif; ?>
  <h2 class="secondary-hero-section__title">
    <?php echo $title ?>
  </h2>
</section>