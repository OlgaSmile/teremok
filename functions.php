<?php
if (!function_exists('wp_teremok_setup')) {
    function wp_teremok_setup()
    {
        add_theme_support(
            'custom-logo',
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

    wp_enqueue_script('jquery');
    wp_enqueue_script('swiper-scripts', 'https://cdn.jsdelivr.net/npm/swiper@10.0.0/swiper-bundle.min.js', array(), false, true);
    wp_enqueue_script('wp-teremok-scripts', get_template_directory_uri() . '/assets/scripts/main.js', array(), false, true);
    wp_enqueue_script('masonry-scripts', 'https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js', array(), false, true);

    wp_enqueue_script('show-images-mobile-script', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/show-images-mobile.js', array(), false, true);

    if (is_page_template('templates/home.php')) {
        wp_enqueue_style('home-style', get_template_directory_uri() . '/assets/styles/template-styles/home.css', array('main'));
        wp_enqueue_script('home-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/home.js', array(), false, true);
        wp_enqueue_script('blog-section-script', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/blog-section.js', array(), false, true);
    }
    if (is_singular() && locate_template('template-parts/logo.php')) {
        wp_enqueue_style('logo-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/logo.css', array('main'));
    }
    if (is_singular() && locate_template('template-parts/hero.php')) {
        wp_enqueue_style('hero-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/hero.css', array('main'));
        wp_enqueue_script('hero-script', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/hero.js', array(), false, true);
    }
    if (is_singular() && locate_template('template-parts/gallery-section.php')) {
        wp_enqueue_script('gallery-script', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/gallery.js', array(), false, true);
    }
    if (is_singular() && locate_template('template-parts/feedbacks-section.php')) {
        wp_enqueue_style('feedbacks-section-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/feedbacks-section.css', array('main'));
        wp_enqueue_script('feedbacks-section-script', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/feedbacks-section.js', array(), false, true);
    }
    if (is_singular() && locate_template('template-parts/one-feedback.php')) {
        wp_enqueue_style('one-feedback-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/one-feedback.css', array('main'));
        wp_enqueue_script('one-feedback-script', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/one-feedback.js', array(), false, true);
    }
    if (is_singular() && locate_template('template-parts/apartments.php')) {
        wp_enqueue_style('apartments-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/apartments.css', array('main'));
    }
    if (is_singular() && locate_template('template-parts/one-apartment.php')) {
        wp_enqueue_style('one-apartment-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/one-apartment.css', array('main'));
        wp_enqueue_script('one-apartment-script', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/one-apartment.js', array(), false, true);
    }
    if (is_singular() && locate_template('template-parts/feedback-form.php')) {
        wp_enqueue_style('feedback-form-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/feedback-form.css', array('main'));
        wp_enqueue_script('feedback-form-script', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/feedback-form.js', array(), false, true);
        wp_localize_script('feedback-form-script', 'myAjax', array('ajaxurl' => admin_url('admin-ajax.php')));
    }
    if (is_singular() && locate_template('templates/home/location-section.php')) {
        wp_enqueue_style('location-section-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/location-section.css', array('main'));
    }
    if (is_singular() && locate_template('templates/food.php')) {
        wp_enqueue_style('food-page-styles', get_template_directory_uri() . '/assets/styles/template-styles/food.css', array('main'));
    }
    if (is_singular() && locate_template('templates/blogs.php')) {
        wp_enqueue_style('blogs-page-styles', get_template_directory_uri() . '/assets/styles/template-styles/blog.css', array('main'));
    }
    if (is_singular() && locate_template('template-parts/search-reserv.php')) {
        wp_enqueue_script('booking-search-scripts', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/booking-search.js', array(), false, true);
    }
    if (is_singular() && locate_template('templates/accommodations.php')) {
        wp_enqueue_script('accommodations-scripts_decor', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/accommodations_decor.js', array(), false, true);
        wp_enqueue_script('accommodations-scripts', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/accommodations.js', array(), false, true);
        wp_enqueue_script('accommodations-single-scripts', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/accommodations-single.js', array(), false, true);
        wp_enqueue_script('accommodations-booking-scripts', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/accommodations-booking.js', array(), false, true);
        wp_enqueue_style('feedback-form-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/feedback-form.css', array('main'));
        wp_enqueue_style('accommodations-style', get_template_directory_uri() . '/assets/styles/template-styles/accommodations.css', array('main'));
        wp_enqueue_style('accommodations-single-style', get_template_directory_uri() . '/assets/styles/template-styles/accommodations-single.css', array('main'));
        wp_enqueue_style('accommodations-booking-style', get_template_directory_uri() . '/assets/styles/template-styles/accommodations-booking.css', array('main'));
    }
    if (is_singular() && locate_template('templates/activities.php')) {
        wp_enqueue_script('activityNearby-scripts', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/activityNearby.js', array(), false, true);
    }
    if (is_singular() && locate_template('templates/services.php')) {
        wp_enqueue_script('services-page-scripts', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/service-page.js', array(), false, true);
    }
    if (is_singular() && locate_template('templates/business.php')) {
        wp_enqueue_script('business-page-scripts', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/details-agreement-form.js', array('jquery'), false, true);

        wp_enqueue_style('intl-tel--style', 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css', array('main'), '17.0.8');

        wp_enqueue_script('intl-tel-script', "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js", array('jquery'), '17.0.8', true);

        // Зміна імені скрипта на 'business-page-scripts'
        wp_localize_script('business-page-scripts', 'businessAjax', array('ajaxurl' => admin_url('admin-ajax.php')));
    }
}

function subscribe_link_att()
{
    return get_template_part("template-parts/feedbacks-section");
}
add_shortcode('feedback', 'subscribe_link_att');

/** add fonts */
require get_template_directory() . '/services/fonts-register.php';

/** Register menus */
require get_template_directory() . '/services/menu-register.php';

/** ACF add options page */
require get_template_directory() . '/services/acf-options.php';

/** add thumbnail to each page */
add_theme_support('post-thumbnails');

/** add custom post types */
require get_template_directory() . '/services/custom-post-feedbacks.php';
require get_template_directory() . '/services/custom-post-apartments.php';
require get_template_directory() . '/services/custom-post-activities-nearby.php';
require get_template_directory() . '/services/custom-post-detalies.php';

/** acf form registration */
require get_template_directory() . '/services/feedback-form-register.php';

/** transliteration */
require get_template_directory() . '/services/transliteration.php';

/** register post types */

function register_post_types()
{
    register_post_type(
        'blogs',
        array(
            'label' => 'Blogs',
            'labels' => array(
                'name' => 'Blogs',
                'singular_name' => 'Blog',
                'add_new' => 'Add new blog',
                'add_new_item' => 'Add new blog',
                'edit_item' => 'Edit blog',
                'new_item' => 'New blog',
                'view_item' => 'View blog',
                'search_items' => 'Search blogs',
                'not_found' => 'No blogs found',
            ),
            'public' => true,
            'show_in_rest' => false,
            'rewrite' => array('slug' => 'blogs'),
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        )
    );
}

add_action('init', 'register_post_types');

function calculate_nights_and_format_checkin($checkin_date, $checkout_date)
{
    // Перетворюємо дати з рядка у форматі 'd/m/Y' до об'єктів DateTime
    $checkin = DateTime::createFromFormat('d/m/Y', $checkin_date);
    $checkout = DateTime::createFromFormat('d/m/Y', $checkout_date);

    // Перевіряємо, чи обидві дати правильно створені
    if ($checkin === false || $checkout === false) {
        return false;
    }

    // Перевіряємо, чи дата виїзду більша за дату заїзду
    if ($checkout <= $checkin) {
        return false;
    }

    // Рахуємо різницю між датами у кількості ночей
    $interval = $checkin->diff($checkout);
    $nights = $interval->days;

    // Форматуємо дату заїзду
    $formatted_checkin = date_i18n('F Y', $checkin->getTimestamp());

    // Повертаємо результат як масив
    return [
        'nights' => $nights,
        'checkin_date_formatted' => $formatted_checkin,
    ];
}

function feedback_section_shortcode()
{
    ob_start();

    get_template_part('template-parts/feedbacks-section');

    return ob_get_clean();
}
add_shortcode('feedback_section', 'feedback_section_shortcode');

function location_section_shortcode()
{
    ob_start();
    get_template_part('template-parts/location-section');

    return ob_get_clean();
}
add_shortcode('location_section', 'location_section_shortcode');


function custom_rewrite_rules()
{
    add_rewrite_rule(
        '^custom-page/([^/]*)/?',
        'index.php?custom_page=$matches[1]',
        'top'
    );
}
add_action('init', 'custom_rewrite_rules');

function custom_query_vars($vars)
{
    $vars[] = 'custom_page';
    return $vars;
}
add_filter('query_vars', 'custom_query_vars');




function render_template_for_step()
{
    // Перевіряємо наявність параметра 'step' у запиті
    if (isset($_GET['step']) && $_GET['step'] === 'booking') {
        // Підключаємо спеціальний шаблон
        include get_template_directory() . '/templates/reservation-confirmed.php';
        exit; // Зупиняємо подальшу обробку WordPress
    }
}
add_action('template_redirect', 'render_template_for_step');
