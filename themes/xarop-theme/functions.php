<?php

/**
 * Theme functions and definitions
 *
 * @package Xarop
 */

// Define theme constants
define('XAROP_VERSION', '1.0.0');
define('XAROP_DIR', get_template_directory());
define('XAROP_URI', get_template_directory_uri());

// Autoload theme classes
spl_autoload_register(function ($class) {
    $prefix = 'Xarop\\';
    $base_dir = XAROP_DIR . '/inc/classes/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

// Load theme setup files
require_once XAROP_DIR . '/inc/setup/theme-setup.php';
require_once XAROP_DIR . '/inc/setup/enqueue-assets.php';
require_once XAROP_DIR . '/inc/setup/nav-menus.php';
require_once XAROP_DIR . '/inc/setup/gutenberg.php';
