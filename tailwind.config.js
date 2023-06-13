/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue"],
  theme: {
    extend: {

        backgroundImage: theme => ({

            'orange': "url('../../images/bg-orange.png')",
        }),
        colors: {

            'primary-one': '#F68800', //orange
            'primary-one-lite': '#FFC04C',
            'primary-two': '#00000', //black

          },

    },
  },
  plugins: [],
}

