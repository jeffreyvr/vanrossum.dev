module.exports = {
    content: [
        './resources/views/*.blade.php',
        './resources/views/**/*.blade.php',
        './resources/views/vendor/**/*.blade.php',
        './resources/css/**/*.css',
        './public/images/logos/*.svg',
        './public/images/icons/*.svg',
    ],
    theme: {
        fontFamily: {
            'sans': ['roc-grotesk', 'Helvetica', 'Arial', 'sans-serif'],
            'wide': ['roc-grotesk-wide', 'Helvetica', 'Arial', 'sans-serif'],
        },
        extend: {
            colors: {
                primary: '#070C80',
                secondary: '#04FA90'
            }
        }
    },
    variants: {},
    plugins: []
}
