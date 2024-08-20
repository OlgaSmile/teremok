<?php
$to_agree_btn = get_field('to-agree', 'options');
$more_details_btn = get_field('more-details', 'options');
$text_cookie = get_field('text_cookie', 'options')


?>
<div id="cookie-modal" class="cookie-modal">
  <div class="cookie-modal__text-wrapper">
    <?php echo $text_cookie ?>
  </div>
  <button id="btn-agree" class="cookie-modal__btn-agree"><?php echo $to_agree_btn ?></button>
  <button id="btn-detaliis" class="cookie-modal__btn-detaliis"> <a href="<?php echo home_url() . '/privacy-policy' ?>"><?php echo $more_details_btn ?></a></button>

</div>