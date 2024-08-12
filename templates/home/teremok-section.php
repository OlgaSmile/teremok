<?php $teremok_title = get_field('teremok_title');
$teremok_foto_gallery = get_field('teremok_foto-gallery');
$repeater_field = get_field('teremok_repeating');
$Images = get_field('teremok_foto-gallery');
$teremok_main_field = get_field('teremok_main_field');
?>
<section class="teremok-section">




  <div class="teremok-section__desktop-wrapper">
    <div class="teremok-section__box">

      <?php if (!empty($Images)) : ?>
        <div class="teremok-section__Image">
          <?php
          foreach ($Images as  $index => $image) :
          ?>
            <?php if ($index < 3) : ?>
              <img src="<?php echo esc_attr($image['url']); ?>" alt="<?php echo esc_attr($image['alt']) ?  esc_attr($image['alt']) : 'image'; ?>">
            <?php endif ?>
          <?php
          endforeach
          ?>
        </div>
      <?php
      endif
      ?>
    </div>
    <div class="teremok-section__box teremok-section__box---center">
      <div class="teremok-section__title">
        <?php
        get_template_part("template-parts/section-title", null, array('title' => get_field('location_title', 'option'))); ?>

      </div>
      <?php if (!empty($repeater_field)) : ?>
        <ul class="teremok-section__list">
          <?php
          foreach ($repeater_field as $row) :
          ?>
            <li class="teremok-section__item">
              <img class="teremok-section__img" src="<?php echo $subfield_value = $row['teremok_repeating_img']['url']; ?>" alt="">
              <p>
                <?php echo $subfield_value = $row['teremok_repeating_name']; ?>
              </p>
            </li>
          <?php
          endforeach
          ?>
        </ul>
      <?php endif; ?>
      <?php if (!empty($teremok_main_field)) : ?>
        <div class="teremok-section__owner-block">
          <?php foreach ($teremok_main_field as  $index => $row) : ?>
            <div class="teremok-section__owner-block-img-box">
              <svg xmlns="http://www.w3.org/2000/svg" width="163" height="162" viewBox="0 0 163 162" fill="none">
                <path d="M155.412 76.2197L161.5 80.0886L155.412 83.8096" stroke="#E67739" stroke-width="1.55027" />
                <path d="M157.001 80.2041H156.482" stroke="#E67739" stroke-width="1.55027" />
                <path d="M155.11 87.7175L160.532 92.4745L153.945 95.2176" stroke="#E67739" stroke-width="1.55027" />
                <path d="M156.066 91.897L155.554 91.8174" stroke="#E67739" stroke-width="1.55027" />
                <path d="M152.985 99.2342L157.582 104.793L150.642 106.453" stroke="#E67739" stroke-width="1.55027" />
                <path d="M153.27 103.513L152.776 103.353" stroke="#E67739" stroke-width="1.55027" />
                <path d="M149.119 110.138L152.79 116.347L145.676 116.902" stroke="#E67739" stroke-width="1.55027" />
                <path d="M148.729 114.408L148.267 114.172" stroke="#E67739" stroke-width="1.55027" />
                <path d="M143.538 120.367L146.186 127.077L139.073 126.505" stroke="#E67739" stroke-width="1.55027" />
                <path d="M142.48 124.521L142.061 124.216" stroke="#E67739" stroke-width="1.55027" />
                <path d="M136.454 129.572L138.023 136.612L131.086 134.939" stroke="#E67739" stroke-width="1.55027" />
                <path d="M134.76 133.512L134.393 133.145" stroke="#E67739" stroke-width="1.55027" />
                <path d="M128.043 137.523L128.522 144.72L121.921 142.01" stroke="#E67739" stroke-width="1.55027" />
                <path d="M125.771 141.159L125.464 140.74" stroke="#E67739" stroke-width="1.55027" />
                <path d="M118.456 144.118L117.795 151.3L111.703 147.586" stroke="#E67739" stroke-width="1.55027" />
                <path d="M115.639 147.349L115.402 146.888" stroke="#E67739" stroke-width="1.55027" />
                <path d="M107.963 149.118L106.188 156.109L100.751 151.488" stroke="#E67739" stroke-width="1.55027" />
                <path d="M104.676 151.871L104.514 151.378" stroke="#E67739" stroke-width="1.55027" />
                <path d="M96.8252 152.401L93.9607 159.021L89.3283 153.594" stroke="#E67739" stroke-width="1.55027" />
                <path d="M93.1396 154.595L93.0581 154.083" stroke="#E67739" stroke-width="1.55027" />
                <path d="M85.0157 153.913L81.1226 159.985L77.4245 153.884" stroke="#E67739" stroke-width="1.55027" />
                <path d="M81.0254 155.486L81.0274 154.968" stroke="#E67739" stroke-width="1.55027" />
                <path d="M73.4063 153.548L68.6277 158.951L65.9094 152.355" stroke="#E67739" stroke-width="1.55027" />
                <path d="M69.2236 154.487L69.3052 153.975" stroke="#E67739" stroke-width="1.55027" />
                <path d="M61.9989 151.397L56.4215 155.972L54.7873 149.027" stroke="#E67739" stroke-width="1.55027" />
                <path d="M57.7168 151.663L57.8788 151.17" stroke="#E67739" stroke-width="1.55027" />
                <path d="M51.0835 147.465L44.8597 151.112L44.331 143.997" stroke="#E67739" stroke-width="1.55027" />
                <path d="M46.8145 147.059L47.0512 146.598" stroke="#E67739" stroke-width="1.55027" />
                <path d="M40.907 141.866L34.1866 144.489L34.7844 137.379" stroke="#E67739" stroke-width="1.55027" />
                <path d="M36.7549 140.792L37.0615 140.374" stroke="#E67739" stroke-width="1.55027" />
                <path d="M31.7337 134.753L24.6868 136.296L26.3854 129.367" stroke="#E67739" stroke-width="1.55027" />
                <path d="M27.7998 133.048L28.1679 132.682" stroke="#E67739" stroke-width="1.55027" />
                <path d="M23.7724 126.284L16.571 126.71L19.3293 120.13" stroke="#E67739" stroke-width="1.55027" />
                <path d="M20.1504 123.982L20.5709 123.679" stroke="#E67739" stroke-width="1.55027" />
                <path d="M17.2911 116.778L10.1099 116.091L13.8476 110.014" stroke="#E67739" stroke-width="1.55027" />
                <path d="M14.0693 113.947L14.5316 113.712" stroke="#E67739" stroke-width="1.55027" />
                <path d="M12.2852 106.193L5.30661 104.365L9.96916 98.9646" stroke="#E67739" stroke-width="1.55027" />
                <path d="M9.55664 102.886L10.0506 102.728" stroke="#E67739" stroke-width="1.55027" />
                <path d="M9.07377 95.1707L2.46389 92.2814L7.90918 87.6706" stroke="#E67739" stroke-width="1.55027" />
                <path d="M6.8916 91.4785L7.40414 91.399" stroke="#E67739" stroke-width="1.55027" />
                <path d="M7.58804 83.2238L1.52978 79.308L7.64664 75.6341" stroke="#E67739" stroke-width="1.55027" />
                <path d="M6.0293 79.2285L6.54796 79.2325" stroke="#E67739" stroke-width="1.55027" />
                <path d="M7.96585 71.7963L2.57988 66.9979L9.1879 64.3054" stroke="#E67739" stroke-width="1.55027" />
                <path d="M7.03906 67.6089L7.55097 67.6924" stroke="#E67739" stroke-width="1.55027" />
                <path d="M10.1769 60.2693L5.62254 54.6758L12.5747 53.068" stroke="#E67739" stroke-width="1.55027" />
                <path d="M9.92871 55.9902L10.4208 56.154" stroke="#E67739" stroke-width="1.55027" />
                <path d="M14.0839 49.4834L10.4594 43.2472L17.5774 42.745" stroke="#E67739" stroke-width="1.55027" />
                <path d="M14.5078 45.2178L14.9683 45.4564" stroke="#E67739" stroke-width="1.55027" />
                <path d="M19.7555 39.2372L17.1574 32.5085L24.2658 33.1322" stroke="#E67739" stroke-width="1.55027" />
                <path d="M20.8467 35.0933L21.2639 35.4014" stroke="#E67739" stroke-width="1.55027" />
                <path d="M26.9162 30.0747L25.3985 23.0234L32.3229 24.747" stroke="#E67739" stroke-width="1.55027" />
                <path d="M28.6387 26.147L29.0028 26.5163" stroke="#E67739" stroke-width="1.55027" />
                <path d="M35.4281 22.1288L35.0286 14.9271L41.5995 17.709" stroke="#E67739" stroke-width="1.55027" />
                <path d="M37.7432 18.5176L38.0452 18.9392" stroke="#E67739" stroke-width="1.55027" />
                <path d="M44.7103 15.8008L45.4238 8.62345L51.4883 12.383" stroke="#E67739" stroke-width="1.55027" />
                <path d="M47.5518 12.5869L47.7851 13.0494" stroke="#E67739" stroke-width="1.55027" />
                <path d="M55.569 10.6999L57.4229 3.72942L62.807 8.41151" stroke="#E67739" stroke-width="1.55027" />
                <path d="M58.8887 7.98389L59.0451 8.47833" stroke="#E67739" stroke-width="1.55027" />
                <path d="M66.4412 7.55963L69.3563 0.962053L73.947 6.42402" stroke="#E67739" stroke-width="1.55027" />
                <path d="M70.1416 5.39551L70.2192 5.90825" stroke="#E67739" stroke-width="1.55027" />
                <path d="M78.5916 6.08673L82.5315 0.0447141L86.1823 6.17462" stroke="#E67739" stroke-width="1.55027" />
                <path d="M82.5938 4.54736L82.5877 5.06591" stroke="#E67739" stroke-width="1.55027" />
                <path d="M89.8719 6.4854L94.6917 1.1188L97.3594 7.73591" stroke="#E67739" stroke-width="1.55027" />
                <path d="M94.0615 5.57373L93.9761 6.08522" stroke="#E67739" stroke-width="1.55027" />
                <path d="M101.483 8.75066L107.095 4.21818L108.677 11.1751" stroke="#E67739" stroke-width="1.55027" />
                <path d="M105.767 8.51807L105.601 9.00947" stroke="#E67739" stroke-width="1.55027" />
                <path d="M112.231 12.6795L118.482 9.07874L118.958 16.1973" stroke="#E67739" stroke-width="1.55027" />
                <path d="M116.497 13.1196L116.257 13.5786" stroke="#E67739" stroke-width="1.55027" />
                <path d="M122.492 18.3996L129.231 15.8265L128.581 22.9313" stroke="#E67739" stroke-width="1.55027" />
                <path d="M126.637 19.5059L126.327 19.9219" stroke="#E67739" stroke-width="1.55027" />
                <path d="M131.65 25.5999L138.708 24.1081L136.959 31.0249" stroke="#E67739" stroke-width="1.55027" />
                <path d="M135.572 27.3369L135.202 27.6996" stroke="#E67739" stroke-width="1.55027" />
                <path d="M139.574 34.1418L146.778 33.7687L143.972 40.3282" stroke="#E67739" stroke-width="1.55027" />
                <path d="M143.174 36.4668L142.751 36.7672" stroke="#E67739" stroke-width="1.55027" />
                <path d="M145.913 43.5393L153.089 44.2792L149.306 50.3287" stroke="#E67739" stroke-width="1.55027" />
                <path d="M149.114 46.3901L148.65 46.6219" stroke="#E67739" stroke-width="1.55027" />
                <path d="M150.935 54.3387L157.9 56.2186L153.197 61.584" stroke="#E67739" stroke-width="1.55027" />
                <path d="M153.637 57.6685L153.142 57.8229" stroke="#E67739" stroke-width="1.55027" />
                <path d="M154.06 65.3584L160.647 68.2982L155.167 72.8671" stroke="#E67739" stroke-width="1.55027" />
                <path d="M156.211 69.0688L155.698 69.1445" stroke="#E67739" stroke-width="1.55027" />
              </svg>
              <svg class="section_title--icon big">
                <use href="#icon-wrapperOwner">
                </use>
              </svg>
              <img src="<?php echo esc_attr($row['teremok_main_field_img']['url']); ?>" alt="<?php echo esc_attr($row['teremok_main_field_img']['alt']) ?  esc_attr($row['teremok_main_field_img']['alt']) : 'image'; ?>" />
            </div>
            <p><?php echo $row['teremok_main_field_desc'] ?></p>
          <?php endforeach ?>
        </div>
      <?php endif; ?>
    </div>
    <div class="teremok-section__box">
      <?php if (!empty($Images)) : ?>
        <div class="teremok-section__Image">
          <?php
          foreach ($Images as  $index => $image) :
          ?>
            <?php if ($index > 2) : ?>
              <img src="<?php echo esc_attr($image['url']); ?>" alt="<?php echo esc_attr($image['alt']) ?  esc_attr($image['alt']) : 'image'; ?>">
            <?php endif ?>
          <?php
          endforeach
          ?>
        </div>
      <?php
      endif
      ?>
    </div>
  </div>


  <div class="teremok-section__mobile-wrapper">
    <div class="teremok-section__box-center">
      <div class="teremok-section__title">
        <?php
        get_template_part("template-parts/section-title", null, array('title' =>  get_field('location_title', 'option'))); ?>

      </div>
      <?php if (!empty($repeater_field)) : ?>
        <ul class="teremok-section__list">
          <?php
          foreach ($repeater_field as  $index => $row) :
          ?>
            <?php if ($index < 2) : ?>
              <li class="teremok-section__item">
                <img class="teremok-section__img" src="<?php echo esc_attr($row['teremok_repeating_img']['url']); ?>" alt="<?php echo esc_attr($row['teremok_repeating_img']['alt']) ?  esc_attr($row['teremok_repeating_img']['alt']) : 'image'; ?>">
                <p>
                  <?php echo $row['teremok_repeating_name']; ?>
                </p>
              </li>
            <?php endif ?>
          <?php
          endforeach
          ?>
        </ul>
      <?php endif; ?>
      <?php if (!empty($Images)) : ?>
        <div class="teremok-section__Image-mobile" id="block2">
          <div class="swiper swiper-image-mobile">
            <div class="swiper-wrapper">
              <?php
              foreach ($Images as  $index => $image) :
              ?>
                <?php if ($index < 3) : ?>
                  <div class="swiper-slide"> <img src="<?php echo esc_attr($image['url']); ?>" alt="<?php echo esc_attr($image['alt']) ?  esc_attr($image['alt']) : 'image'; ?>"></div>
                <?php endif ?>
              <?php
              endforeach
              ?>
            </div>
            <div class="autoplay-progress">
              <svg viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="20"></circle>
              </svg>
              <span></span>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php if (!empty($repeater_field)) : ?>
        <ul class="teremok-section__list">
          <?php
          foreach ($repeater_field as  $index => $row) :
          ?>
            <?php if ($index > 1 && $index < 4) : ?>
              <li class="teremok-section__item">
                <img class="teremok-section__img" src="<?php echo esc_attr($row['teremok_repeating_img']['url']); ?>" alt="<?php echo esc_attr($row['teremok_repeating_img']['alt']) ?  esc_attr($row['teremok_repeating_img']['alt']) : 'image'; ?>">
                <p>
                  <?php echo $row['teremok_repeating_name']; ?>
                </p>
              </li>
            <?php endif ?>
          <?php
          endforeach
          ?>
        </ul>
      <?php endif; ?>
      <?php if (!empty($Images)) : ?>
        <div class="teremok-section__Image-mobile" id="block2">
          <div class="swiper swiper-image-mobile">
            <div class="swiper-wrapper">
              <?php
              foreach ($Images as  $index => $image) :
              ?>
                <?php if ($index > 2) : ?>
                  <div class="swiper-slide"> <img src="<?php echo esc_attr($image['url']); ?>" alt="<?php echo esc_attr($image['alt']) ?  esc_attr($image['alt']) : 'image'; ?>"></div>
                <?php endif ?>
              <?php
              endforeach
              ?>
            </div>
            <div class="autoplay-progress">
              <svg viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="20"></circle>
              </svg>
              <span></span>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php if (!empty($repeater_field)) : ?>
        <ul class="teremok-section__list">

          <?php
          foreach ($repeater_field as  $index => $row) :
          ?>
            <?php if ($index > 3) : ?>
              <li class="teremok-section__item">
                <img class="teremok-section__img" src="<?php echo esc_attr($row['teremok_repeating_img']['url']); ?>" alt="<?php echo esc_attr($row['teremok_repeating_img']['alt']) ?  esc_attr($row['teremok_repeating_img']['alt']) : 'image'; ?>">
                <p>
                  <?php echo  $row['teremok_repeating_name']; ?>
                </p>
              </li>
            <?php endif ?>
          <?php
          endforeach
          ?>

        </ul>
      <?php endif; ?>
      <?php if (!empty($teremok_main_field)) : ?>
        <div class="teremok-section__owner-block">
          <?php foreach ($teremok_main_field as  $index => $row) : ?>
            <div class="teremok-section__owner-block-img-box">
              <svg xmlns="http://www.w3.org/2000/svg" width="163" height="162" viewBox="0 0 163 162" fill="none">
                <path d="M155.412 76.2197L161.5 80.0886L155.412 83.8096" stroke="#E67739" stroke-width="1.55027" />
                <path d="M157.001 80.2041H156.482" stroke="#E67739" stroke-width="1.55027" />
                <path d="M155.11 87.7175L160.532 92.4745L153.945 95.2176" stroke="#E67739" stroke-width="1.55027" />
                <path d="M156.066 91.897L155.554 91.8174" stroke="#E67739" stroke-width="1.55027" />
                <path d="M152.985 99.2342L157.582 104.793L150.642 106.453" stroke="#E67739" stroke-width="1.55027" />
                <path d="M153.27 103.513L152.776 103.353" stroke="#E67739" stroke-width="1.55027" />
                <path d="M149.119 110.138L152.79 116.347L145.676 116.902" stroke="#E67739" stroke-width="1.55027" />
                <path d="M148.729 114.408L148.267 114.172" stroke="#E67739" stroke-width="1.55027" />
                <path d="M143.538 120.367L146.186 127.077L139.073 126.505" stroke="#E67739" stroke-width="1.55027" />
                <path d="M142.48 124.521L142.061 124.216" stroke="#E67739" stroke-width="1.55027" />
                <path d="M136.454 129.572L138.023 136.612L131.086 134.939" stroke="#E67739" stroke-width="1.55027" />
                <path d="M134.76 133.512L134.393 133.145" stroke="#E67739" stroke-width="1.55027" />
                <path d="M128.043 137.523L128.522 144.72L121.921 142.01" stroke="#E67739" stroke-width="1.55027" />
                <path d="M125.771 141.159L125.464 140.74" stroke="#E67739" stroke-width="1.55027" />
                <path d="M118.456 144.118L117.795 151.3L111.703 147.586" stroke="#E67739" stroke-width="1.55027" />
                <path d="M115.639 147.349L115.402 146.888" stroke="#E67739" stroke-width="1.55027" />
                <path d="M107.963 149.118L106.188 156.109L100.751 151.488" stroke="#E67739" stroke-width="1.55027" />
                <path d="M104.676 151.871L104.514 151.378" stroke="#E67739" stroke-width="1.55027" />
                <path d="M96.8252 152.401L93.9607 159.021L89.3283 153.594" stroke="#E67739" stroke-width="1.55027" />
                <path d="M93.1396 154.595L93.0581 154.083" stroke="#E67739" stroke-width="1.55027" />
                <path d="M85.0157 153.913L81.1226 159.985L77.4245 153.884" stroke="#E67739" stroke-width="1.55027" />
                <path d="M81.0254 155.486L81.0274 154.968" stroke="#E67739" stroke-width="1.55027" />
                <path d="M73.4063 153.548L68.6277 158.951L65.9094 152.355" stroke="#E67739" stroke-width="1.55027" />
                <path d="M69.2236 154.487L69.3052 153.975" stroke="#E67739" stroke-width="1.55027" />
                <path d="M61.9989 151.397L56.4215 155.972L54.7873 149.027" stroke="#E67739" stroke-width="1.55027" />
                <path d="M57.7168 151.663L57.8788 151.17" stroke="#E67739" stroke-width="1.55027" />
                <path d="M51.0835 147.465L44.8597 151.112L44.331 143.997" stroke="#E67739" stroke-width="1.55027" />
                <path d="M46.8145 147.059L47.0512 146.598" stroke="#E67739" stroke-width="1.55027" />
                <path d="M40.907 141.866L34.1866 144.489L34.7844 137.379" stroke="#E67739" stroke-width="1.55027" />
                <path d="M36.7549 140.792L37.0615 140.374" stroke="#E67739" stroke-width="1.55027" />
                <path d="M31.7337 134.753L24.6868 136.296L26.3854 129.367" stroke="#E67739" stroke-width="1.55027" />
                <path d="M27.7998 133.048L28.1679 132.682" stroke="#E67739" stroke-width="1.55027" />
                <path d="M23.7724 126.284L16.571 126.71L19.3293 120.13" stroke="#E67739" stroke-width="1.55027" />
                <path d="M20.1504 123.982L20.5709 123.679" stroke="#E67739" stroke-width="1.55027" />
                <path d="M17.2911 116.778L10.1099 116.091L13.8476 110.014" stroke="#E67739" stroke-width="1.55027" />
                <path d="M14.0693 113.947L14.5316 113.712" stroke="#E67739" stroke-width="1.55027" />
                <path d="M12.2852 106.193L5.30661 104.365L9.96916 98.9646" stroke="#E67739" stroke-width="1.55027" />
                <path d="M9.55664 102.886L10.0506 102.728" stroke="#E67739" stroke-width="1.55027" />
                <path d="M9.07377 95.1707L2.46389 92.2814L7.90918 87.6706" stroke="#E67739" stroke-width="1.55027" />
                <path d="M6.8916 91.4785L7.40414 91.399" stroke="#E67739" stroke-width="1.55027" />
                <path d="M7.58804 83.2238L1.52978 79.308L7.64664 75.6341" stroke="#E67739" stroke-width="1.55027" />
                <path d="M6.0293 79.2285L6.54796 79.2325" stroke="#E67739" stroke-width="1.55027" />
                <path d="M7.96585 71.7963L2.57988 66.9979L9.1879 64.3054" stroke="#E67739" stroke-width="1.55027" />
                <path d="M7.03906 67.6089L7.55097 67.6924" stroke="#E67739" stroke-width="1.55027" />
                <path d="M10.1769 60.2693L5.62254 54.6758L12.5747 53.068" stroke="#E67739" stroke-width="1.55027" />
                <path d="M9.92871 55.9902L10.4208 56.154" stroke="#E67739" stroke-width="1.55027" />
                <path d="M14.0839 49.4834L10.4594 43.2472L17.5774 42.745" stroke="#E67739" stroke-width="1.55027" />
                <path d="M14.5078 45.2178L14.9683 45.4564" stroke="#E67739" stroke-width="1.55027" />
                <path d="M19.7555 39.2372L17.1574 32.5085L24.2658 33.1322" stroke="#E67739" stroke-width="1.55027" />
                <path d="M20.8467 35.0933L21.2639 35.4014" stroke="#E67739" stroke-width="1.55027" />
                <path d="M26.9162 30.0747L25.3985 23.0234L32.3229 24.747" stroke="#E67739" stroke-width="1.55027" />
                <path d="M28.6387 26.147L29.0028 26.5163" stroke="#E67739" stroke-width="1.55027" />
                <path d="M35.4281 22.1288L35.0286 14.9271L41.5995 17.709" stroke="#E67739" stroke-width="1.55027" />
                <path d="M37.7432 18.5176L38.0452 18.9392" stroke="#E67739" stroke-width="1.55027" />
                <path d="M44.7103 15.8008L45.4238 8.62345L51.4883 12.383" stroke="#E67739" stroke-width="1.55027" />
                <path d="M47.5518 12.5869L47.7851 13.0494" stroke="#E67739" stroke-width="1.55027" />
                <path d="M55.569 10.6999L57.4229 3.72942L62.807 8.41151" stroke="#E67739" stroke-width="1.55027" />
                <path d="M58.8887 7.98389L59.0451 8.47833" stroke="#E67739" stroke-width="1.55027" />
                <path d="M66.4412 7.55963L69.3563 0.962053L73.947 6.42402" stroke="#E67739" stroke-width="1.55027" />
                <path d="M70.1416 5.39551L70.2192 5.90825" stroke="#E67739" stroke-width="1.55027" />
                <path d="M78.5916 6.08673L82.5315 0.0447141L86.1823 6.17462" stroke="#E67739" stroke-width="1.55027" />
                <path d="M82.5938 4.54736L82.5877 5.06591" stroke="#E67739" stroke-width="1.55027" />
                <path d="M89.8719 6.4854L94.6917 1.1188L97.3594 7.73591" stroke="#E67739" stroke-width="1.55027" />
                <path d="M94.0615 5.57373L93.9761 6.08522" stroke="#E67739" stroke-width="1.55027" />
                <path d="M101.483 8.75066L107.095 4.21818L108.677 11.1751" stroke="#E67739" stroke-width="1.55027" />
                <path d="M105.767 8.51807L105.601 9.00947" stroke="#E67739" stroke-width="1.55027" />
                <path d="M112.231 12.6795L118.482 9.07874L118.958 16.1973" stroke="#E67739" stroke-width="1.55027" />
                <path d="M116.497 13.1196L116.257 13.5786" stroke="#E67739" stroke-width="1.55027" />
                <path d="M122.492 18.3996L129.231 15.8265L128.581 22.9313" stroke="#E67739" stroke-width="1.55027" />
                <path d="M126.637 19.5059L126.327 19.9219" stroke="#E67739" stroke-width="1.55027" />
                <path d="M131.65 25.5999L138.708 24.1081L136.959 31.0249" stroke="#E67739" stroke-width="1.55027" />
                <path d="M135.572 27.3369L135.202 27.6996" stroke="#E67739" stroke-width="1.55027" />
                <path d="M139.574 34.1418L146.778 33.7687L143.972 40.3282" stroke="#E67739" stroke-width="1.55027" />
                <path d="M143.174 36.4668L142.751 36.7672" stroke="#E67739" stroke-width="1.55027" />
                <path d="M145.913 43.5393L153.089 44.2792L149.306 50.3287" stroke="#E67739" stroke-width="1.55027" />
                <path d="M149.114 46.3901L148.65 46.6219" stroke="#E67739" stroke-width="1.55027" />
                <path d="M150.935 54.3387L157.9 56.2186L153.197 61.584" stroke="#E67739" stroke-width="1.55027" />
                <path d="M153.637 57.6685L153.142 57.8229" stroke="#E67739" stroke-width="1.55027" />
                <path d="M154.06 65.3584L160.647 68.2982L155.167 72.8671" stroke="#E67739" stroke-width="1.55027" />
                <path d="M156.211 69.0688L155.698 69.1445" stroke="#E67739" stroke-width="1.55027" />
              </svg>
              <svg class="section_title--icon big">
                <use href="#icon-wrapperOwner">
                </use>
              </svg>
              <img src="<?php echo esc_attr($row['teremok_main_field_img']['url']); ?>" alt="<?php echo esc_attr($row['teremok_main_field_img']['alt']) ?  esc_attr($row['teremok_main_field_img']['alt']) : 'image'; ?>" />
            </div>
            <p><?php echo $row['teremok_main_field_desc'] ?></p>
          <?php endforeach ?>
        </div>
      <?php endif; ?>
    </div>

  </div>

</section>