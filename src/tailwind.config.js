/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            screens: {
                menu: "1000px",
            },
            fontFamily: {
                sans: ["Manrope", "sans-serif"],
            },
        },
    },
    plugins: [],
};
