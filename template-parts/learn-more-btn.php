<?php
if (isset($args['btn_name'])) {
    $btn_name = $args['btn_name'];
}
?>

<div class="learnmore_button">
  <button type="button"><?php echo $btn_name ?></button>
  <svg class="learnmore_button--icon">
    <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#big_arrow"></use>
  </svg>
</div>