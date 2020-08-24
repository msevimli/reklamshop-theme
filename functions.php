<?php

// register front style
add_action('wp_enqueue_scripts', 'front_require_styles');

function front_require_styles()
{
    wp_enqueue_style('front-style', get_stylesheet_directory_uri().'/assets/css/front-style.css', true, 1.0);
}