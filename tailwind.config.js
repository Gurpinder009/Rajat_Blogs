module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      gridAutoRows: {
        '4em': 'minmax(0, 3.4em)'
      },
      width: {
        '120': '30rem',
      },
      height:{
        "120":"26rem"
      }
    },
  },
  plugins: [],
}
