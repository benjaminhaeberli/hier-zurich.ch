/**
 * Referencing the default theme
 * @link https://tailwindcss.com/docs/theme#referencing-the-default-theme
 */
const defaultTheme = require('tailwindcss/defaultTheme')

/** @type {import('tailwindcss').Config} */
export default {
    content: ['./app/**/*.{view.php,html,js,css}', './assets/**/*.{view.php,html,js,css}'],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Roboto Condensed', 'Helvetica', ...defaultTheme.fontFamily.sans],
                // serif: ['Crimson Pro', ...defaultTheme.fontFamily.serif],
            },
        },
    },
    plugins: [],
}
