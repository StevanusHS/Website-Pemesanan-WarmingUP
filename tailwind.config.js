/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                'banner-judul': "URL('/public/img/banner.jpg')",
                'profile': "URL('/public/img/profile.jpg')",
                'kategori': "URL('/public/img/kategori.jpg)",
            },
            colors : {
                'footer' : '#232C33',
            }
        },
    },
    plugins: [],
};
