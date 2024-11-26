<?php
/*
Template Name: ?step=booking
 */

get_header();


$reservation_confirmed_text = get_field('reservation_confirmed_text');
$main_link = get_field('main_page_link', 'options')
?>

<main class="reservation-confirmed">


  <div class="reservation-confirmed__wrapper">

    <div class="feedback-response__modal-title">
      <?php
      $thanks_feedback = get_field('thanks-feedback', 'options');

      get_template_part("template-parts/section-title", null, ['title' => $thanks_feedback]); ?>
    </div>
    <?php if (!empty($reservation_confirmed_text)): ?>
      <h3 id="positive-response"><?php echo $reservation_confirmed_text ?></h3>
    <?php endif ?>
    <?php if (!empty($main_link)): ?>
      <a class="secondary_button booking_btn-footer" href="<?php echo home_url() ?>"><?php echo $main_link ?></a>
    <?php endif ?>
    <div class="feedback-response__logo">
      <?php get_template_part("template-parts/logo_footer"); ?>
    </div>
  </div>



</main>
<script>
  const header = window.document.querySelector('.header')
  header.classList.add('header__active')
</script>

<?php get_footer(); ?>