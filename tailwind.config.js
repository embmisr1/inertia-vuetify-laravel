const plugin = require('tailwindcss/plugin')
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require("tailwind-scrollbar"),
        plugin(function ({ addUtilities }) {
            addUtilities({
                ".rotate-y-180": {
                    transform: "rotateY(180deg)",
                },

                ".preserve-3d": {
                    transformStyle: "preserve-3d",
                },
                ".perspective": {
                    perspective: " 1000px",
                },
                ".backface-visibility": {
                    backfaceVisibility: "hidden",
                },
            });
        }),
    ],
    variants: {
        scrollbar: ["rounded"],
    },
};
