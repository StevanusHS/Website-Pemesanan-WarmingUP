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
                                <a href="home" class="text-base text-black py-2 mx-8 flex font-semibold group-hover:text-blue-500">Home</a>
                            </li>
                            <li class="group">
                                <a href="menu" class="text-base text-black py-2 mx-8 flex font-semibold group-hover:text-blue-500">Menu</a>
                            </li>
                            <li class="group">
                                <a href="#" class="text-base text-black py-2 mx-8 flex font-semibold group-hover:text-blue-500">Promo</a>
                            </li>
                            <li class="group">
                                <a href="#" class="text-base text-black py-2 mx-8 flex font-semibold group-hover:text-blue-500">Riwayat</a>
                            </li>
                            <li class="group">
                                <a href="#" class="text-base text-black py-2 mx-8 flex font-semibold group-hover:text-blue-500">Favorite</a>
                            </li>
                            <li class="group">
                                <a href="register"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Daftar</button></a>

                            </li>
                            <li class="group">
                                <a href="login"><button type="button" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">Masuk</button></a>

                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- navbar end -->
    <main>
        <!-- konten main delivery -->
        <section>
            <article>
                <div class="relative">
                    <ul>
                        <li class="h-[50vh] relative">
                            <img class="h-full object-cover" src="" alt="">
                            <div class="absolute top-0 left-0 h-full bg-red-400 w-full flex">
                                <h2 class="text-4xl font-semibold text-white my-auto w-full text-center px-20 ">banner menu 1</h2>
                            </div>
                        </li>
                        <li class="h-[50vh] relative hidden">
                            <img class="h-full object-cover" src="" alt="">
                            <div class="absolute top-0 left-0 h-full bg-red-400 w-full flex">
                                <h2 class="text-4xl font-semibold text-white my-auto w-full text-center px-20 ">banner menu 2</h2>
                            </div>
                        </li>
                        <li class="h-[50vh] relative hidden">
                            <img class="h-full object-cover" src="" alt="">
                            <div class="absolute top-0 left-0 h-full bg-red-400 w-full flex">
                                <h2 class="text-4xl font-semibold text-white my-auto w-full text-center px-20 ">banner menu 3</h2>
                            </div>
                        </li>
                    </ul>
                    <div class="absolute flex top-0 left-0 h-full w-full">
                        <div class="my-auto px-5 w-full flex justify-between">
                            <button class="bg-slate-300 p-3 rounded-full bg-opacity-50 shadow-lg">
                                <i class="fa-solid fa-arrow-left"></i>
                            </button>
                            <button class="bg-slate-300 p-3 rounded-full bg-opacity-50 shadow-lg">
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </article>
            <!-- end judul -->
        </section>
        <!-- end konten gambar -->
        <section class="container max-w-full flex justify-center h-auto mx-auto bg-white ">
            <!-- promo makanan -->
            <div class="container bg-white h-auto">
                <!-- card -->
                <p class="text-gray-900 text-2xl my-5 font-semibold">Promo Makanan</p>
                <div class="grid grid-cols-4 gap-5 ">
                    <div class="max-w-xs bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg bg-banner-judul h-40" src="public/assets/img/bakso.jpeg" alt="card">
                        </a>
                        <div class="p-5">
                            <a href="#" class="flex ">
                                <h5 class="w-full mb-1 text-2xl font-normal tracking-tight text-gray-900 dark:text-white">Nasi bakar</h5>
                                <div class="mx-auto my-2"><i class="fa-regular fa-heart"></i></div>
                            </a>
                            <p class="mb-10 font-semibold text-gray-700 dark:text-gray-400">Rp 30.000</p>
                            <div class="flex justify-end items-end">
                                <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Tambah
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-xs  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg bg-banner-judul h-40" src="../../public/img/banner.jpg" alt="card">
                        </a>
                        <div class="p-5">
                            <a href="#" class="flex ">
                                <h5 class="w-full mb-1 text-2xl font-normal tracking-tight text-gray-900 dark:text-white">Nasi bakar</h5>
                                <div class="mx-auto my-2"><i class="fa-regular fa-heart"></i></div>
                            </a>
                            <p class="mb-10 font-semibold text-gray-700 dark:text-gray-400">Rp 30.000</p>
                            <div class="flex justify-end items-end">
                                <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Tambah
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-sm  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg bg-banner-judul h-40" src="../../public/img/banner.jpg" alt="card">
                        </a>
                        <div class="p-5">
                            <a href="#" class="flex ">
                                <h5 class="w-full mb-1 text-2xl font-normal tracking-tight text-gray-900 dark:text-white">Nasi bakar</h5>
                                <div class="mx-auto my-2"><i class="fa-regular fa-heart"></i></div>
                            </a>
                            <p class="mb-10 font-semibold text-gray-700 dark:text-gray-400">Rp 30.000</p>
                            <div class="flex justify-end items-end">
                                <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Tambah
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-sm   bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg bg-banner-judul h-40" src="../../public/img/banner.jpg" alt="card">
                        </a>
                        <div class="p-5">
                            <a href="#" class="flex ">
                                <h5 class="w-full mb-1 text-2xl font-normal tracking-tight text-gray-900 dark:text-white">Nasi bakar</h5>
                                <div class="mx-auto my-2"><i class="fa-regular fa-heart"></i></div>
                            </a>
                            <p class="mb-10 font-semibold text-gray-700 dark:text-gray-400">Rp 30.000</p>
                            <div class="flex justify-end items-end">
                                <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Tambah
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--rekomendasi menu-->
                <p class="text-gray-900 text-2xl my-5 font-semibold">Rekomendasi Menu</p>
                <div class="grid grid-cols-4 gap-5 ">
                    <div class="max-w-lg bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg bg-banner-judul h-40" src="../../public/img/banner.jpg" alt="card">
                        </a>
                        <div class="p-5">
                            <a href="#" class="flex ">
                                <h5 class="w-full mb-1 text-2xl font-normal tracking-tight text-gray-900 dark:text-white">Nasi bakar</h5>
                                <div class="mx-auto my-2"><i class="fa-regular fa-heart"></i></div>
                            </a>
                            <p class="mb-10 font-semibold text-gray-700 dark:text-gray-400">Rp 30.000</p>
                            <div class="flex justify-end items-end">
                                <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Tambah
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-lg  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg bg-banner-judul h-40" src="../../public/img/banner.jpg" alt="card">
                        </a>
                        <div class="p-5">
                            <a href="#" class="flex ">
                                <h5 class="w-full mb-1 text-2xl font-normal tracking-tight text-gray-900 dark:text-white">Nasi bakar</h5>
                                <div class="mx-auto my-2"><i class="fa-regular fa-heart"></i></div>
                            </a>
                            <p class="mb-10 font-semibold text-gray-700 dark:text-gray-400">Rp 30.000</p>
                            <div class="flex justify-end items-end">
                                <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Tambah
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-sm  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg bg-banner-judul h-40" src="../../public/img/banner.jpg" alt="card">
                        </a>
                        <div class="p-5">
                            <a href="#" class="flex ">
                                <h5 class="w-full mb-1 text-2xl font-normal tracking-tight text-gray-900 dark:text-white">Nasi bakar</h5>
                                <div class="mx-auto my-2"><i class="fa-regular fa-heart"></i></div>
                            </a>
                            <p class="mb-10 font-semibold text-gray-700 dark:text-gray-400">Rp 30.000</p>
                            <div class="flex justify-end items-end">
                                <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Tambah
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-sm   bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg bg-banner-judul h-40" src="../../public/img/banner.jpg" alt="card">
                        </a>
                        <div class="p-5">
                            <a href="#" class="flex ">
                                <h5 class="w-full mb-1 text-2xl font-normal tracking-tight text-gray-900 dark:text-white">Nasi bakar</h5>
                                <div class="mx-auto my-2"><i class="fa-regular fa-heart"></i></div>
                            </a>
                            <p class="mb-10 font-semibold text-gray-700 dark:text-gray-400">Rp 30.000</p>
                            <div class="flex justify-end items-end">
                                <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Tambah
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
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