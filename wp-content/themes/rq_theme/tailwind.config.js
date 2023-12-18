/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./components/**/*.php",
    "./js/**/*.js",
    "./*.php",
  ],
  theme: {
    extend: {
      colors: {
        rqPurple: {
          DEFAULT: "#9C8FAB",
          darker: "#6F6080",

        },
        rqGreen: {
          DEFAULT: "#90ABA8",
          darker: "#557E79",
          saturated: "#71C9BF"
        },
        rqWhite: {
          DEFAULT: "#FFFFFF",
          Silver: "#E8EDED",
        },
        rqYEllow: {
          DEFAULT: "#DFCE7F",
          darker: "#AF9A3A",
        },
      },
      fontFamily: {
        rqInter: ["Inter", "sans-serif"],
        rqNunito: ["Nunito", "sans-serif"],
        rqNunitoSans: ["Nunito Sans", "sans-serif"],
      },
      screens: {
        '2xl': '1441px',
      },
    },
  },
  plugins: [],
};

