const colors = require('tailwindcss/colors');
module.exports = {
    purge: {content: [
        "./index.php",
        "./src/**/*.{vue,js,ts,jsx,tsx,tpl}",
    ]},
  theme: {
    extend: {
        /*screens: {
            '2xl': {'max': '1535px'},
            // => @media (max-width: 1535px) { ... }

            'xl': {'max': '1279px'},
            // => @media (max-width: 1279px) { ... }

            'lg': {'max': '1023px'},
            // => @media (max-width: 1023px) { ... }

            'md': {'max': '767px'},
            // => @media (max-width: 767px) { ... }

            'sm': {'max': '639px'},
            // => @media (max-width: 639px) { ... }
        },*/
        width: {
            '95/100': '95%',
        },
        colors: {
            "sky": {
                "50":"#f0f9ff",
                "100":"#e0f2fe",
                "200":"#bae6fd",
                "300":"#7dd3fc",
                "400":"#38bdf8",
                "500":"#0ea5e9",
                "600":"#0284c7",
                "700":"#0369a1",
                "800":"#075985",
                "900":"#0c4a6e"
            },
            black: colors.black,
            white: colors.white,
            rose: colors.rose,
            pink: colors.pink,
            fuchsia: colors.fuchsia,
            purple: colors.purple,
            violet: colors.violet,
            indigo: colors.indigo,
            blue: colors.blue,
            cyan: colors.cyan,
            teal: colors.teal,
            emerald: colors.emerald,
            green: colors.green,
            lime: colors.lime,
            yellow: colors.yellow,
            amber: colors.amber,
            orange: colors.orange,
            red: colors.red,
            gray: colors.gray
        }
    },
  },
  plugins: []
}
