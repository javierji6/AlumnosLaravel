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
                "10v":"10vh", //h-10v => style height:10vh
                "15v":"15vh",
                "65v":"65vh",
            },
            colors: {
                "header":"#BE0F34",
                "nav":"#FFFFFF",
                "main":"#DCE5F4",
                "footer":"#E5E5E5"
            },
        },
    },

    plugins: [forms, require("daisyui")],
};
