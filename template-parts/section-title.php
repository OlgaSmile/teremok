<?php
if (isset($args['title'])) {
    $title = $args['title'];
}
?>

<div class="section_title">
  <div class="section_title--icon_wrap">
    <div class="anim-items">
      <svg class="section_title--icon small">
        <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#tree">
        </use>
      </svg>
    </div>
    <div class="anim-items">
      <svg class="section_title--icon big">
        <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#big-tree">
        </use>
      </svg>
    </div>
    <div class="anim-items">
      <svg class="section_title--icon small">
        <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#tree">
        </use>
      </svg>
    </div>
  </div>
  <h2 class="section_title--text"><?php echo $title ?></h2>
  <div class="section_title--icon_wrap">
    <div class="anim-items">
      <svg class="section_title--icon small">
        <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#tree">
        </use>
      </svg>
    </div>
    <div class="anim-items">
      <svg class="section_title--icon big">
        <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#big-tree">
        </use>
      </svg>
    </div>
    <div class="anim-items">
      <svg class="section_title--icon small">
        <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#tree">
        </use>
      </svg>
    </div>
  </div>
</div>