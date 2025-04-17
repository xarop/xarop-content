<?php

add_action('admin_menu', function () {
    add_options_page(
        'Xarop Plugin Settings',
        'Xarop Settings',
        'manage_options',
        'xarop-plugin-settings',
        'xarop_plugin_settings_page'
    );
});

function xarop_plugin_settings_page()
{
?>
    <div class="wrap">
        <h1>Xarop Plugin Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('xarop_plugin_settings');
            do_settings_sections('xarop_plugin_settings');
            submit_button();
            ?>
        </form>
    </div>
<?php
}

add_action('admin_init', function () {
    // Register settings
    register_setting('xarop_plugin_settings', 'xarop_enable_comments');
    register_setting('xarop_plugin_settings', 'xarop_enable_head_cleanup');
    register_setting('xarop_plugin_settings', 'xarop_enable_gutenberg');
    register_setting('xarop_plugin_settings', 'xarop_google_maps_token');

    // Add settings section
    add_settings_section('xarop_general_settings', 'General Settings', null, 'xarop_plugin_settings');

    // Add settings fields
    add_settings_field(
        'xarop_enable_comments',
        'Enable Comments',
        'xarop_enable_comments_callback',
        'xarop_plugin_settings',
        'xarop_general_settings'
    );

    add_settings_field(
        'xarop_enable_head_cleanup',
        'Enable Head Cleanup',
        'xarop_enable_head_cleanup_callback',
        'xarop_plugin_settings',
        'xarop_general_settings'
    );

    add_settings_field(
        'xarop_enable_gutenberg',
        'Enable Gutenberg',
        'xarop_enable_gutenberg_callback',
        'xarop_plugin_settings',
        'xarop_general_settings'
    );

    // add_settings_field(
    //     'xarop_google_maps_token',
    //     'Google Maps API Token',
    //     'xarop_google_maps_token_callback',
    //     'xarop_plugin_settings',
    //     'xarop_general_settings'
    // );
});

// Callback for Enable Comments
function xarop_enable_comments_callback()
{
    $value = get_option('xarop_enable_comments', '1'); // Default to enabled
    echo '<input type="checkbox" name="xarop_enable_comments" value="1" ' . checked(1, $value, false) . '> Enable Comments';
}

// Callback for Enable Head Cleanup
function xarop_enable_head_cleanup_callback()
{
    $value = get_option('xarop_enable_head_cleanup', '1'); // Default to enabled
    echo '<input type="checkbox" name="xarop_enable_head_cleanup" value="1" ' . checked(1, $value, false) . '> Enable Head Cleanup';
}

// Callback for Enable Gutenberg
function xarop_enable_gutenberg_callback()
{
    $value = get_option('xarop_enable_gutenberg', '1'); // Default to enabled
    echo '<input type="checkbox" name="xarop_enable_gutenberg" value="1" ' . checked(1, $value, false) . '> Enable Gutenberg';
}

// Callback for Google Maps API Token
function xarop_google_maps_token_callback()
{
    $value = get_option('xarop_google_maps_token', '');
    echo '<input type="text" name="xarop_google_maps_token" value="' . esc_attr($value) . '" class="regular-text">';
}
