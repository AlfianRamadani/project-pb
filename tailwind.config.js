/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
              primary: "#3ed8ca",
              secondary: "#82bce6",
              accent: "#5f8cde",
              text: "#061d1b",
              background: "#ECF0F1",
            },
            fontFamily: {
              Poppins: ["Poppins", "sans-serif"],
              Lato: ["Lato", "sans-serif"],
              OpenSans: ["Open Sans", "sans-serif"],
              Roboto: ["Roboto", "sans-serif"],
            },
            keyframes:{
              startRight: {
                '0%': {
                  transform: 'translateX(50%)',
                },
                '100%': {
                  transform: 'translateX(-100%)',
                },
              },
        },
            animation: {
              startRight: 'startRight 20s linear infinite',
            },
          },
            },
    plugins: [
        require('preline/plugin'),
        function ({ addUtilities }) {
            addUtilities({
              '.animate-play': {
                'animation-play-state': 'running',
              },
              '.animate-pause': {
                'animation-play-state': 'paused',
              },
            });
          }
    ],
  }
