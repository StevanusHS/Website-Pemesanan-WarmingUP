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
                                <a href="#" class="text-base text-black py-2 mx-8 flex font-semibold group-hover:text-blue-500">Home</a>
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
                                <a href="" class="py-2 mx-5 flex my-1.5"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
                            </li>
                            <li class="group">
                                <a href="#">
                                    <div class="h-10 w-10  flex rounded-full py-2 mx-5 bg-profile shadow bg-cover"></div>
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
                <div class="max-w-full flex h-80 bg-banner-judul shadow-lg bg-cover">
                    <p class="m-auto text-5xl font-semibold text-white pt-11">Bento</p>
                </div>
            </article>
            <!-- end judul -->
        </section>
        <!-- tabel total belanja -->
        <section class="container max-w-full flex justify-center h-auto  bg-white ">
            <!-- kategori -->
            <div class="container bg-white h-auto">
                <!-- card menu terlaris -->
                <p class="text-gray-900 text-2xl my-5 font-semibold">Rekomendasi</p>
                <div class="grid grid-cols-4 gap-5 ">
                    <div class="max-w-lg bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg bg-banner-judul h-40" src="../../public/img/banner.jpg" alt="card">
                        </a>
                        <div class="p-5">
                            <a href="#" class="flex ">
                                <h5 class="w-full mb-1 text-2xl font-normal tracking-tight text-gray-900 dark:text-white">Pizza</h5>
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
                                <h5 class="w-full mb-1 text-2xl font-normal tracking-tight text-gray-900 dark:text-white">Bento</h5>
                                <div class="mx-auto my-2"><i class="fa-regular fa-heart"></i></div>
                            </a>
                            <p class="mb-10 font-semibold text-gray-700 dark:text-gray-400">Rp 25.000</p>
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
                                <h5 class="w-full mb-1 text-2xl font-normal tracking-tight text-gray-900 dark:text-white">Nasi goreng</h5>
                                <div class="mx-auto my-2"><i class="fa-regular fa-heart"></i></div>
                            </a>
                            <p class="mb-10 font-semibold text-gray-700 dark:text-gray-400">Rp 17.000</p>
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
                                <h5 class="w-full mb-1 text-2xl font-normal tracking-tight text-gray-900 dark:text-white">Nasi telur</h5>
                                <div class="mx-auto my-2"><i class="fa-regular fa-heart"></i></div>
                            </a>
                            <p class="mb-10 font-semibold text-gray-700 dark:text-gray-400">Rp 10.000</p>
                            <div class="flex justify-end items-end">
                                <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Tambah
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu bento-->
                <p class="text-gray-900 text-2xl my-5 font-semibold"> Daftar Menu Bento</p>
                <div class="grid grid-cols-4 gap-5 ">
                    <div class="max-w-lg bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg bg-banner-judul h-40" src="../../public/img/banner.jpg" alt="card">
                        </a>
                        <div class="p-5">
                            <a href="#" class="flex ">
                                <h5 class="w-full mb-1 text-2xl font-normal tracking-tight text-gray-900 dark:text-white">Bento 1</h5>
                                <div class="mx-auto my-2"><i class="fa-regular fa-heart"></i></div>
                            </a>
                            <p class="mb-10 font-semibold text-gray-700 dark:text-gray-400">Rp 17.000</p>
                            <div class="flex justify-end items-end">
                                <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Tambah
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-lg bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg bg-banner-judul h-40" src="../../public/img/banner.jpg" alt="card">
                        </a>
                        <div class="p-5">
                            <a href="#" class="flex ">
                                <h5 class="w-full mb-1 text-2xl font-normal tracking-tight text-gray-900 dark:text-white">Bento 2</h5>
                                <div class="mx-auto my-2"><i class="fa-regular fa-heart"></i></div>
                            </a>
                            <p class="mb-10 font-semibold text-gray-700 dark:text-gray-400">Rp 17.000</p>
                            <div class="flex justify-end items-end">
                                <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Tambah
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-lg bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg bg-banner-judul h-40" src="../../public/img/banner.jpg" alt="card">
                        </a>
                        <div class="p-5">
                            <a href="#" class="flex ">
                                <h5 class="w-full mb-1 text-2xl font-normal tracking-tight text-gray-900 dark:text-white">Bento 3</h5>
                                <div class="mx-auto my-2"><i class="fa-regular fa-heart"></i></div>
                            </a>
                            <p class="mb-10 font-semibold text-gray-700 dark:text-gray-400">Rp 17.000</p>
                            <div class="flex justify-end items-end">
                                <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Tambah
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-lg bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg bg-banner-judul h-40" src="../../public/img/banner.jpg" alt="card">
                        </a>
                        <div class="p-5">
                            <a href="#" class="flex ">
                                <h5 class="w-full mb-1 text-2xl font-normal tracking-tight text-gray-900 dark:text-white">Mie tektek</h5>
                                <div class="mx-auto my-2"><i class="fa-regular fa-heart"></i></div>
                            </a>
                            <p class="mb-10 font-semibold text-gray-700 dark:text-gray-400">Rp 17.000</p>
                            <div class="flex justify-end items-end">
                                <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Tambah
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-lg bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg bg-banner-judul h-40" src="../../public/img/banner.jpg" alt="card">
                        </a>
                        <div class="p-5">
                            <a href="#" class="flex ">
                                <h5 class="w-full mb-1 text-2xl font-normal tracking-tight text-gray-900 dark:text-white">Mie goreng</h5>
                                <div class="mx-auto my-2"><i class="fa-regular fa-heart"></i></div>
                            </a>
                            <p class="mb-10 font-semibold text-gray-700 dark:text-gray-400">Rp 10.000</p>
                            <div class="flex justify-end items-end">
                                <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Tambah
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-lg bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg bg-banner-judul h-40" src="../../public/img/banner.jpg" alt="card">
                        </a>
                        <div class="p-5">
                            <a href="#" class="flex ">
                                <h5 class="w-full mb-1 text-2xl font-normal tracking-tight text-gray-900 dark:text-white">Mie goreng</h5>
                                <div class="mx-auto my-2"><i class="fa-regular fa-heart"></i></div>
                            </a>
                            <p class="mb-10 font-semibold text-gray-700 dark:text-gray-400">Rp 10.000</p>
                            <div class="flex justify-end items-end">
                                <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Tambah
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-lg bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg bg-banner-judul h-40" src="../../public/img/banner.jpg" alt="card">
                        </a>
                        <div class="p-5">
                            <a href="#" class="flex ">
                                <h5 class="w-full mb-1 text-2xl font-normal tracking-tight text-gray-900 dark:text-white">Mie goreng</h5>
                                <div class="mx-auto my-2"><i class="fa-regular fa-heart"></i></div>
                            </a>
                            <p class="mb-10 font-semibold text-gray-700 dark:text-gray-400">Rp 10.000</p>
                            <div class="flex justify-end items-end">
                                <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Tambah
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-lg bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg bg-banner-judul h-40" src="../../public/img/banner.jpg" alt="card">
                        </a>
                        <div class="p-5">
                            <a href="#" class="flex ">
                                <h5 class="w-full mb-1 text-2xl font-normal tracking-tight text-gray-900 dark:text-white">Mie goreng</h5>
                                <div class="mx-auto my-2"><i class="fa-regular fa-heart"></i></div>
                            </a>
                            <p class="mb-10 font-semibold text-gray-700 dark:text-gray-400">Rp 10.000</p>
                            <div class="flex justify-end items-end">
                                <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Tambah
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-gray-900 text-2xl my-5 font-semibold">Bento special</p>
                <div class="grid grid-cols-4 gap-5 ">
                    <div class="max-w-lg bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg bg-banner-judul h-40" src="../../public/img/banner.jpg" alt="card">
                        </a>
                        <div class="p-5">
                            <a href="#" class="flex ">
                                <h5 class="w-full mb-1 text-2xl font-normal tracking-tight text-gray-900 dark:text-white">Bento 1</h5>
                                <div class="mx-auto my-2"><i class="fa-regular fa-heart"></i></div>
                            </a>
                            <p class="mb-10 font-semibold text-gray-700 dark:text-gray-400">Rp 17.000</p>
                            <div class="flex justify-end items-end">
                                <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Tambah
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-lg bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg bg-banner-judul h-40" src="../../public/img/banner.jpg" alt="card">
                        </a>
                        <div class="p-5">
                            <a href="#" class="flex ">
                                <h5 class="w-full mb-1 text-2xl font-normal tracking-tight text-gray-900 dark:text-white">Bento 2</h5>
                                <div class="mx-auto my-2"><i class="fa-regular fa-heart"></i></div>
                            </a>
                            <p class="mb-10 font-semibold text-gray-700 dark:text-gray-400">Rp 17.000</p>
                            <div class="flex justify-end items-end">
                                <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Tambah
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-lg bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg bg-banner-judul h-40" src="../../public/img/banner.jpg" alt="card">
                        </a>
                        <div class="p-5">
                            <a href="#" class="flex ">
                                <h5 class="w-full mb-1 text-2xl font-normal tracking-tight text-gray-900 dark:text-white">Bento 3</h5>
                                <div class="mx-auto my-2"><i class="fa-regular fa-heart"></i></div>
                            </a>
                            <p class="mb-10 font-semibold text-gray-700 dark:text-gray-400">Rp 17.000</p>
                            <div class="flex justify-end items-end">
                                <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Tambah
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-lg bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg bg-banner-judul h-40" src="../../public/img/banner.jpg" alt="card">
                        </a>
                        <div class="p-5">
                            <a href="#" class="flex ">
                                <h5 class="w-full mb-1 text-2xl font-normal tracking-tight text-gray-900 dark:text-white">Mie tektek</h5>
                                <div class="mx-auto my-2"><i class="fa-regular fa-heart"></i></div>
                            </a>
                            <p class="mb-10 font-semibold text-gray-700 dark:text-gray-400">Rp 17.000</p>
                            <div class="flex justify-end items-end">
                                <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Tambah
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- start footer -->
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
    <script src="/resources/js/script.js"></script>
</body>

</html>