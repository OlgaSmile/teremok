<?php
$repeater_field = get_field('free_services', 'home');

$title = get_field('apartments_title', 'options')
?>

<section class="free-services-section">
  <h1>feedback_title => <?php echo $title ?></h1>
  <div class="free-services-section__wrapper">
    <?php if ($repeater_field) : ?>
      <h2>Our Free Services</h2>
      <ul>
        <?php foreach ($repeater_field as $row) : ?>
          <li class="">
            <?php if (!empty($row['free_services_icon'])) : ?>
              <img class="teremok-section__img" src="<?php echo esc_url($row['free_services_icon']['url']); ?>" alt="">
            <?php endif; ?>
            <?php if (!empty($row['free_services_name'])) : ?>
              <h3><?php echo esc_html($row['free_services_name']); ?></h3>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php else : ?>
      <p>No services found.</p>
    <?php endif; ?>
  </div>
</section>