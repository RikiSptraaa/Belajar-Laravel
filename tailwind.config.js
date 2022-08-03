module.exports = {
  content: ["./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue",
  './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php'],
  theme: {
    container: {
      center: true,
      padding: '16px',
    },
    extend: {
      fontFamily : {
        inter: ['Inter']
      },
      screens: {
        '2xl': '1320px',
      },
    },
  },
  plugins: [],
}
