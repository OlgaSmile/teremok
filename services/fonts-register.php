<?php

add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

function add_google_fonts() {
  wp_enqueue_style( 'google_web_fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@200;400;500;600&family=Montserrat:wght@200;400;500;600;700&family=Roboto:wght@400;700&display=swap', [], null );
}
 