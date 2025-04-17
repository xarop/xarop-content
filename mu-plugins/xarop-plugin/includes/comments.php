<?php

// Check if the "Enable Comments" option is disabled
if (!get_option('xarop_enable_comments', '1')) {
    // Disable comments on all post types
    add_action('admin_init', function () {
        // Remove the Comments menu from the admin dashboard
        remove_menu_page('edit-comments.php');

        // Disable support for comments and trackbacks for all post types
        foreach (get_post_types() as $post_type) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    });

    // Close comments on the front end and prevent pingbacks
    add_filter('comments_open', '__return_false', 20, 2);
    add_filter('pings_open', '__return_false', 20, 2);

    // Remove existing comments from being displayed on the front end
    add_filter('comments_array', '__return_empty_array', 10, 2);
}
