<footer class="footer">

    <div class="top-to-scroll-wrapper">
        <button class="top-to-scroll">
            <svg class="">
                <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-arrow-top"></use>
            </svg>
        </button>
    </div>
    <div class="footer__content container">

        <?php wp_nav_menu([
            'theme_location' => 'header',
            'container' => false,
            'menu_class' => 'footer__menu',
            'menu_id' => false,
            'echo' => true,
            'items_wrap' => '<ul id="%1$s" class="footer_list %2$s">%3$s</ul>',
        ]);
        ?>
        <div class="footer__logo-block">
            <a href="/">
                <?php get_template_part("template-parts/logo_footer"); ?>
            </a>

            <button class="_button secondary_button booking_btn-footer">Забронювати проживання</button>
            <!-- <?php get_template_part("template-parts/booking-btn", null, array('text' => "Забронювати проживання")); ?> -->
        </div>
        <div class="footer__contacts">
            <div class="footer__email">
                <a class="footer__email-link" href="mailto:<?php the_field('email', 'option'); ?>">
                    <?php the_field('email', 'option'); ?>
                </a>
            </div>
            <div class="footer__phone"><?php the_field('phone', 'option'); ?>
            </div>
            <ul class="footer__socials">
                <?php if (get_field('social_links', 'option')) : ?>
                    <?php while (has_sub_field('social_links', 'option')) : ?>

                        <li class="footer__socials-item">
                            <a href="<?php the_sub_field('social_link'); ?>">
                                <img src="<?php the_sub_field('social_icon'); ?>">
                            </a>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="footer__policy container">
        <a href="<?php echo home_url() . '/privacy-policy' ?>"><span class="footer__policy-item footer__policy-item_policy">Політика конфіденційності</span></a>
        <div class="footer__policy-item footer__policy-item_wrapper">
            <span class="footer__policy-item footer__policy-item_date">ТЕРЕМОК &#169; 2024</span>
            <div class="footer__policy-item footer__policy-item_country">Cайт розроблено
                <a href="https://webjungle.top" target="blank">
                    <svg width="60" height="26" viewBox="0 0 60 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d_1551_16073)">
                            <path d="M3.65797 11.926L1.38672 4.30957H5.05858L5.81566 9.43599H5.85351L6.72416 4.30957H11.191L12.0616 9.43599H12.0995L12.8566 4.30957H16.5284L14.2571 11.926H9.80925L8.97645 6.79955H8.93867L8.10584 11.926H3.65797Z" fill="#82C12F" />
                            <path d="M22.6486 12.0724C20.756 12.0724 19.3048 11.7307 18.2954 11.0472C17.2859 10.3636 16.7812 9.38713 16.7812 8.11775C16.7812 6.88741 17.2355 5.92071 18.144 5.21767C19.0525 4.51462 20.3017 4.16309 21.8915 4.16309C23.4436 4.16309 24.6486 4.49997 25.5066 5.17373C26.3773 5.83772 26.8126 6.77024 26.8126 7.97128C26.8126 8.14705 26.8063 8.34234 26.7937 8.55716C26.781 8.77198 26.7622 8.91845 26.7369 8.99655H18.8632V7.31217H23.8032L23.3679 7.82481C23.3679 7.19011 23.248 6.72629 23.0082 6.43336C22.7811 6.14042 22.4089 5.99395 21.8915 5.99395C21.3868 5.99395 21.0146 6.14042 20.7748 6.43336C20.5351 6.72629 20.4152 7.19011 20.4152 7.82481V8.70363C20.4152 9.17237 20.5793 9.50922 20.9073 9.7143C21.2354 9.91931 21.7654 10.0219 22.4972 10.0219C23.0398 10.0219 23.6265 9.98279 24.2574 9.90468C24.8884 9.82656 25.4246 9.72893 25.8663 9.61172L26.2448 11.6623C25.8032 11.7892 25.2543 11.8869 24.5981 11.9552C23.9546 12.0333 23.3048 12.0724 22.6486 12.0724Z" fill="#82C12F" />
                            <path d="M34.5927 12.0721C33.987 12.0721 33.4444 11.994 32.9649 11.8378C32.4854 11.6718 32.0123 11.4081 31.5453 11.0468H31.5075L31.4696 11.9256H27.9492V1.2334H31.6589V5.18806H31.6968C32.151 4.81701 32.5989 4.55337 33.0406 4.39713C33.4948 4.24089 34.0122 4.16278 34.5927 4.16278C35.8671 4.16278 36.8449 4.50454 37.5263 5.18806C38.2077 5.86182 38.5484 6.83828 38.5484 8.11744C38.5484 9.39657 38.2077 10.3779 37.5263 11.0615C36.8449 11.7353 35.8671 12.0721 34.5927 12.0721ZM33.2488 9.8751C33.7914 9.8751 34.2015 9.72375 34.4791 9.42104C34.7692 9.11833 34.9144 8.68379 34.9144 8.11744C34.9144 7.54133 34.7692 7.10681 34.4791 6.81387C34.2015 6.51117 33.7914 6.35981 33.2488 6.35981C32.9333 6.35981 32.6558 6.40863 32.416 6.50628C32.1762 6.60393 31.987 6.74063 31.8482 6.9164C31.722 7.09216 31.6589 7.29722 31.6589 7.53156V8.70332C31.6589 8.93767 31.722 9.14271 31.8482 9.31846C31.987 9.49428 32.1762 9.63092 32.416 9.72862C32.6558 9.82625 32.9333 9.8751 33.2488 9.8751Z" fill="#82C12F" />
                        </g>
                        <path d="M25.7409 22.2443C25.2785 22.2443 24.8377 22.2009 24.4186 22.1142C24.0068 22.0203 23.6166 21.883 23.248 21.7023L23.4865 20.5968C23.8912 20.7847 24.2669 20.922 24.6137 21.0087C24.9606 21.0954 25.3146 21.1387 25.6759 21.1387C26.1239 21.1387 26.4852 21.0737 26.7598 20.9436C27.0416 20.8136 27.2439 20.6076 27.3668 20.3258C27.4968 20.0368 27.5619 19.6647 27.5619 19.2094V14.2236H28.7758V19.4262C28.7758 20.3872 28.5301 21.099 28.0388 21.5614C27.5474 22.0167 26.7815 22.2443 25.7409 22.2443ZM32.3053 22.2443C31.626 22.2443 31.1274 22.06 30.8095 21.6915C30.4916 21.323 30.3326 20.7485 30.3326 19.9681V16.4998H31.5032V19.7514C31.5032 20.2716 31.5899 20.6546 31.7633 20.9003C31.9439 21.1459 32.2329 21.2688 32.6304 21.2688C32.9266 21.2688 33.1868 21.2074 33.4108 21.0845C33.642 20.9617 33.8227 20.7955 33.9527 20.586C34.0828 20.3692 34.1478 20.1271 34.1478 19.8598V16.4998H35.3184V22.1359H34.202L34.1912 21.4639H34.1695C33.9455 21.724 33.6818 21.9191 33.3783 22.0492C33.0748 22.1792 32.7171 22.2443 32.3053 22.2443ZM37.0919 22.1359V16.4998H38.2083L38.2192 17.1718H38.2408C38.4649 16.9116 38.7359 16.7165 39.0538 16.5865C39.3717 16.4564 39.7402 16.3914 40.1593 16.3914C40.853 16.3914 41.3624 16.5756 41.6876 16.9441C42.02 17.3127 42.1861 17.8871 42.1861 18.6675V22.1359H41.0156V18.8843C41.0156 18.364 40.918 17.981 40.7229 17.7354C40.5351 17.4897 40.2388 17.3669 39.8341 17.3669C39.5307 17.3669 39.2597 17.4283 39.0212 17.5511C38.7828 17.674 38.595 17.8401 38.4576 18.0497C38.3276 18.2593 38.2625 18.5013 38.2625 18.7759V22.1359H37.0919ZM45.9188 24.5204C45.4779 24.5204 45.0589 24.4771 44.6615 24.3903C44.264 24.3036 43.9316 24.1808 43.6643 24.0218L43.8269 23.068C44.087 23.2198 44.3905 23.3353 44.7373 23.4149C45.0914 23.5016 45.4491 23.5449 45.8104 23.5449C46.4679 23.5449 46.9376 23.3895 47.2194 23.0789C47.5012 22.7682 47.6421 22.2551 47.6421 21.5398V21.1821H47.6204C47.4181 21.4205 47.1579 21.6048 46.84 21.7349C46.5221 21.8577 46.1752 21.9191 45.7995 21.9191C45.048 21.9191 44.4591 21.677 44.0328 21.1929C43.6065 20.7015 43.3933 20.0223 43.3933 19.1552C43.3933 18.2881 43.6065 17.6125 44.0328 17.1284C44.4591 16.637 45.048 16.3914 45.7995 16.3914C46.1824 16.3914 46.5366 16.4564 46.8617 16.5865C47.1941 16.7165 47.4614 16.8972 47.6638 17.1284H47.6855L47.6963 16.4998H48.8127V21.5398C48.8127 22.5586 48.5778 23.3101 48.1082 23.7942C47.6385 24.2783 46.9086 24.5204 45.9188 24.5204ZM46.0705 20.9436C46.374 20.9436 46.6413 20.8894 46.8726 20.7811C47.111 20.6727 47.2988 20.5246 47.4362 20.3367C47.5734 20.1488 47.6421 19.9356 47.6421 19.6972V18.6133C47.6421 18.3749 47.5734 18.1617 47.4362 17.9738C47.2988 17.7859 47.111 17.6378 46.8726 17.5294C46.6413 17.4211 46.374 17.3669 46.0705 17.3669C45.5863 17.3669 45.2106 17.5222 44.9433 17.8329C44.6759 18.1436 44.5422 18.5844 44.5422 19.1552C44.5422 19.7261 44.6759 20.1669 44.9433 20.4776C45.2106 20.7883 45.5863 20.9436 46.0705 20.9436ZM50.6792 22.1359V14.2236H51.8715V22.1359H50.6792ZM56.3725 22.2443C55.3971 22.2443 54.6455 21.9913 54.1181 21.4856C53.5906 20.9798 53.3269 20.2572 53.3269 19.3178C53.3269 18.4074 53.5689 17.692 54.0531 17.1718C54.5444 16.6515 55.2164 16.3914 56.0691 16.3914C56.8928 16.3914 57.525 16.637 57.9658 17.1284C58.4138 17.6198 58.6378 18.317 58.6378 19.2203C58.6378 19.3142 58.6342 19.419 58.627 19.5346C58.627 19.6502 58.6234 19.7405 58.6161 19.8056H53.9772V18.8843H57.7274L57.5431 19.1661C57.5431 18.5519 57.4203 18.0967 57.1746 17.8004C56.9289 17.4969 56.5604 17.3452 56.0691 17.3452C55.5488 17.3452 55.1513 17.5041 54.8768 17.8221C54.6094 18.14 54.4758 18.6025 54.4758 19.2094V19.5346C54.4758 20.1199 54.6275 20.5571 54.931 20.8461C55.2417 21.1279 55.7077 21.2688 56.3292 21.2688C56.6327 21.2688 56.9542 21.2399 57.2938 21.1821C57.6407 21.1171 57.9477 21.034 58.2151 20.9328L58.3669 21.8758C58.0923 21.9913 57.7779 22.0817 57.4239 22.1467C57.0771 22.2118 56.7266 22.2443 56.3725 22.2443Z" fill="#3C4839" />
                        <defs>
                            <filter id="filter0_d_1551_16073" x="0.886719" y="0.733398" width="38.1621" height="11.8391" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset />
                                <feGaussianBlur stdDeviation="0.25" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.179167 0 0 0 0 0.16772 0 0 0 0 0.161997 0 0 0 0.4 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1551_16073" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1551_16073" result="shape" />
                            </filter>
                        </defs>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</div>
</body>

</html>