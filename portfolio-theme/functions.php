<?php
function portfolio_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'portfolio-theme'),
    ));
    wp_enqueue_style('portfolio-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script('portfolio-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('after_setup_theme', 'portfolio_theme_setup');