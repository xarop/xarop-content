<?php

/**
 * Plugin Name: Xarop Plugin
 * Description: A must-use plugin for WordPress with modular features.
 * Author: Your Name
 * Version: 1.0
 */

// Define constants for enabling/disabling features
define('ENABLE_HEAD_CLEANUP', true);
define('DISABLE_COMMENTS', true);

// Include feature modules
require_once __DIR__ . '/includes/cleanup.php';
require_once __DIR__ . '/includes/admin-customizations.php';
require_once __DIR__ . '/includes/options-page.php';
require_once __DIR__ . '/includes/comments.php';
