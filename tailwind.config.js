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
                accent: "#A8D080",
                neutral: "#FFF4E1",
                text: "#333333",
                deep: "#121212",
            },
        },
    },
    plugins: [require("preline/plugin")],
});
