<?php

add_action('wp_enqueue_scripts', 'add_google_fonts');

function add_google_fonts()
{
    wp_enqueue_style('google_web_fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@200;400;500;600&family=Montserrat:wght@200;400;500;600;700&family=Roboto:wght@400;700&display=swap', [], null);
    wp_enqueue_style('google_web_Marck_fonts', 'https://fonts.googleapis.com/css2?family=Marck+Script&display=swap', [], null);
    wp_enqueue_style('google_web_Nunito_sans', 'https: //fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap', [], null);
}
