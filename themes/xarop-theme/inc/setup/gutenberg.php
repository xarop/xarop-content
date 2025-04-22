<?php

/**
 * Gutenberg Setup
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
 * Add custom block categories
 *
 * @param array $categories Array of block categories.
 * @return array Modified array of block categories
 */
function block_categories($categories)
{
    return array_merge(
        $categories,
        [
            [
                'slug'  => 'xarop',
                'title' => __('Xarop Blocks', 'xarop-theme'),
                'icon'  => 'wordpress',
            ],
        ]
    );
}
add_filter('block_categories_all', __NAMESPACE__ . '\\block_categories', 10, 1);

/**
 * Add custom block styles
 *
 * @return void
 */
function register_block_styles()
{
    register_block_style(
        'core/paragraph',
        [
            'name'         => 'fancy-paragraph',
            'label'        => __('Fancy Style', 'xarop-theme'),
            'inline_style' => '.is-style-fancy-paragraph { font-family: "Playfair Display", serif; font-size: 1.25em; }',
        ]
    );

    register_block_style(
        'core/heading',
        [
            'name'         => 'underline-heading',
            'label'        => __('Underline Style', 'xarop-theme'),
            'inline_style' => '.is-style-underline-heading { border-bottom: 2px solid currentColor; display: inline-block; }',
        ]
    );
}
add_action('init', __NAMESPACE__ . '\\register_block_styles');

/**
 * Add custom color palette
 *
 * @return void
 */
function setup_theme_colors()
{
    add_theme_support('editor-color-palette', [
        [
            'name'  => __('Primary', 'xarop-theme'),
            'slug'  => 'primary',
            'color' => '#0073aa',
        ],
        [
            'name'  => __('Secondary', 'xarop-theme'),
            'slug'  => 'secondary',
            'color' => '#23282d',
        ],
        [
            'name'  => __('Light Gray', 'xarop-theme'),
            'slug'  => 'light-gray',
            'color' => '#f8f9fa',
        ],
        [
            'name'  => __('Dark Gray', 'xarop-theme'),
            'slug'  => 'dark-gray',
            'color' => '#343a40',
        ],
    ]);
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup_theme_colors');
