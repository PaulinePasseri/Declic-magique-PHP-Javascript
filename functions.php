<?php
function declic_enqueue_assets() {
    // CSS
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css');

    // JS
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/app.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'declic_enqueue_assets');
add_theme_support('post-thumbnails');
?>