import animations from '@midudev/tailwind-animations'
/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.vue',
    './resources/js/**/*.jsx',
  ],
  theme: {
    extend: {},
  },
  plugins: [animations],
}

