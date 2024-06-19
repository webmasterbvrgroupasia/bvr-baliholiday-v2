/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",],
  theme: {
    extend: {},
    screens: {
      'tablet': '768px',
      'laptop': '1024px',
      'laptop-l': '1440px',
      'desktop': '1920px',
    }
  },
  plugins: [],
}

