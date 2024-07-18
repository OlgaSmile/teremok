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