module.exports = {
    content: [
        "./src/**/*.{html,js}",
        "./resources/**/*.blade.php"
    ],
    theme: {
        extend: {
            fontFamily: {
                'montserrat': ['"Montserrat"', 'sans-serif'],
                'awesome': ['"FontAwesome"'],
            },
            backgroundImage: theme => ({
                'hero-bg': "url('../../imgs/banner.svg')",
                'road-bg': "url('../../imgs/road.webp')",
                'cv-bg': "url('../../imgs/cv.webp')",
            }),

            colors: {
                'primary-one': '#38b6ff',
                'primary-two': '#2C91CC',
                'primary-three' : 'black',
                'primary-four':'#32A3E5',
            },

            animation: {
                'pulse': 'pulse 1s linear infinite',
            }
        },
    },
    plugins: [],
}
