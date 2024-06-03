<?php

add_action( 'init', 'wp_teremok_menus');

function wp_teremok_menus() {
  $locations = array(
    'header' => __( 'Header Menu', 'wp-teremok' ),
    'footer' => __( 'Footer Menu', 'wp-teremok' ),
  );

  register_nav_menus( $locations );
}