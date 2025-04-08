<?php
/**
 * Plugin Name: Greeting Block
 * Description: A custom Gutenberg block for interactive greetings.
 * Version: 1.0.0
 * Author: Your Name
 */

function greeting_block_register_block() {
    wp_register_script(
        'greeting-block-js',
        plugins_url('build/index.js', __FILE__),
        array('wp-blocks', 'wp-element', 'wp-editor', 'wp-components'),
        filemtime(plugin_dir_path(__FILE__) . 'build/index.js')
    );
    wp_register_style(
        'greeting-block-style',
        plugins_url('build/style.css', __FILE__),
        array(),
        filemtime(plugin_dir_path(__FILE__) . 'build/style.css')
    );
    register_block_type('my-custom/greeting-block', array(
        'editor_script' => 'greeting-block-js',
        'style' => 'greeting-block-style',
    ));
}
add_action('init', 'greeting_block_register_block');