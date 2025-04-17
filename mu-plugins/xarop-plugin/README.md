# Xarop Plugin

A must-use WordPress plugin with modular features for head cleanup, admin customizations, and more.

## Features

- Clean up the `<head>` section by removing unnecessary WordPress outputs.
- Replace WordPress admin and login logos with a custom SVG logo.
- Add an options page for configuring:
  - Social media URLs
  - Google Maps API token
  - General site settings
- Disable comments site-wide.

## Installation

1. Copy the `xarop-plugin` folder to the `wp-content/mu-plugins` directory.
2. Ensure the `ENABLE_HEAD_CLEANUP` and `DISABLE_COMMENTS` constants are set as needed in `xarop-plugin.php`.

## License

MIT