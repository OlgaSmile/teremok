<?php $collage = get_field('collage'); ?>
<section class="photo-collage-section">
  <?php if (!empty($collage)) : ?>
    <div class="container-collage">
      <div class="collage">
        <?php foreach ($collage as $index => $image) : ?>
          <img class="collage__img" src="<?php echo esc_attr($image['url']); ?>" alt="<?php echo esc_attr(!empty($image['alt']) ? $image['alt'] : 'Колаж'); ?>" />

        <?php endforeach; ?>
      </div>
    </div>
  <?php endif ?>
</section>