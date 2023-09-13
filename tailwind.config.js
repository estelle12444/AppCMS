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
        },
        animation: {
            marquee: 'marquee 35s linear infinite',
            marquee2: 'marquee2 35s linear infinite',
          },
          keyframes: {
            marquee: {
              '0%': { transform: 'translateX(0%)' },
              '100%': { transform: 'translateX(-100%)' },
            },
            marquee2: {
              '0%': { transform: 'translateX(100%)' },
              '100%': { transform: 'translateX(0%)' },
            },
          },
    },
    animatecss: {
        prefix: 'custom-animation'
      },


  },
  plugins: [
    require('flowbite/plugin')({
        charts: true,
    }),
    require('tailwind-animatecss')

  ],
}

