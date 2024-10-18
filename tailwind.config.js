/**
 * Use fast-glob
 * @link https://stackoverflow.com/questions/71160737/tailwind-laravelmix-infinity-loop-on-watch
 */
const fastGlob = require('fast-glob')

/**
 * Referencing the default theme
 * @link https://tailwindcss.com/docs/theme#referencing-the-default-theme
 */
const defaultTheme = require('tailwindcss/defaultTheme')

/** @type {import('tailwindcss').Config} */
export default {
  content: fastGlob.sync([
    './assets/**/*.js',
    './assets/**/*.css',
    './partials/**/*.php',
    './public/**/*.php',
  ]),
  theme: {
    extend: {
      fontFamily: {
        sans: ['Roboto Condensed', 'Helvetica', ...defaultTheme.fontFamily.sans],
        // serif: ['Crimson Pro', ...defaultTheme.fontFamily.serif],
      },
      //   screens: {
      //     xs: '576px',
      //     sm: '640px',
      //     md: '768px',
      //     xmd: '896px',
      //     lg: '1024px',
      //     xl: '1280px',
      //     xxl: '1440px',
      //     '2xl': '1536px',
      //   },
    },
  },
  plugins: [],
}
