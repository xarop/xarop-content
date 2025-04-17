<?php

if (!get_option('xarop_enable_gutenberg', '1')) {
    // Disable Gutenberg for all post types
    add_filter('use_block_editor_for_post_type', '__return_false', 10);
}
