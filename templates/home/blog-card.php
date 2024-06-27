<?php
if (isset($args['blog'])) {
    $blog = $args['blog'];
}
?>


<div class="blog-card">
  <img class="blog-card__image" src="<?php the_field('blog_image', $blog->ID);?>">
  <h2 class="blog-card__title"> <?php the_title();?><?php the_field('title', $blog->ID);?></h2>
  <p class="blog-card__text"> <?php the_content();?></p>
  <div class="blog-card__read-more-btn">
    <div class="watchmore_button">
      <?php
      $read_more = get_field('read_more', 'options');
      get_template_part( "template-parts/read-more-btn", null, ['btn_name' => $read_more ]); ?>
    </div>
  </div>

</div>