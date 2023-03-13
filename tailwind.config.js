/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        'primary': '#374165',
        'secondary': '#374FA7',
        'black': '#121926',
        'custom-gray': '#F6F6F6'
      }
    },
  },
  plugins: [],
}