<?php
if (isset($args['title'])) {
    $title = $args['title'];
}
?>
<div class="section_title">
  <svg class="section_title--icon">
    <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#trees"></use>
  </svg>
  <h2 class="section_title--text"><?php echo $title ?></h2>
  <svg class="section_title--icon">
    <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#trees"></use>
  </svg>
</div>