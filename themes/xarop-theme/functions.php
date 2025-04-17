<?php
// Enqueue styles and scripts
function xarop_theme_enqueue_assets()
{
    wp_enqueue_style('xarop-style', get_template_directory_uri() . '/assets/css/style.css', [], '1.0', 'all');
    wp_enqueue_script('xarop-script', get_template_directory_uri() . '/assets/js/script.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'xarop_theme_enqueue_assets');

// Add theme support for Gutenberg and other features
function xarop_theme_setup()
{
    // Add support for dynamic title tag
    add_theme_support('title-tag');

    // Add support for post thumbnails
    add_theme_support('post-thumbnails');

    // Add support for Gutenberg wide and full alignments
    add_theme_support('align-wide');

    // Add support for editor styles
    add_theme_support('editor-styles');
    add_editor_style('assets/css/style.css');
    add_editor_style('assets/css/editor-style.css');
}
add_action('after_setup_theme', 'xarop_theme_setup');
