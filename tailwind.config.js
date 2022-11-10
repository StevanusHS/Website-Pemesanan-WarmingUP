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
                'button' : '#4B5DFF',
                'biru-kode': '#0066FF',
            },
            spacing : {
                '200' : '12rem',
                'kategori' : '7.8rem',
                '300' : '18.75rem',
                'card-promo' : '9.875rem',
            },
            fontSize : {
                '20' : '1.25rem',
            }
        },
    },
    plugins: [],
};
