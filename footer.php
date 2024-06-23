<footer class="footer">
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
            <?php get_template_part("template-parts/logo_footer");?>
            <button class="_button secondary_button">Забронювати проживання</button>
            <!-- <?php get_template_part("template-parts/booking-btn", null, array('text' => "Забронювати проживання"));?> -->
        </div>
        <div class="footer__contacts">
            <div class="footer__email"><?php the_field('email', 'option');?> </div>
            <div class="footer__phone"><?php the_field('footer_phone', 'option');?>
            </div>
            <ul class="footer__socials">
                <?php if (get_field('social_links', 'option')): ?>
                <?php while (has_sub_field('social_links', 'option')): ?>

                <li class="footer__socials-item">
                    <a href="<?php the_sub_field('social_link');?>">
                        <img src="<?php the_sub_field('social_icon');?>">
                    </a>
                </li>
                <?php endwhile;?>
                <?php endif;?>
            </ul>
        </div>
    </div>
    <div class="footer__policy container">
        <span class="footer__policy-item">Політика конфіденційності</span>
        <span class="footer__policy-item footer__policy-item_date">2024</span>
        <span class="footer__policy-item footer__policy-item_country">ua</span>
    </div>
</footer>
</div>
</body>

</html>