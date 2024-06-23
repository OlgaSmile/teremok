<?php
if (!function_exists('wp_teremok_setup')) {
    function wp_teremok_setup()
    {
        add_theme_support('custom-logo',
            array(
                'height' => 64,
                'width' => 64,
                'flex-width' => true,
                'flex-height' => true,
            )
        );
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'wp_teremok_setup');
}

/**
 * Enqueue scripts and styles.
 */
add_action('wp_enqueue_scripts', 'wp_teremok_scripts');

function wp_teremok_scripts()
{
    wp_enqueue_style('main', get_stylesheet_uri());
    wp_enqueue_style('wp-teremok-style', get_template_directory_uri() . '/assets/styles/main.css', array('main'));
    wp_enqueue_style('swiper-style', "https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css", array('main'));

    wp_enqueue_script('swiper-scripts', 'https://cdn.jsdelivr.net/npm/swiper@10.0.0/swiper-bundle.min.js', array(), false, true);
    wp_enqueue_script('wp-teremok-scripts', get_template_directory_uri() . '/assets/scripts/main.js', array(), false, true);

    if (is_page_template('templates/home.php')) {
        wp_enqueue_style('home-style', get_template_directory_uri() . '/assets/styles/template-styles/home.css', array('main'));
        wp_enqueue_script('home-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/home.js', array(), false, true);
    }

    if (is_page_template('templates/about.php')) {
        wp_enqueue_style('about-style', get_template_directory_uri() . '/assets/styles/template-styles/about.css', array('main'));
        wp_enqueue_script('about-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/about.js', array(), false, true);
    }

    if (is_singular() && locate_template('template-parts/section-title.php')) {
        wp_enqueue_style('section-title-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/section-title.css', array('main'));
    }

    if (is_singular() && locate_template('template-parts/logo.php')) {
        wp_enqueue_style('logo-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/logo.css', array('main'));
    }

    if (is_singular() && locate_template('template-parts/read-more-btn.php')) {
        wp_enqueue_style('read-more-btn-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/read-more-btn.css', array('main'));
    }

    if (is_singular() && locate_template('template-parts/feedbacks-section.php')) {
        wp_enqueue_style('feedbacks-section-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/feedbacks-section.css', array('main'));
        wp_enqueue_script('feedbacks-section-script', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/feedbacks-section.js', array(), false, true);
        //  wp_localize_script('feedbacks-section-script', 'feedbackAjax', array(
        //       'ajaxUrl' => admin_url('admin-ajax.php'),
        //       'nonce'   => wp_create_nonce('feedbacks_nonce'),
        //       'hide_btn'=> get_field("hide_btn", "option"),
        //       'read_btn'=> get_field("read_more_btn", "option")
        //     ));
    }

    if (is_singular() && locate_template('template-parts/one-feedback.php')) {
        wp_enqueue_style('one-feedback-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/one-feedback.css', array('main'));
        wp_enqueue_script('one-feedback-script', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/one-feedback.js', array(), false, true);
    }

    if (is_singular() && locate_template('template-parts/loader.php')) {
        wp_enqueue_style('loader-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/loader.css', array('main'));
    }

    if (is_singular() && locate_template('template-parts/feedback-form.php')) {
        wp_enqueue_style('feedback-form-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/feedback-form.css', array('main'));
        wp_enqueue_script('feedback-form-script', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/feedback-form.js', array(), false, true);
    }
    if (is_singular() && locate_template('templates/home.php')) {
        wp_enqueue_style('services-section-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/main-page.css', array('main'));
        wp_enqueue_script('services-section-script', get_template_directory_uri() . '/assets/scripts/template-scripts/home.js', array(), false, true);
    }

}
/** add fonts */
require get_template_directory() . '/services/fonts-register.php';

/** Register menus */
require get_template_directory() . '/services/menu-register.php';

/** ACF add options page */
require get_template_directory() . '/services/acf-options.php';

/** add thumbnail to each page */
add_theme_support('post-thumbnails');

/** add guttenberg blocks support */
require_once get_template_directory() . "/blocks/blocks_init.php";

/** add custom post types */
require get_template_directory() . '/services/custom-post-feedbacks.php';

/** acf form registration */
require get_template_directory() . '/services/feedback-form-register.php';

/** transliteration */
require get_template_directory() . '/services/transliteration.php';
