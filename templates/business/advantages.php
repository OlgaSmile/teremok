<?php

$title = get_field('business_advantages_title');
$text = get_field('business_advantages_desc');
$business_advantages = get_field('business_advantages')
?>


<section class="section-advantages">
  <img class="activities-main__decor-1" src="<?php echo get_template_directory_uri() . '/assets/images/decor-branch-left.png'; ?>">

  <img class="activity-nearby__decor-1" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees1.png'; ?>">
  <img class="activity-nearby__decor-2" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>">
  <?php if (!empty($title)): ?>
    <?php
    get_template_part("template-parts/section-title", null, array('title' => $title)) ?>

  <?php endif ?>
  <?php if (!empty($text)): ?>
    <p class="section-advantages__desc">
      <?php echo $text ?>
    </p>
  <?php endif ?>

  <?php if (!empty($business_advantages)): ?>
    <ul class="section-advantages__list">
      <?php foreach ($business_advantages as $index => $row): ?>
        <li class="section-advantages__item">
          <img src="<?php echo get_field('confirm_icon', 'options')['url'] ?>" alt="">

          <div>
            <?php if (!empty($row['desc'])): ?>
              <?php echo apply_filters('acf_the_content', $row['desc']); ?>
            <?php endif; ?>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif ?>
</section>