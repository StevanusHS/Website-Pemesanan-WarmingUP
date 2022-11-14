<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- navbar start -->
    <header class="bg-white shadow-lg fixed top-0 left-0 w-full flex items-center z-10 hover:bg-white">
        <div class="container max-w-full">
            <div class="flex items-center justify-between">
                <div class="px-4">
                    <a href="#" class="text-lg font-bold text-slate-900 block py-6">Warming Up</a>
                </div>
                <div class="flex items-center px-4">
                    <nav id="nav-menu" class="hidden py-5 bg-white dhadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="homeUser" class="text-base text-black py-2 mx-8 flex font-semibold group-hover:text-blue-500">Home</a>
                            </li>
                            <li class="group">
                                <a href="menu" class="text-base text-black py-2 mx-8 flex font-semibold group-hover:text-blue-500">Menu</a>
                            </li>
                            <li class="group">
                                <a href="promo" class="text-base text-black py-2 mx-8 flex font-semibold group-hover:text-blue-500">Promo</a>
                            </li>
                            <li class="group">
                                <a href="riwayat" class="text-base text-black py-2 mx-8 flex font-semibold group-hover:text-blue-500">Riwayat</a>
                            </li>
                            <li class="group">
                                <a href="favorite" class="text-base text-black py-2 mx-8 flex font-semibold group-hover:text-blue-500">Favorite</a>
                            </li>
                            <li class="group">
                                <a href="keranjang" class="py-2 mx-5 flex my-1.5 relative"><i class="fa-sharp fa-solid fa-cart-shopping"><span class="w-2 h-2 absolute text-xs bg-red-600 rounded-full top-0 right-0 text-white "></span></i></a>
                            </li>
                            <li class="group">
                                <a href="profile">
                                    <img class="h-10 w-10 flex rounded-full mx-3 shadow bg-cover" src={{ URL::asset('/img/profile.jpg') }} alt="profile">
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- navbar end -->
    <main>
        <!-- judul -->
        <section>
            <article>
                <div class="relative">
                    <img class="h-300 w-full object-cover" src={{ URL::asset('/img/banner.jpg') }} alt="">
                    <div class="absolute top-0 left-0 flex h-full w-full justify-center">
                        <p class="my-auto text-5xl font-semibold text-white pt-11">Promo</p>
                    </div>
                </div>
            </article>
            <!-- end judul -->
        </section>
        <section>
            <article>
                <!-- judul promo voucher -->
                <div class="w-full h-auto bg-transparent block">
                    <div class="max-w-3xl mx-auto h-auto mt-10 bg-white">
                        <div class="flex justify-between">
                            <p class="font-semibold text-xl mb-3">Promo voucher makanan</p>
                            <a href="#" class="font-semibold text-xl text-biru-kode">Masukin Kode</a>
                        </div>
                        <!-- card promo -->
                        <div class="grid grid-cols-2 gap-5">
                            <div class="max-w-sm h-card-promo shadow-lg rounded-lg border bg-white">
                                <div class="flex flex-col justify-around">
                                    <p class="font-bold m-4 text-20">Diskon 20%,maks.30rb</p>
                                    <div class="max-w-sm mx-3 pl-5 bg-white">
                                        <div class="flex justify-between">
                                            <p class="text-20">Khusus pembayaran <span class="font-semibold">Qris</span></p>
                                            <a href="#" class="p-1 hover:text-blue-500"><i class="fa-solid fa-check"></i></a>
                                        </div>
                                        <div class="flex justify-between">
                                            <p class="text-20">Berakhir 11 jam lagi! <a href="#" class="text-biru-kode">lihat detail</a></p>
                                            <a href="#" class="p-1 hover:text-blue-500"><i class="fa-solid fa-check"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="max-w-sm h-card-promo shadow-lg rounded-lg border bg-white">
                                <div class="flex flex-col justify-around">
                                    <p class="font-bold m-4 text-20">Diskon 20%,maks.30rb</p>
                                    <div class="max-w-sm mx-3 pl-5 bg-white">
                                        <div class="flex justify-between">
                                            <p class="text-20">Khusus pembayaran <span class="font-semibold">Qris</span></p>
                                            <a href="#" class="p-1  hover:text-blue-500"><i class="fa-solid fa-check"></i></a>
                                        </div>
                                        <div class="flex justify-between">
                                            <p class="text-20">Berakhir 11 jam lagi! <a href="#" class="text-biru-kode">lihat detail</a></p>
                                            <a href="#" class="p-1  hover:text-blue-500"><i class="fa-solid fa-check"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="max-w-sm h-card-promo shadow-lg rounded-lg border bg-white">
                                <div class="flex flex-col justify-around">
                                    <p class="font-bold m-4 text-20">Diskon 20%,maks.30rb</p>
                                    <div class="max-w-sm mx-3 pl-5 bg-white">
                                        <div class="flex justify-between">
                                            <p class="text-20">Khusus pembayaran <span class="font-semibold">Qris</span></p>
                                            <a href="#" class="p-1  hover:text-blue-500"><i class="fa-solid fa-check"></i></a>
                                        </div>
                                        <div class="flex justify-between">
                                            <p class="text-20">Berakhir 11 jam lagi! <a href="#" class="text-biru-kode">lihat detail</a></p>
                                            <a href="#" class="p-1  hover:text-blue-500"><i class="fa-solid fa-check"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="max-w-sm h-card-promo shadow-lg rounded-lg border bg-white">
                                <div class="flex flex-col justify-around">
                                    <p class="font-bold m-4 text-20">Diskon 20%,maks.30rb</p>
                                    <div class="max-w-sm mx-3 pl-5 bg-white">
                                        <div class="flex justify-between">
                                            <p class="text-20">Khusus pembayaran <span class="font-semibold">Qris</span></p>
                                            <a href="#" class="p-1  hover:text-blue-500"><i class="fa-solid fa-check"></i></a>
                                        </div>
                                        <div class="flex justify-between">
                                            <p class="text-20">Berakhir 11 jam lagi! <a href="#" class="text-biru-kode">lihat detail</a></p>
                                            <a href="#" class="p-1 hover:text-blue-500"><i class="fa-solid fa-check"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="max-w-sm h-card-promo shadow-lg rounded-lg border bg-white">
                                <div class="flex flex-col justify-around">
                                    <p class="font-bold m-4 text-20">Diskon 20%,maks.30rb</p>
                                    <div class="max-w-sm mx-3 pl-5 bg-white">
                                        <div class="flex justify-between">
                                            <p class="text-20">Khusus pembayaran <span class="font-semibold">Qris</span></p>
                                            <a href="#" class="p-1  hover:text-blue-500"><i class="fa-solid fa-check"></i></a>
                                        </div>
                                        <div class="flex justify-between">
                                            <p class="text-20">Berakhir 11 jam lagi! <a href="#" class="text-biru-kode">lihat detail</a></p>
                                            <a href="#" class="p-1 hover:text-blue-500"><i class="fa-solid fa-check"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="max-w-sm h-card-promo shadow-lg rounded-lg border bg-white">
                                <div class="flex flex-col justify-around">
                                    <p class="font-bold m-4 text-20">Diskon 20%,maks.30rb</p>
                                    <div class="max-w-sm mx-3 pl-5 bg-white">
                                        <div class="flex justify-between">
                                            <p class="text-20">Khusus pembayaran <span class="font-semibold">Qris</span></p>
                                            <a href="#" class="p-1 hover:text-blue-500"><i class="fa-solid fa-check"></i></a>
                                        </div>
                                        <div class="flex justify-between">
                                            <p class="text-20">Berakhir 11 jam lagi! <a href="#" class="text-biru-kode">lihat detail</a></p>
                                            <a href="#" class="p-1 hover:text-blue-500"><i class="fa-solid fa-check"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card promo -->
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </main>

    <!--footer-->
    <footer class=" bg-footer pt-8 pb-6 mt-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap text-left lg:text-left">
                <div class="w-full lg:w-6/12 px-4">
                    <h4 class="text-3xl fonat-semibold text-white">Warming Up</h4>
                    <h5 class="text-lg mt-0 mb-2 text-white">
                        Aplikasi food and beverage
                    </h5>
                    <div class="mt-6 lg:mb-0 mb-6">
                        <button class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                            <i class="fab fa-instagram"></i></button><button class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                            <i class="fab fa-facebook-square"></i></button>
                        </button>
                    </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full lg:w-4/12 px-4 ml-auto">
                            <span class="block uppercase text-white text-sm font-semibold mb-2">Useful Links</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-white hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://www.creative-tim.com/presentation?ref=njs-profile">About Us</a>
                                </li>
                                <li>
                                    <a class="text-white hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://blog.creative-tim.com?ref=njs-profile">Blog</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <span class="block uppercase text-white text-sm font-semibold mb-2">Other Resources</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-white hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://creative-tim.com/terms?ref=njs-profile">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a class="text-white hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://creative-tim.com/privacy?ref=njs-profile">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="text-white hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://creative-tim.com/contact-us?ref=njs-profile">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-blueGray-300">
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-white font-semibold py-1">
                        Copyright © <span id="get-current-year">2021</span><a href="#" class="text-white hover:text-blue-300" target="_blank"> created by
                            <a href="#" class="text-blueGray-500 hover:text-white">Warming UP</a>.
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="../../resources/js/script.js"></script>
</body>

</html>