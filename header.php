<?php acf_form_head()?>
<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>

<body>
    <div class="wrapper">

        <!-- Desktop HEADER START -->
        <header class="header">
            <div class="header__content container">
                <div class="header__menu menu">
                    <div class="menu__icon icon-menu menu__round">
                        <?php get_template_part("template-parts/logo");?>
                    </div>
                </div>
                <div class="menu__nav">
                    <nav class="menu__body">
                        <div class=" menu__container">
                            <?php wp_nav_menu([
    'theme_location' => 'header',
    'container' => false,
    'menu_class' => 'menu__list',
    'link_before' => '<div class="menu__list-trees">
    <svg width="33" height="58" viewBox="0 0 33 58" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M16.2109 57.5V0.0625" stroke-width="1.5" />
        <path
            d="M16.2113 0.484375C15.1683 4.70975 11.5491 13.1915 5.41601 13.3156M16.2113 17.695C15.0118 21.6585 10.5477 29.3352 2.28687 28.3339M16.2113 36.4695C13.2908 40.9024 6.01045 49.2675 0.25293 47.2649"
            stroke-width="1.5" />
        <path
            d="M16.2115 0.484375C17.2545 4.70975 20.8738 13.1915 27.0068 13.3156M16.2115 17.695C17.411 21.6585 21.8752 29.3352 30.136 28.3339M16.2115 36.4695C19.132 40.9024 26.4124 49.2675 32.1699 47.2649"
            stroke-width="1.5" />
    </svg>
    <svg width="24" height="41" viewBox="0 0 24 41" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M11.7451 40.4999V0.273926" stroke-width="1.5" />
        <path
            d="M11.7457 0.570801C11.0152 3.53001 8.48052 9.47017 4.18527 9.55709M11.7457 12.6242C10.9056 15.4 7.77919 20.7763 1.9938 20.0751M11.7457 25.7728C9.70035 28.8773 4.60158 34.7358 0.569336 33.3333"
            stroke-width="1.5" />
        <path
            d="M11.7455 0.570801C12.476 3.53001 15.0107 9.47017 19.3059 9.55709M11.7455 12.6242C12.5856 15.4 15.712 20.7763 21.4974 20.0751M11.7455 25.7728C13.7909 28.8773 18.8896 34.7358 22.9219 33.3333"
            stroke-width="1.5" />
    </svg>
</div>',
    'menu_id' => false,
    'echo' => true,
    'items_wrap' => '<ul id="%1$s" class="header_list %2$s">%3$s</ul>',
]);
?>
                        </div>
                    </nav>
                    <div class="burger-menu__overlay"></div>
                </div>
                <a type="phone" href="tel:
<?php the_field('phone', "option");?>" class="header__phone"><?php the_field('phone', "option");?></a>
        </header>
        <!-- Desktop HEADER END -->

        <!-- Mobile HEADER START -->

        <header class="header-mobile">

            <?php get_template_part("template-parts/header_mobile");?>


        </header>
        <div class="header-mobile__menu" popover id="mobile-menu">
            <header class="header-mobile_menu">
                <?php get_template_part("template-parts/header_mobile-menu");?>
            </header>
            <?php wp_nav_menu([
    'theme_location' => 'header',
    'container' => false,
    'menu_class' => 'header-mobile__menu-list',
    'menu_id' => false,
    'echo' => true,
    'items_wrap' => '<ul id="%1$s" class="header-mobile-list %2$s">%3$s</ul>',
]);
?>
            <ul class="header-mobile__menu_socials">
                <?php if (get_field('social_links', 'option')): ?>
                <?php while (has_sub_field('social_links', 'option')): ?>

                <li class="header-mobile__menu_socials-item">
                    <a href="<?php the_sub_field('social_link');?>">
                        <img src="<?php the_sub_field('social_icon');?>">
                    </a>
                </li>
                <?php endwhile;?>
                <?php endif;?>
            </ul>
            <a type="phone" href="tel:<?php the_field('phone', "option");?>" class="header-mobile__menu_phone">
                <?php the_field('phone', 'options');?>
            </a>
            <p class="header-mobile__menu_address">
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12.5001 2C8.08908 2 4.50008 5.589 4.50008 9.995C4.47108 16.44 12.1961 21.784 12.5001 22C12.5001 22 20.5291 16.44 20.5001 10C20.5001 5.589 16.9111 2 12.5001 2ZM12.5001 14C10.2901 14 8.50008 12.21 8.50008 10C8.50008 7.79 10.2901 6 12.5001 6C14.7101 6 16.5001 7.79 16.5001 10C16.5001 12.21 14.7101 14 12.5001 14Z"
                        fill="#3C4839" />
                </svg>
                <?php the_field('location_address', 'options');?>
            </p>

        </div>

        <script>
        const submenuMobileLinkHeader = document.querySelector(
            ".header-mobile-list > .menu-item-object-custom > a"
        );
        submenuMobileLinkHeader.classList.add("a");
        </script>
        <!-- Mobile HEADER END -->

        <!-- title trees -->
        <svg style="display: none;">
            <symbol id="tree" viewBox="0 0 18 32">
                <path fill="none" stroke="" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                    stroke-width="1.1707" d="M8.723 32v-31.396"></path>
                <path fill="none" stroke="" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                    stroke-width="1.1707"
                    d="M8.723 0.835c-0.57 2.31-2.548 6.946-5.901 7.014M8.723 10.243c-0.656 2.166-3.096 6.363-7.611 5.815M8.723 20.505c-1.596 2.423-5.576 6.995-8.723 5.901">
                </path>
                <path fill="none" stroke="" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                    stroke-width="1.1707"
                    d="M8.723 0.835c0.57 2.31 2.548 6.946 5.901 7.014M8.723 10.243c0.656 2.166 3.096 6.363 7.611 5.815M8.723 20.505c1.596 2.423 5.576 6.995 8.723 5.901">
                </path>
            </symbol>
            <symbol id="big-tree" viewBox="0 0 18 32">
                <path fill="none" stroke="" style="" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                    stroke-width="0.8276" d="M9.22 32v-31.69"></path>
                <path fill="none" stroke="" style="" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                    stroke-width="0.8276"
                    d="M9.22 0.543c-0.575 2.331-2.572 7.011-5.956 7.079M9.22 10.039c-0.662 2.187-3.125 6.422-7.682 5.87M9.22 20.397c-1.611 2.446-5.628 7.061-8.805 5.956">
                </path>
                <path fill="none" stroke="" style="" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                    stroke-width="0.8276"
                    d="M9.22 0.543c0.575 2.331 2.572 7.011 5.956 7.079M9.22 10.039c0.662 2.187 3.125 6.422 7.682 5.87M9.22 20.397c1.611 2.446 5.628 7.061 8.805 5.956">
                </path>
            </symbol>
        </svg>