<div class="feedback__backdrop is-hidden" id="js-feedback-form">

  <div class="feedback__modal">

    <button class="feedback__modal-close" type="button" id="js-close-feedback-form" aria-label="Close modal">
      <svg class="icon__cross" width="32" height="32" viewBox="0 0 32 32" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path d="M1.28125 30.3381L30.2443 1.375M30.7212 30.3381L1.75816 1.375" stroke-linecap="round" />
      </svg>
    </button>

    <div class="feedback__modal-title">
      <?php
    $add_feedback_title = get_field('add_feedback_title', 'options');
    
    get_template_part( "template-parts/section-title", null, ['title' => $add_feedback_title ]); ?>
    </div>


    <?php while ( have_posts() ) : the_post(); ?>
    <?php acf_form('new-feedback'); ?>
    <?php endwhile; ?>

  </div>
</div>