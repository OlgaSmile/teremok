<?php

$title = get_field('business_desc_title');

$desc = get_field('business_desc');
$house = get_field('business_houses')

?>

<section class="section-business-description">

  <?php if (!empty($title)): ?>
    <?php
    get_template_part("template-parts/section-title", null, array('title' => $title)); ?>
  <?php endif; ?>



  <div class="section-business-description__desc">
    <p><?php echo $desc ?></p>
  </div>

  <?php if (!empty($house)): ?>
    <ul class="houses-list">
      <?php foreach ($house as  $index => $row): ?>
        <li class="houses-list__item">
          <?php if ($index === 0): ?>

            <img class="activity-nearby__decor-1" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees1.png'; ?>">
            <img class="activity-nearby__decor-2" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>">
          <?php endif ?>

          <?php if ($index === 2): ?>
            <img class="section-activity__decor2" src="<?php echo get_template_directory_uri() . '/assets/images/decor-branch.png'; ?>">

          <?php endif ?>

          <?php if ($index === 3): ?>
            <img class="bussines-item__decor" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>">

          <?php endif ?>

          <?php if ($index === 5): ?>
            <img class="activities-main__decor-1" src="<?php echo get_template_directory_uri() . '/assets/images/decor-branch-left.png'; ?>">

            <img class="bussines-item__decor2" src="<?php echo get_template_directory_uri() . '/assets/images/decor-trees2.png'; ?>">
          <?php endif ?>

          <div class="houses-list__item-top-content">
            <h2 class="houses-list__title"><?php echo $row['house_name'] ?></h2>
            <p><?php echo $row['house_desc'] ?></p>
            <?php if (!empty($desc)): ?>
              <div class="houses-list__detalies-wrapper">
                <?php foreach ($row['house_detalies'] as $detalie): ?>
                  <div class="houses-list__detalies-item">
                    <img src="<?php echo $detalie['icon']['url'] ?>" alt="">
                    <p><?php echo $detalie['detalie'] ?></p>

                  </div>


                <?php endforeach ?>
              </div>
            <?php endif; ?>

          </div>
          <?php if (!empty($row["images"])): ?>
            <div class="houses-list__images-wrapper">
              <div class="houses-list__images-wrapper-content">
                <?php foreach ($row["images"] as $index => $image) : ?>
                  <div class="houses-list__images-wrapper-content-img-wrapper">
                    <img src="<?php echo esc_attr($image['url']); ?>" alt="<?php echo esc_attr($image['alt'] ? $image['alt'] : 'Галерея'); ?>" />
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endif; ?>

        </li>
      <?php endforeach ?>
    </ul>
  <?php endif; ?>
</section>