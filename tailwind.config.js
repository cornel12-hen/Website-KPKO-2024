/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      'display': ['Bebas Neue', 'Montserrat', 'Helvetica', 'Oswald'],
      'display2': ['Montserrat', 'Bebas Neue', 'Helvetica', 'Oswald'],
      'display3': ['Poppins'],

      'body': ['"Open Sans"'],
    },
    extend: {
      fontFamily: {
        spotify: ['SpotifyMix', 'Bebas Neue'], // Tambahkan font-mu
      },
      colors: {
        'biru1': '#1D4899',
        'biru2': '#112A59',
        'coklat': '#555450',
        'biru3': '#29415F'
      },
      backgroundImage: {
        'radial-gradient': 'radial-gradient(circle, var(--tw-gradient-stops))',
      },
      keyframes: {
        moveUpLeft: {
          '0%': { transform: 'translate(0, 0)' },
          '20%': { transform: 'translate(-32px, -34px)' },
          '70%': { transform: 'translate(-32px, -34px)' },
          '100%': { transform: 'translate(0, 0)' },
        },
        colorChangeAndScaleUp: {
          '0%': { fill: '#555450' },
          '15%': { fill: '#555450', transform: 'scale(1)' },
          '22.5%': { fill: '#BCB6AA', transform: 'scale(1.5)'},
          '75%': { fill: '#BCB6AA', transform: 'scale(1.5)'},
          '82.5%': { fill: '#555450', transform: 'scale(1)'},
          '100%': { fill: '#555450' },
        },
      },
      animation: {
        'move-up-left': 'moveUpLeft 3s ease-in-out infinite',
        'color-change-scale-up': 'colorChangeAndScaleUp 3s ease-in-out infinite',
      },
    },
  },
  plugins: [
    function ({ addUtilities }) {
      addUtilities({
        '.no-drag': {
          '-webkit-user-drag': 'none',
        },
      });
    },
  ],
}

