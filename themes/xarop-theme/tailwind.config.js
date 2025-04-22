module.exports = {
    content: [
        './*.php',
        './template-parts/**/*.php',
        './resources/js/**/*.js',
        './resources/scss/**/*.scss',
        './assets/js/**/*.js',
        './assets/css/**/*.css'
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: '#0073aa',
                    dark: '#006291',
                },
                secondary: {
                    DEFAULT: '#23282d',
                    light: '#2c3338',
                }
            },
            typography: {
                DEFAULT: {
                    css: {
                        color: '#23282d',
                        a: {
                            color: '#0073aa',
                            '&:hover': {
                                color: '#006291',
                            },
                        },
                    },
                },
            },
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
    ],
}; 