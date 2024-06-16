<?php
/**
 * @param 'find_more_btn' $variant
 *
 */

?>



<?php
if (isset($args['text'])) {
    $text = $args['text'];
}
if (isset($args['variant'])) {
    $variant = $args['variant'];
}
;?>


<button class="<?php echo $variant; ?>">
    <span class="<?php echo $variant; ?>__content"><?php echo $text; ?></span>
</button>