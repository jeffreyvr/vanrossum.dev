import typography from '@tailwindcss/typography';
import aspectRatio from '@tailwindcss/aspect-ratio';

export default {
    darkMode: 'selector',

    content: [
        './resources/**/*.blade.php',
        './resources/*.blade.php',
        './resources/**/*.vue',
        './resources/**/*.js',
        './content/**/*.md'
    ],
    theme: {
        fontFamily: {
            'sans': ['Manrope', 'Helvetica', 'Arial', 'sans-serif'],
            'display': ['roc-grotesk', 'Helvetica', 'Arial', 'sans-serif'],
            'wide': ['roc-grotesk-wide', 'Helvetica', 'Arial', 'sans-serif'],
            // 'extrawide': ['roc-grotesk-extrawide', 'Helvetica', 'Arial', 'sans-serif'],
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
            // padding: {
            //     DEFAULT: '1rem',
            //     sm: '2rem',
            //     lg: '3rem',
            //     xl: '0rem'
            // },
        },
        extend: {
            colors: {
                primary: '#1a008b',
                secondary: '#02fb90',
                // dark: '#080058'
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
        typography,
        aspectRatio,
    ],
}
