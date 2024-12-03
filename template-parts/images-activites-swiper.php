<?php
if (isset($args['images'])) {
  $activity_gallery_swiper = $args['images'];
  $is_mobile = $args['mobile'] ?? false; // Додано перевірку на існування аргументу 'mobile'
}
?>

<?php if ($is_mobile && count($activity_gallery_swiper) > 1): ?>
  <div class="swiper section-activity-content__gallery">
    <div class="swiper-wrapper section-activity-content__gallery--wrapper">
      <?php foreach ($activity_gallery_swiper as $image): ?>
        <div class="swiper-slide section-activity-content__gallery--slide">
          <img src="<?php echo esc_url($image['sizes']['medium_large']); ?>"
            alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
      <?php endforeach; ?>
    </div>

    <div class="custom-prev-icon one-apartment__navigation--prev">
      <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#left_arrow"></use>
      </svg>
    </div>
    <div class="custom-next-icon one-apartment__navigation--next">
      <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#left_arrow"></use>
      </svg>
    </div>

    <div class="swiper-pagination feedbacks__swiper-pagination"></div>
  </div>
<?php elseif ($activity_gallery_swiper && count($activity_gallery_swiper) > 3): ?>
  <div class="swiper section-activity-content__gallery">
    <div class="swiper-wrapper section-activity-content__gallery--wrapper">
      <?php foreach ($activity_gallery_swiper as $image): ?>
        <div class="swiper-slide section-activity-content__gallery--slide">
          <img src="<?php echo esc_url($image['sizes']['medium_large']); ?>"
            alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
      <?php endforeach; ?>
    </div>

    <div class="custom-prev-icon one-apartment__navigation--prev">
      <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#left_arrow"></use>
      </svg>
    </div>
    <div class="custom-next-icon one-apartment__navigation--next">
      <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#left_arrow"></use>
      </svg>
    </div>

    <div class="swiper-pagination feedbacks__swiper-pagination"></div>
  </div>
<?php else: ?>
  <div class="section-activity-content__no-swiper-wrapper">
    <?php foreach ($activity_gallery_swiper as $image): ?>
      <div class="swiper-slide section-activity-content__gallery--slide">
        <img src="<?php echo esc_url($image['sizes']['medium_large']); ?>"
          alt="<?php echo esc_attr($image['alt']); ?>" />
      </div>
    <?php endforeach; ?>
  </div>
<?php endif; ?>