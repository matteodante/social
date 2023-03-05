const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    mode: 'jit',
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: [...defaultTheme.fontFamily.sans],
            },
            colors: {
                light: {
                  100: '#00AFF0',
                  300: '#0091EA',
                  400: '#0091EA',
                  500: '#0091EA',
                  800: '#00AFF080',
                },
                bondi: '#208AAE',
                //bittersweet: '#F87060',
                bittersweet: '#35A7FF',
                jet: '#2A2B2E',
                smoky: '#2A2B2E',
            },
        },
    },

    plugins: [
        require("@tailwindcss/aspect-ratio"),
        require("@tailwindcss/line-clamp"),
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require("prettier-plugin-tailwindcss"),
    ],
};
