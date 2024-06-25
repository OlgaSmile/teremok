<?php
if (isset($args['btn_name'])) {
    $btn_name = $args['btn_name'];
}
?>
<!-- if you need a button with vertical arrow, wrap the temlate part with div.watchmore_button -->

<div class="readmore_button">
  <button type="button"><?php echo $btn_name ?></button>
  <div class="readmore_button--box">
    <div class="readmore_button--innerbox">
      <svg class="readmore_button--icon">
        <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#arrow_down_long"></use>
      </svg>
    </div>
  </div>
</div>