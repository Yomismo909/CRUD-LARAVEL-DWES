import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            height: {
                "10v": "10vh",
                "15v": "15vh",
                "20v": "20vh",
                "25v": "25vh",
                "30v": "30vh",
                "45v": "45vh",
                "50v": "50vh",
                "65v": "65vh",
                "70v": "70vh",
                "75v": "75vh",
                "80v": "80vh",
            },
            width: {
                "10v": "10vw",
                "15v": "15vw",
                "20v": "20vw",
                "25v": "25vw",
                "30v": "30vw",
                "45v": "45vw",
                "50v": "50vw",
                "65v": "65vw",
                "70v": "70vw",
                "75v": "75vw",
            },
            colors: {
                "primary": "#205896",
                "secondary": "#c9beab",
                "accent": "#f2e9e4",
                "primary-light": "#72a1e5"
            }
        },
    },

    plugins: [
        forms,
        require('daisyui'),
    ],
};
