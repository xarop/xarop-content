# Xarop Plugin

A must-use WordPress plugin with modular features for head cleanup, admin customizations, Gutenberg control, and more.

## Features

- **Clean up the `<head>` section**: Remove unnecessary WordPress outputs like emoji scripts, RSD links, WLW manifest, etc.
- **Replace WordPress admin and login logos**: Use a custom SVG logo for branding.
- **Add an options page**: Configure the following settings:
  - Enable or disable comments site-wide.
  - Enable or disable head cleanup.
  - Enable or disable Gutenberg editor.
  - Social media URLs (Facebook, Twitter, Instagram, LinkedIn, etc.).
  - Google Maps API token.
- **Disable Gutenberg**: Optionally disable the Gutenberg editor for all post types.

## Installation

1. Copy the `xarop-plugin` folder to the `wp-content/mu-plugins` directory.
2. Ensure the required constants and settings are configured in the WordPress admin under **Settings > Xarop Settings**.

## Configuration

Navigate to **Settings > Xarop Settings** in the WordPress admin dashboard to configure the following options:

- **Enable Comments**: Toggle to enable or disable comments site-wide.
- **Enable Head Cleanup**: Toggle to enable or disable the cleanup of unnecessary `<head>` outputs.
- **Enable Gutenberg**: Toggle to enable or disable the Gutenberg editor.
- **Social Media URLs**: Add links to your social media profiles.
- **Google Maps API Token**: Add your Google Maps API token for integration.

## License

This plugin is licensed under the MIT License. See the LICENSE file for details.