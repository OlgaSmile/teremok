<?php

$title = get_field('business_advantages_title');
$text = get_field('business_advantages_desc');
$business_advantages = get_field('business_advantages')
?>


<section class="section-advantages">
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
          <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.96569 13.4697L3.70078 8.63929C3.14783 7.8212 1.89703 7.99129 1.58262 8.92733C1.47758 9.24006 1.5068 9.58233 1.66332 9.87272L6.93299 19.6495C7.67812 21.0319 9.65286 21.0555 10.4309 19.6913L20.1309 2.68263C20.3938 2.22167 20.3064 1.6406 19.9196 1.27734C19.4004 0.789757 18.5671 0.887848 18.1753 1.48266L10.2929 13.4499C9.50829 14.6412 7.76449 14.6516 6.96569 13.4697Z" fill="#43CA69" stroke="#43CA69" />
          </svg>

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