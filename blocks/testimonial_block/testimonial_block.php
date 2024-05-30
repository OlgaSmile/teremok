<?php

// Create class attribute allowing for custom "className" and "align" values.
$className = 'testimonial_block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$testimonial_title = get_field('testimonial_title');

?>

<section class="section">
  <div class="container">
    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> block-js">

      <?php  
    get_template_part( "template-parts/section-title", null, array('title' => $testimonial_title )); ?>

      <!-- <?php acf_form('new-feedback'); ?> -->

    </div>
  </div>
</section>