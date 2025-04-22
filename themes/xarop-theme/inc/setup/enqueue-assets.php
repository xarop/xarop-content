<?php

/**
 * Asset Enqueuing
 *
 * @category Setup
 * @package  Xarop
 * @author   Xarop Team <team@xarop.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/xarop/xarop-theme
 */

namespace Xarop\Setup;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Enqueue theme styles and scripts
 */
function enqueue_assets()
{
    // Enqueue styles
    wp_enqueue_style(
        'xarop-styles',
        XAROP_URI . '/assets/css/app.css',
        [],
        XAROP_VERSION
    );

    // Enqueue scripts
    wp_enqueue_script(
        'xarop-scripts',
        XAROP_URI . '/assets/js/app.js',
        ['jquery'],
        XAROP_VERSION,
        true
    );

    // Localize script
    wp_localize_script(
        'xarop-scripts',
        'xaropData',
        [
            'ajaxUrl' => admin_url('admin-ajax.php'),
            'nonce'   => wp_create_nonce('xarop-nonce'),
        ]
    );
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_assets');

/**
 * Enqueue editor assets
 */
function enqueue_editor_assets()
{
    add_editor_style('assets/css/app.css');
}
add_action('admin_init', __NAMESPACE__ . '\\enqueue_editor_assets');
