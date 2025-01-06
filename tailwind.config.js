import withMT from "@material-tailwind/html/utils/withMT";

/** @type {import('tailwindcss').Config} */
export default withMT({
    darkMode: "selector",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "node_modules/preline/dist/*.js",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#E63946",
                secondary: "#FFD700",
                night: "#242628",
                peach: "#f7d1bd",
                beige: "#FAF9F6",
                accent: "#A8D080",
                neutral: "#FFF4E1",
                text: "#333333",
                deep: "#121212",
                danger: "#FF3D00",
            },
            fontFamily: {
                barlow: ["Barlow", "sans-serif"],
                montserrat: ["Montserrat", "sans-serif"],
            },
        },
    },
    plugins: [require("preline/plugin")],
});
