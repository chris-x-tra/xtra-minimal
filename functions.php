<?php
function my_custom_theme_enqueue_styles() {
    // Enqueue the main stylesheet
    wp_enqueue_style('my-custom-theme-style', get_stylesheet_uri());	// style.css
    wp_enqueue_style('my-theme-extra-style', get_theme_file_uri('headermenu.css') );
}

add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_styles');

function my_custom_theme_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'my_custom_theme_setup');

// Function to add the site title to the head section
function my_custom_theme_wp_title() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'my_custom_theme_wp_title');
?>
