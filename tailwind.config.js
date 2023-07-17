import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            'animation': {
                'text':'text 5s ease-in-out infinite',
            },
            'keyframes': {
                'text': {
                    '0%, 100%': {
                    'background-size':'200% 200%',
                        'background-position': 'left center'
                    },
                    '50%': {
                    'background-size':'200% 200%',
                        'background-position': 'right center'
                    }
                },
            },
        },
    },

    plugins: [forms, typography],
};
