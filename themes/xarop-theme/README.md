# Xarop Theme

A modern, lightweight, and semantic WordPress theme built with Tailwind CSS and modern development tools.

## Features

- Modern development workflow with Laravel Mix
- Tailwind CSS for utility-first styling
- SCSS support with organized structure
- JavaScript ES6+ support
- Custom Gutenberg blocks and styles
- Responsive navigation with dropdown support
- Optimized asset loading
- Semantic HTML5 markup

## Requirements

- WordPress 5.9 or higher
- PHP 7.4 or higher
- Node.js 14 or higher
- npm or yarn

## Installation

1. Clone this repository to your WordPress themes directory:
```bash
git clone https://github.com/xarop/xarop-theme.git
```

2. Install dependencies:
```bash
npm install
```

3. Build assets:
```bash
npm run build
```

4. Activate the theme in WordPress admin panel.

## Development

- Run development server with hot reload:
```bash
npm run dev
```

- Build for production:
```bash
npm run build
```

- Lint JavaScript and SCSS:
```bash
npm run lint
```

## Theme Structure

```
xarop-theme/
├── assets/           # Compiled assets
├── inc/             # PHP includes
│   ├── classes/     # PHP classes
│   └── setup/       # Theme setup files
├── resources/       # Source files
│   ├── js/         # JavaScript files
│   └── scss/       # SCSS files
├── functions.php    # Theme functions
├── index.php       # Main template file
└── style.css       # Theme metadata
```

## Customization

### Colors
Edit `resources/scss/_variables.scss` to customize theme colors and other variables.

### Typography
The theme uses system fonts by default, with Playfair Display for headings. You can customize fonts in `resources/scss/_variables.scss`.

### Blocks
Custom Gutenberg blocks and styles are defined in `inc/setup/gutenberg.php`.

## License

MIT License - see LICENSE file for details. 