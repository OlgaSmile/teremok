<?php

$img_gallery_1 = get_field('img_gallery_1');
$img_gallery_2 = get_field('img_gallery_2');
$img_gallery_3 = get_field('img_gallery_3');
$img_gallery_4 = get_field('img_gallery_4');
$img_gallery_5 = get_field('img_gallery_5');
$img_gallery_6 = get_field('img_gallery_6');
$img_gallery_7 = get_field('img_gallery_7');

?>
<section class="section-gallery">

  <div class="masonry">
    <?php if (!empty($img_gallery_1)) : ?>
      <div class="masonry-item masonry-item-size2"><img src="<?php echo esc_attr($img_gallery_1['url']) ?>" alt="<?php echo esc_attr($img_gallery_1['alt']); ?>" /></div>
    <?php endif; ?>
    <?php if (!empty($img_gallery_2)) : ?>
      <div class="masonry-item"><img src="<?php echo esc_attr($img_gallery_2['url']) ?>" alt="<?php echo esc_attr($img_gallery_2['alt']); ?>" /></div>
    <?php endif; ?>
    <?php if (!empty($img_gallery_3)) : ?>
      <div class="masonry-item masonry-item-size2"><img src="<?php echo esc_attr($img_gallery_3['url']) ?>" alt="<?php echo esc_attr($img_gallery_3['alt']); ?>" /></div>
    <?php endif; ?>
    <?php if (!empty($img_gallery_4)) : ?>
      <div class="masonry-item"><img src="<?php echo esc_attr($img_gallery_4['url']) ?>" alt="<?php echo esc_attr($img_gallery_4['alt']); ?>" /></div>
    <?php endif; ?>
    <?php if (!empty($img_gallery_5)) : ?>
      <div class="masonry-item masonry-item-height"><img src="<?php echo esc_attr($img_gallery_5['url']) ?>" alt="<?php echo esc_attr($img_gallery_5['alt']); ?>" /></div>
    <?php endif; ?>
    <?php if (!empty($img_gallery_6)) : ?>
      <div class="masonry-item "><img src="<?php echo esc_attr($img_gallery_6['url']) ?>" alt="<?php echo esc_attr($img_gallery_6['alt']); ?>" /></div>
    <?php endif; ?>
    <?php if (!empty($img_gallery_7)) : ?>
      <div class="masonry-item masonry-item-height "><img src="<?php echo esc_attr($img_gallery_7['url']) ?>" alt="<?php echo esc_attr($img_gallery_7['alt']); ?>" /></div>
    <?php endif; ?>


  </div>

  <div class="masonry-mobile">
    <?php if (!empty($img_gallery_1)) : ?>
      <div class="masonry-mobile-item"><img src="<?php echo esc_attr($img_gallery_1['url']) ?>" alt="<?php echo esc_attr($img_gallery_1['alt']); ?>" /></div>
    <?php endif; ?>
    <?php if (!empty($img_gallery_2)) : ?>
      <div class="masonry-mobile-item"><img src="<?php echo esc_attr($img_gallery_2['url']) ?>" alt="<?php echo esc_attr($img_gallery_2['alt']); ?>" /></div>
    <?php endif; ?>
    <?php if (!empty($img_gallery_4)) : ?>
      <div class="masonry-mobile-item masonry-mobile-item---height masonry-mobile-item-width2"><img src="<?php echo esc_attr($img_gallery_4['url']) ?>" alt="<?php echo esc_attr($img_gallery_4['alt']); ?>" /></div>
    <?php endif; ?>
    <?php if (!empty($img_gallery_6)) : ?>
      <div class="masonry-mobile-item masonry-mobile-item---long sizer"><img src="<?php echo esc_attr($img_gallery_6['url']) ?>" alt="<?php echo esc_attr($img_gallery_6['alt']); ?>" /></div>
    <?php endif; ?>
    <?php if (!empty($img_gallery_7)) : ?>
      <div class="masonry-mobile-item masonry-mobile-item-width2 masonry-mobile-item-height2 "><img src="<?php echo esc_attr($img_gallery_7['url']) ?>" alt="<?php echo esc_attr($img_gallery_7['alt']); ?>" /></div>
    <?php endif; ?>
    <?php if (!empty($img_gallery_3)) : ?>
      <div class="masonry-mobile-item"><img src="<?php echo esc_attr($img_gallery_3['url']) ?>" alt="<?php echo esc_attr($img_gallery_3['alt']); ?>" /></div>
    <?php endif; ?>
    <?php if (!empty($img_gallery_5)) : ?>
      <div class="masonry-mobile-item"><img src="<?php echo esc_attr($img_gallery_5['url']) ?>" alt="<?php echo esc_attr($img_gallery_5['alt']); ?>" /></div>
    <?php endif; ?>
  </div>


</section>