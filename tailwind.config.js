/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "node_modules/preline/dist/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                manrope: ['Manrope', 'sans-serif'], // Add Manrope font here
            },
        },
    },
    plugins: [require("preline/plugin")],
};
