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
        "./node_modules/flowbite/**/*.js",
        "./node_modules/flowbite-vue/**/*.{js,jsx,ts,tsx}",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Arimo", "Rubik", "Open Sans", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                light: {
                  100: '#00AFF0',
                  300: '#0091EA',
                  400: '#0091EA',
                  500: '#0091EA',
                  800: '#00AFF080',
                },
            },
        },
    },

    plugins: [
        require("@tailwindcss/aspect-ratio"),
        require("@tailwindcss/line-clamp"),
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require("flowbite/plugin"),
        require("prettier-plugin-tailwindcss"),
    ],
};
