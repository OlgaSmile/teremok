<?php
if (isset($args['title'])) {
  $title = $args['title'];
}
?>

<div class="section_title">
  <div class="section_title--icon_wrap">
    <div class="anim-items">
      <svg class="section_title--icon big">
        <use href="#big-tree">
        </use>
      </svg>
    </div>
  </div>
  <h2 class="section_title--text"><?php echo $title; ?></h2>
  <div class="section_title--icon_wrap">
    <div class="anim-items">
      <svg class="section_title--icon big">
        <use href="#big-tree">
        </use>
      </svg>
    </div>

  </div>
</div>