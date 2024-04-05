module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/*.blade.php',
        './resources/**/*.vue',
        './resources/**/*.js',
        './content/**/*.md'
    ],
    theme: {
        fontFamily: {
            'sans': ['roc-grotesk', 'Helvetica', 'Arial', 'sans-serif'],
            'wide': ['roc-grotesk-wide', 'Helvetica', 'Arial', 'sans-serif'],
            'extrawide': ['roc-grotesk-extrawide', 'Helvetica', 'Arial', 'sans-serif'],
        },
        fontSize: {
            xs: ['16px', '29px'],
            sm: ['18px', '20px'],
            base: ['20px', '39px'],
            lg: ['24px', '36px'],
            xl: ['30px', '46px'],
            '2xl': ['45px', '64px'],
            '3xl': ['55px', '64px'],
        },
        screens: {
            'sm': '640px',
            'md': '768px',
            'lg': '1024px',
            '2lg': '1100px',
            'xl': '1280px'
        },
        container: {
            center: true,
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '3rem',
                xl: '0rem'
            },
        },
        extend: {
            colors: {
                primary: '#1a008b',
                secondary: '#02fb90',
                dark: '#080058'
            },
            listStyleType: {
                square: 'square',
            },
            animation: {
                'spin-slow': 'spin 10s linear infinite',
            }
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
    ],
}
