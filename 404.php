<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wp-teremok
 */

$title_404 = get_field('title_404', 'options');
$text_404_top = get_field('text_404_top', 'options');
$text_404_bottom = get_field('text_404_bottom', 'options');
$image = get_field('Image_404', 'options');

get_header();
?>

<main>

  <section class="error-404">
    <?php if (!empty($image)): ?>
      <img src="<?php echo $image['url'] ?>" />
    <?php endif ?>
    <div class="error-404__wrapper">

      <h2><?php echo $title_404 ? $title_404 : '404' ?></h2>
      <div class="error-404__wrapper-content-box">
        <svg width="34" height="56" viewBox="0 0 34 56" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M17 56V0" stroke="#99B7A2" stroke-width="2.4" />
          <path d="M17 0.414062C15.9543 4.53369 12.3256 12.8032 6.17654 12.9242M17 17.194C15.7974 21.0583 11.3216 28.5429 3.03925 27.5666M17 35.4986C14.0719 39.8205 6.77253 47.9763 1 46.0238" stroke="#99B7A2" stroke-width="2.4" />
          <path d="M17 0.414062C18.0457 4.53369 21.6744 12.8032 27.8235 12.9242M17 17.194C18.2026 21.0583 22.6784 28.5429 30.9608 27.5666M17 35.4986C19.9281 39.8205 27.2275 47.9763 33 46.0238" stroke="#99B7A2" stroke-width="2.4" />
        </svg>

        <div>
          <div class="text-box">
            <?php if (!empty($text_404_top)): ?>
              <p> <?php echo $text_404_top ?></p>
            <?php endif ?>
          </div>



          <div class="text-box-bottom">
            <?php if (!empty($text_404_bottom)): ?>
              <p> <?php echo $text_404_bottom ?></p>
            <?php endif ?>
          </div>


        </div>
        <svg width="34" height="56" viewBox="0 0 34 56" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M17 56V0" stroke="#99B7A2" stroke-width="2.4" />
          <path d="M17 0.414062C15.9543 4.53369 12.3256 12.8032 6.17654 12.9242M17 17.194C15.7974 21.0583 11.3216 28.5429 3.03925 27.5666M17 35.4986C14.0719 39.8205 6.77253 47.9763 1 46.0238" stroke="#99B7A2" stroke-width="2.4" />
          <path d="M17 0.414062C18.0457 4.53369 21.6744 12.8032 27.8235 12.9242M17 17.194C18.2026 21.0583 22.6784 28.5429 30.9608 27.5666M17 35.4986C19.9281 39.8205 27.2275 47.9763 33 46.0238" stroke="#99B7A2" stroke-width="2.4" />
        </svg>

      </div>

      <a href="<?php echo home_url() ?>">На Головну</a>
    </div>
  </section>

</main>

<?php
get_footer();
