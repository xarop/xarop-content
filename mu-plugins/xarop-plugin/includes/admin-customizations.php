<?php

// Replace the login screen logo
add_action('login_enqueue_scripts', function () {
    echo '<style>
        .login h1 a {
            background-image: url("' . plugin_dir_url(__DIR__) . 'assets/logo.svg");
            background-size: contain;
            width: 100%;
            height: 80px;
        }
    </style>';
});

// Remove the WordPress logo from the admin bar
add_action('admin_head', function () {
    echo '<style>
        #wp-admin-bar-wp-logo {
            display: none;
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
