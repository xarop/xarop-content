<?php

/**
 * Navigation Menus Setup
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
 * Register custom navigation walker
 */
function register_custom_walker()
{
    require_once XAROP_DIR . '/inc/classes/Walker/Nav_Menu_Walker.php';
}
add_action('after_setup_theme', __NAMESPACE__ . '\\register_custom_walker');

/**
 * Add custom classes to navigation menu items
 *
 * @param array $classes Array of CSS classes.
 * @param object $item Menu item object.
 * @param object $args Menu arguments.
 * @return array Modified array of CSS classes
 */
function nav_menu_css_class($classes, $item, $args)
{
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active';
    }

    if (in_array('menu-item-has-children', $classes)) {
        $classes[] = 'dropdown';
    }

    return $classes;
}
add_filter('nav_menu_css_class', __NAMESPACE__ . '\\nav_menu_css_class', 10, 3);

/**
 * Add custom attributes to navigation menu items
 *
 * @param array $atts Array of attribute key-value pairs.
 * @param object $item Menu item object.
 * @param object $args Menu arguments.
 * @return array Modified array of attributes
 */
function nav_menu_link_attributes($atts, $item, $args)
{
    if (!empty($item->classes) && in_array('menu-item-has-children', $item->classes)) {
        $atts['class'] = (!empty($atts['class'])) ? $atts['class'] . ' dropdown-toggle' : 'dropdown-toggle';
        $atts['data-toggle'] = 'dropdown';
        $atts['aria-haspopup'] = 'true';
        $atts['aria-expanded'] = 'false';
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', __NAMESPACE__ . '\\nav_menu_link_attributes', 10, 3);
