<?php
$desc_services = get_field('description_services');
$image_icon = $desc_services['description_services_icon'];
$photo_owner = $desc_services['description_services_owner_photo'];



?>
<section class="section-desc-services">
  <img class="section-desc-services__decor" src="<?php echo get_template_directory_uri() . '/assets/images/decor-branch.png'; ?>">
  <?php if ($image_icon) : ?>
    <img class="section-desc-services__icon" src="<?php echo esc_url($image_icon['url']); ?>" alt="<?php echo esc_attr($image_icon['alt']); ?>" width="50" height="50" />
  <?php endif; ?>
  <?php if (!empty($desc_services['description_services_title'])) : ?>
    <h2 class="section-desc-services__title"><?php echo $desc_services['description_services_title'] ?></h2>
  <?php endif ?>
  <?php if (!empty($desc_services['description_services_desc'])) : ?>
    <p class="section-desc-services__desc">
      <?php echo $desc_services['description_services_desc'] ?>
    </p>
  <?php endif ?>
  <?php if (!empty($photo_owner['url'])) : ?>
    <div class="teremok-section__owner-block-img-box section-desc-services__photo-box">
      <svg xmlns="http://www.w3.org/2000/svg" width="149" height="150" viewBox="0 0 149 150" fill="none">
        <path d="M141.778 71.085L147.32 74.6445L141.778 78.0679" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M143.227 74.7505H142.754" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M139.572 92.26L143.756 97.3745L137.439 98.9019" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M139.828 96.1965L139.379 96.0493" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M130.971 111.705L133.381 117.878L126.906 117.352" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M130.008 115.53L129.626 115.249" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M116.864 127.488L117.3 134.109L111.291 131.616" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M114.797 130.833L114.518 130.448" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M98.5896 138.156L96.9739 144.588L92.0248 140.337" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M95.5938 140.692L95.4462 140.238" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M77.6933 142.569L74.1493 148.156L70.7829 142.542" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M74.0625 144.016L74.0643 143.539" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M56.7463 140.254L51.6692 144.463L50.1815 138.074" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M52.8516 140.498L52.9992 140.044" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M37.5422 131.488L31.4245 133.901L31.9687 127.36" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M33.7656 130.502L34.0448 130.117" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M21.9469 117.143L15.3913 117.535L17.9023 111.481" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M18.6484 115.026L19.0313 114.746" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M11.4889 98.6607L5.13613 96.9796L9.38054 92.0107" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M9.00781 95.6208L9.45746 95.4753" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M7.21393 77.5262L1.69928 73.924L7.26784 70.5434" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M5.79688 73.8506L6.26902 73.8543" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M9.571 56.4117L5.42504 51.2655L11.7537 49.7862" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M9.34375 52.4724L9.79174 52.6231" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M18.2861 37.0584L15.921 30.8677L22.3918 31.4415" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M19.2812 33.2434L19.661 33.5269" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M32.5555 21.3207L32.1918 14.6949L38.1734 17.2543" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M34.6641 18.0007L34.939 18.3886" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M50.8976 10.8051L52.5852 4.39204L57.4864 8.69974" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M53.9219 8.30591L54.0644 8.76125" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M71.8499 6.55999L75.4364 1.0011L78.7599 6.64086" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M75.4922 5.14111L75.4867 5.6182" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M92.6906 9.00915L97.799 4.83909L99.239 11.2397" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M96.5859 8.79736L96.435 9.24996" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M111.808 17.8908L117.943 15.5234L117.352 22.0601" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M115.578 18.9106L115.296 19.2934" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M127.365 32.375L133.924 32.0316L131.369 38.0667" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M130.641 34.5117L130.256 34.7881" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M137.702 50.955L144.042 52.6845L139.76 57.6209" stroke="#3C4839" stroke-width="0.93016" />
        <path d="M140.164 54.0164L139.713 54.1585" stroke="#3C4839" stroke-width="0.93016" />
      </svg>
      <svg class="section_title--icon big">
        <use href="#icon-wrapperOwner">
        </use>
      </svg>
      <img class="section-desc-services__icon" src="<?php echo esc_url($photo_owner['url']); ?>" alt="<?php echo esc_attr($photo_owner['alt']); ?>" />
    </div>
  <?php endif ?>
  <?php if (!empty($desc_services['description_services_owner_name'])) : ?>
    <h3 class="section-desc-services__title section-desc-services__title---margin-hidden"><?php echo $desc_services['description_services_owner_name'] ?></h3>
  <?php endif ?>
  <?php if (!empty($desc_services['description_services_owner_role'])) : ?>
    <p class=""><?php echo $desc_services['description_services_owner_role'] ?></p>
  <?php endif ?>
  <?php if (!empty($desc_services['description_services_owner_slogan'])) : ?>
    <p class="section-desc-services__slogan"><?php echo $desc_services['description_services_owner_slogan'] ?></p>
  <?php endif ?>






</section>