<?php

//Setting up the page
if (!function_exists('gc_setup')):
    function gc_setup() {
        // Let Wordpress Handle the title tags
        add_theme_support('title-tag');
    }
endif;
add_action('after_setup_theme', 'gc_setup');

//Register Menus
function register_gc_menus() {
    register_nav_menus(
        array(
            'primary' => __('Primary Menu'),
            'footer' => __('Footer Menu')
        )
    );
}
add_action('init', 'register_gc_menus');

//Add styles
function gc_scripts() {
    //Enqueue the main Stylesheet
    wp_enqueue_style('gc_styles', get_stylesheet_uri());
    //Enqueue normalize.css
    wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css');
}
add_action('wp_enqueue_scripts', 'gc_scripts');
