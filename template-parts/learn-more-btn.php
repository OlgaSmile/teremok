<?php
if (isset($args['btn_name'])) {
    $btn_name = $args['btn_name'];
    $link = $args['link_name'];
}
?>

<div class="learnmore_button">
    <a href="<?php echo $link; ?>"><?php echo $btn_name ?></a>
    <svg class="learnmore_button--icon">
        <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#big_arrow"></use>
    </svg>
</div>