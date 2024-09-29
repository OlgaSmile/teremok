<?php
$apartments_description = get_field('apartments_description');
$apartments_description_additional = get_field('apartments_description_additional');
$apartments_gallery = get_field('apartments_gallery');
$apartments_services = get_field('apartments_services');
?>

<article class="one-apartment">
    <div class="one-apartment__title anim-items">
        <svg class="one-apartment__title--icon">
            <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#home"></use>
        </svg>
        <h3><?php the_title();?></h3>
    </div>
    <?php if ($apartments_description) {?>
    <p class="one-apartment__description anim-items"><?php echo $apartments_description; ?></p>
    <?php }?>
    <?php if ($apartments_description_additional) {?>
    <p class="one-apartment__description one-apartment__description--additional anim-items">
        <?php echo $apartments_description_additional; ?></p>
    <?php }?>
    <?php if ($apartments_gallery) {?>
    <div class="swiper one-apartment__gallery">
        <div class="swiper-wrapper one-apartment__gallery--wrapper">
            <?php foreach ($apartments_gallery as $image): ?>
            <div class="swiper-slide one-apartment__gallery--slide">
                <img src="<?php echo esc_url($image['sizes']['medium_large']); ?>"
                    alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
            <?php endforeach;?>
        </div>
  <div class="one-apartment__title anim-items">
    <svg class="one-apartment__title--icon">
      <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#home"></use>
    </svg>
    <h3><?php the_title();?></h3>
  </div>
  <?php if ($apartments_description) {?>
    <p class="one-apartment__description anim-items"><?php echo $apartments_description; ?></p>
  <?php }?>
  <?php if ($apartments_description_additional) {?>
    <p class="one-apartment__description one-apartment__description--additional anim-items">
      <?php echo $apartments_description_additional; ?></p>
  <?php }?>
  <?php if ($apartments_gallery) {?>
    <div class="swiper one-apartment__gallery">
      <div class="swiper-wrapper one-apartment__gallery--wrapper">
        <?php foreach ($apartments_gallery as $image): ?>
          <div class="swiper-slide one-apartment__gallery--slide">
            <img src="<?php echo esc_url($image['sizes']['medium_large']); ?>"
              alt="<?php echo esc_attr($image['alt']); ?>" />
          </div>
        <?php endforeach;?>
      </div>

        <div class="one-apartment__navigation">
            <div class="custom-prev-icon one-apartment__navigation--prev">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="" xmlns="http://www.w3.org/2000/svg">
                    <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#left_arrow"></use>
                </svg>
            </div>
            <div class="custom-next-icon one-apartment__navigation--next">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="" xmlns="http://www.w3.org/2000/svg">
                    <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#left_arrow"></use>
                </svg>
            </div>
        </div>
    </div>
    <?php }?>
    <?php if ($apartments_services) {?>
    <div class="one-apartment__services">
        <?php foreach ($apartments_services as $row) {
    $image = $row['image'];
    $text = $row['text'];?>
        <div class="one-apartment__services--item">
            <?php echo wp_get_attachment_image($image, 'thumbnail'); ?>
            <p><?php echo $text; ?></p>
        </div>
        <?php
}?>
    </div>
    <div class="swiper one-apartment__services--mobile">
        <div class="swiper-wrapper one-apartment__services--wrapper">
            <?php foreach ($apartments_services as $row) {
    $image = $row['image'];
    $text = $row['text'];?>
            <div class="swiper-slide one-apartment__services--item">
                <?php echo wp_get_attachment_image($image, 'thumbnail'); ?>
                <p><?php echo $text; ?></p>
            </div>
            <?php
}?>
        </div>
    </div>
    <?php }?>
    <div class="one-apartment__learnmore learnmore_button">
        <a href="<?php the_permalink();?>">
            <?php the_field('learn_more', 'options');?></a>
        <svg class="learnmore_button--icon">
            <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#big_arrow"></use>
        </svg>
    </div>
      <!--   <div class="one-apartment__navigation"> </div> -->
      <div class="custom-prev-icon one-apartment__navigation--prev">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="" xmlns="http://www.w3.org/2000/svg">
          <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#left_arrow"></use>
        </svg>
      </div>
      <div class="custom-next-icon one-apartment__navigation--next">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="" xmlns="http://www.w3.org/2000/svg">
          <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#left_arrow"></use>
        </svg>
      </div>

      <div class="swiper-pagination feedbacks__swiper-pagination"></div>
    </div>
  <?php }?>
  <?php if ($apartments_services) {?>
    <div class="one-apartment__services">
      <?php foreach ($apartments_services as $row) {
    $image = $row['image'];
    $text = $row['text'];?>
        <div class="one-apartment__services--item">
          <?php echo wp_get_attachment_image($image, 'thumbnail'); ?>
          <p><?php echo $text; ?></p>
        </div>
      <?php
}?>
    </div>
    <div class="swiper one-apartment__services--mobile">
      <div class="swiper-wrapper one-apartment__services--wrapper">
        <?php foreach ($apartments_services as $row) {
    $image = $row['image'];
    $text = $row['text'];?>
          <div class="swiper-slide one-apartment__services--item">
            <?php echo wp_get_attachment_image($image, 'thumbnail'); ?>
            <p><?php echo $text; ?></p>
          </div>
        <?php
}?>
      </div>
    </div>
  <?php }?>
  <div class="one-apartment__learnmore learnmore_button">
    <a href="<?php the_permalink();?>">
      <?php the_field('learn_more', 'options');?></a>
    <svg class="learnmore_button--icon">
      <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#big_arrow"></use>
    </svg>
  </div>
</article>