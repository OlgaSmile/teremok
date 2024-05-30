<?php
if ( ! function_exists('wp_teremok_setup')) {
  function wp_teremok_setup() {
    add_theme_support( 'custom-logo', 
      array(
        'height'      => 64,
        'width'       => 64,
        'flex-width'  => true,
        'flex-height' => true,        
      )
    );
    add_theme_support( 'title-tag' );    
  }
  add_action( 'after_setup_theme', 'wp_teremok_setup' );
}

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'wp_teremok_scripts' );

function wp_teremok_scripts() {
  wp_enqueue_style( 'main', get_stylesheet_uri() );
  wp_enqueue_style( 'wp-teremok-style', get_template_directory_uri() . '/assets/styles/main.css', array('main') );
  wp_enqueue_script( 'wp-teremok-scripts', get_template_directory_uri() . '/assets/scripts/main.js', array(), false, true );

  if ( is_page_template('templates/home.php') ) {
    wp_enqueue_style( 'home-style', get_template_directory_uri() . '/assets/styles/template-styles/home.css', array('main') );
    wp_enqueue_script( 'home-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/home.js', array(), false, true );
  }

  if ( is_page_template('templates/about.php') ) {
    wp_enqueue_style( 'about-style', get_template_directory_uri() . '/assets/styles/template-styles/about.css', array('main') );
    wp_enqueue_script( 'about-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/about.js', array(), false, true );
  }

  if ( is_page_template('templates/contacts.php') ) {
    wp_enqueue_style( 'contacts-style', get_template_directory_uri() . '/assets/styles/template-styles/contacts.css', array('main') );
    wp_enqueue_script( 'contacts-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/contacts.js', array(), false, true );
  }

  if (is_singular() && locate_template('template-parts/section-title.php')) {
      wp_enqueue_style('one-activity', get_template_directory_uri() . '/assets/styles/template-parts-styles/section-title.css', array('main'));
    }
 
}
/** add fonts */
function add_google_fonts() {
  wp_enqueue_style( 'google_web_fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@200;400;500;600&family=Montserrat:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap', [], null );
}
 
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

/** Register menus */
function wp_teremok_menus() {
  $locations = array(
    'header' => __( 'Header Menu', 'wp-teremok' ),
    'footer' => __( 'Footer Menu', 'wp-teremok' ),
  );

  register_nav_menus( $locations );
}

add_action( 'init', 'wp_teremok_menus');


/** ACF add options page */
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
      'page_title'    => 'Theme General Settings',
      'menu_title'    => 'Theme Settings',
      'menu_slug'     => 'theme-general-settings',
      'capability'    => 'edit_posts',
      'redirect'      => false
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'Theme Header Settings',
      'menu_title'    => 'Header',
      'parent_slug'   => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'Theme Footer Settings',
      'menu_title'    => 'Footer',
      'parent_slug'   => 'theme-general-settings',
  ));
}

/** add thumbnail to each page */
add_theme_support( 'post-thumbnails' );

/** add guttenberg blocks support */
require_once get_template_directory(  ) . "/blocks/blocks_init.php";

/** add custom post types */
require get_template_directory() . '/services/custom-post-feedbacks.php';

/** acf form registration */
require get_template_directory() . '/services/feedback-form-register.php';