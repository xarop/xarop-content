const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.setPublicPath('./assets');

mix.js('resources/js/app.js', 'js')
    .sass('resources/scss/app.scss', 'css')
    .options({
        processCssUrls: false,
        postCss: [
            tailwindcss('./tailwind.config.js'),
        ],
    })
    .browserSync({
        proxy: 'http://localhost',
        files: [
            './**/*.php',
            './assets/js/**/*.js',
            './assets/css/**/*.css'
        ]
    })
    .version();

// Disable mix-manifest.json generation
Mix.manifest.refresh = _ => void 0; 