/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        aspectRatio: {
            '4/3': '4 / 3',
            '16/9': '16 / 9',
            '21/9': '21 / 9',
            '2/3': '2 / 3',
        },
        container: {
            center: true,
        }
    },
    animatecss: {
        prefix: 'custom-animation'
      }
  },
  plugins: [
    require('flowbite/plugin')({
        charts: true,
    }),
    require('tailwind-animatecss')

  ],
}

