/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundColor: {
        "dark": "#151C21",
      },
      gridTemplateColumns:{
        "auto": "400px auto"
      }
    },
  },
  plugins: [],
}