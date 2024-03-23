/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./assets/**/*.js", "./templates/**/*.html.twig"],
  theme: {
    extend: {
      fontFamily: {
        sans: ["Poppins", "sans-serif"],
        heading: ["FugazOne", "sans-serif"],
      },
      colors: {
        primary: "var(--color-primary)",
        success: "#D3DB4E",
        warning: "#FFC01F",
        danger: "#E94233",
      },
    },
  },
  plugins: [],
};
