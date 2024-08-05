<?php

$image = get_field('find_and_book_image', 'options');


?>


<?php if (!empty($image)) : ?>
  <section class="reserve-section">

    <div class="reserve-section__wrapper">

      <img src="<?php echo $image['url']  ?>" alt="<?php echo $image['alt']  ?>">

      <div class="reserve-section__position-box-reserve">
        <?php get_template_part("template-parts/search-reserv")  ?>
      </div>
    </div>
  </section>


<?php endif ?>