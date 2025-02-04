/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php", // If using Blade templates
    "./resources/**/*.js",        // JavaScript files
    "./resources/**/*.vue",       // Vue.js components
    "./index.html",             // If you have an index.html
    "./src/**/*.{html,js,vue}"
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

