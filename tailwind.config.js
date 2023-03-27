module.exports = {
  content: [
    './*.{php,js}',
    './admin/*.{php,js}',
    './student/*.{php,js}',
    './admin/**/*.{php,js}',
    './student/**/*.{php,js}',
  ],
  darkMode: 'media',
  theme: {
    extend: {
      fontFamily: {
        inter: ['Inter', 'sans-serif'],
      },
    },
  },
  variants: {
    extend: {
      display: ['group-hover'],
    },
  },
  plugins: [],
}
