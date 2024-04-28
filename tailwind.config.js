import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                transparent: "transparent",
                // primary: "#5540af",
                primary: "#65a30d",
                "primary-hover": "#76bd1e",
                "primary-focus": "#6eaf08",
                "primary-active": "#54880c",
                secondary: "#494649",
                outline: "#65a30d",
                white: "#ffffff",
                black: "#000000",
            }
        },
    },

    plugins: [forms],
};
