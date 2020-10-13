module.exports = {
    purge: [
        './resources/views/**/*.blade.php',
        './resources/css/**/*.css',
        './public/images/logos/*.svg',
        './public/images/icons/*.svg',
    ],
    theme: {
        fontFamily: {
            'sans': ['Poppins', 'Helvetica', 'Arial', 'sans-serif'],
        },
        extend: {}
    },
    variants: {},
    plugins: []
}
