/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './index.php',
    './views/**/*.php',
    './components/**/*.php',
    './scripts/**/*.js'
  ],
  theme: {
    extend: {
      fontFamily: {
        bannerFont: ['Roboto Mono', 'monospace']
      }
    }
  },
  plugins: []
}
