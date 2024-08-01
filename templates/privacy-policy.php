<?php
/*
Template Name: privacy policy 
 */

$desc = get_field('privacy_policy_desc');


$privacy_policy_hero = get_field('privacy_policy_hero');
get_header();
?>
<main class="privacy-policy-main">
  <?php
  if (!empty($privacy_policy_hero)) {
    get_template_part("template-parts/secondary-hero-section", null, ['img_array' => $privacy_policy_hero, "title_section" => 'Політика конфіденційності']);
  }
  ?>
  <section class="privacy-policy-section">
    <h2 class="privacy-policy-section__title"><?php the_title() ?></h2>
    <div class="privacy-policy-content">
      <?php echo $desc ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>