# WordPress wp-content Directory

This repository contains the `wp-content` directory for the WordPress site. It includes custom themes, must-use plugins, and other essential files, while excluding unnecessary or sensitive directories.

## Included Content

- **mu-plugins**: Must-use plugins, including the `xarop-plugin`.
- **themes**: Custom themes (excluding default `twenty***` themes).
- **other directories/files**: Any additional files or directories not explicitly ignored.

## Excluded Content

The following directories and files are excluded from this repository as specified in the `.gitignore` file:

- `plugins/`: The standard plugins directory.
- `themes/twenty*/`: Default WordPress themes (e.g., Twenty Twenty-One, Twenty Twenty-Two).
- `uploads/`: Media uploads directory.
- `upgrade/`: Temporary files used during WordPress updates.
- System files such as `.log`, `.tmp`, `.DS_Store`, and `Thumbs.db`.

## How to Use

1. Clone this repository into the `wp-content` directory of your WordPress installation:
   ```bash
   git clone https://github.com/xarop/xarop-content.git wp-content