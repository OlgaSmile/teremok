<?php

$title = get_field('business_infrastructure_title');
$infrastructures = get_field('business_infrastructures')

?>


<section class="section-infrastructure">
  <?php if (!empty($title)): ?>
    <?php
    get_template_part("template-parts/section-title", null, array('title' => $title)) ?>

  <?php endif ?>
  <?php if (!empty($infrastructures)): ?>
    <ul class="section-infrastructure__list">
      <?php foreach ($infrastructures as $index => $row): ?>
        <li class="section-infrastructure__item">
          <img src="<?php echo get_field('tree_green', 'options')['url'] ?>" alt="">
          <p>
            <?php echo $row['desc'] ?>
          </p>
        </li>
      <?php endforeach ?>
    </ul>
  <?php endif ?>
</section>