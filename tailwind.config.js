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
                light: '#A1ACBD',
                bittersweet: '#35A7FF',
                jet: '#F578A6',
                smoky: '#3D4756',
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
