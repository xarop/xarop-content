<?php

/**
 * Theme Setup
 *
 * @package Xarop
 * @category Setup
 * @author Xarop
 * @license MIT
 * @link https://github.com/xarop/xarop-theme
 */

namespace Xarop\Setup;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Set up theme defaults and register support for various WordPress features.
 */
function theme_setup()
{
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Add support for full and wide align images
    add_theme_support('align-wide');

    // Add support for responsive embeds
    add_theme_support('responsive-embeds');

    // Add support for editor styles
    add_theme_support('editor-styles');

    // Add support for custom logo
    add_theme_support('custom-logo', [
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    // Register navigation menus
    register_nav_menus([
        'primary' => __('Primary Menu', 'xarop-theme'),
        'footer'  => __('Footer Menu', 'xarop-theme'),
    ]);

    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);
}
add_action('after_setup_theme', __NAMESPACE__ . '\\theme_setup');
