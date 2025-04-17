<?php

// Replace the WordPress login logo
add_action('login_enqueue_scripts', function () {
    echo '<style>
        .login h1 a {
            background-image: url("' . plugin_dir_url(__DIR__) . 'assets/logo.svg") !important;
    </style>';
});

// Replace the WordPress admin bar logo
add_action('admin_head', function () {
    echo '<style>
        #wp-admin-bar-wp-logo > .ab-item {
            display:none !important;
        }
    </style>';
});

// Replace the WordPress logo in the block editor toolbar
add_action('admin_enqueue_scripts', function () {
    wp_add_inline_style('wp-block-editor', '
        .edit-post-fullscreen-mode-close svg {
            display: none;
        }
        .edit-post-fullscreen-mode-close::before {
            content: "";
            display: inline-block;
            background-image: url("' . plugin_dir_url(__DIR__) . 'assets/logo.svg");
            background-size: contain;
            width: 36px;
            height: 36px;
        }
    ');
});
