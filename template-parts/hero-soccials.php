<?php
$facebook = get_field('facebook', 'option');
$instagram = get_field('instagram', 'option');
$telegram = get_field('telegram', 'option');
$viber = get_field('viber', 'option');
$whatsapp = get_field('whatsapp', 'options');


?>



<ul class="hero__socials">
  <?php if ($facebook) { ?>
    <li class="hero__socials--item">
      <a href="<?php echo esc_attr($facebook['url']); ?>"
        target="<?php echo esc_attr($facebook['target']); ?>" aria-label="Facebook">

        <?php get_template_part("./template-parts/social_icons", null, array('icon' => 'facebook')); ?>
      </a>
      <div class="hero__socials--title-wrap">
        <p class="hero__socials--title"><?php echo esc_attr($facebook['title']); ?></p>
      </div>
    </li>
  <?php } ?>
  <?php if ($instagram) { ?>
    <li class="hero__socials--item">
      <a href="<?php echo esc_attr($instagram['url']); ?>" target="<?php echo $instagram['target']; ?>"
        aria-label="instagram">

        <?php get_template_part("./template-parts/social_icons", null, array('icon' => 'instagram')); ?>
      </a>
      <div class="hero__socials--title-wrap">
        <p class="hero__socials--title"><?php echo esc_attr($instagram['title']); ?></p>
      </div>
    </li>
  <?php } ?>
  <?php if ($telegram) { ?>
    <li class="hero__socials--item">
      <a href="<?php echo esc_attr($telegram['url']); ?>" target="<?php echo $telegram['target']; ?>"
        aria-label="telegram">
        <?php get_template_part("./template-parts/social_icons", null, array('icon' => 'telegram')); ?>
      </a>
      <div class="hero__socials--title-wrap">
        <p class="hero__socials--title"><?php echo esc_attr($telegram['title']); ?></p>
      </div>
    </li>
  <?php } ?>
  <?php if ($viber) { ?>
    <li class="hero__socials--item">
      <a href="<?php echo esc_attr($viber['url']); ?>" target="<?php echo $viber['target']; ?>"
        aria-label="viber">
        <?php get_template_part("./template-parts/social_icons", null, array('icon' => 'viber')); ?>
      </a>
      <div class="hero__socials--title-wrap">
        <p class="hero__socials--title"><?php echo esc_attr($viber['title']); ?></p>
      </div>
    </li>
  <?php } ?>


  <?php if (!empty($whatsapp)): ?>
    <li class="hero__socials--item">
      <a href="<?php echo $whatsapp['url'] ?>" target="blank"
        aria-label="WhatsApp">
        <?php get_template_part("./template-parts/social_icons", null, array('icon' => 'whatsapp')); ?>
      </a>
      <div class="hero__socials--title-wrap">
        <p class="hero__socials--title">WhatsApp</p>
      </div>
    </li>
  <?php endif ?>
</ul>