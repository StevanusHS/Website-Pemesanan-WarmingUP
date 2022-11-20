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
                        <p class="my-auto text-5xl font-semibold text-white pt-11">Keranjang</p>
                    </div>
                </div>
            </article>
            <!-- end judul -->
        </section>
        <section>
            <article>
                <!-- ceklist pilih semua -->
                <div class="max-w-5xl bg-white h-auto border border-solid block mx-auto ">
                    <div class="p-10 w-full shadow border-b-2 border-b-slate-400 bg-white">
                        <div class="flex">
                            <input type="checkbox" name="ceklist" id="ceklist" class="mx-3 w-ceklist h-10">
                            <p class="text-3xl font-medium">Pilih semua</p>
                        </div>
                    </div>
                    <!-- daftar menu keranjang -->
                    <div class="p-10 w-full shadow border bg-white">
                        <div class="flex">
                            <input type="checkbox" name="ceklist" id="ceklist" class="mx-3 w-ceklist h-auto items-center">
                            <div class="max-w-md w-28 items-center mx-3">
                                <img src={{ URL::asset('/img/banner.jpg') }} alt="nasgor" class="object-cover rounded-lg h-24">
                            </div>
                            <div class="max-w-xl w-[457px] bg-white p-3 mx-3">
                                <p class="font-semibold text-2xl">Nasi goreng</p>
                                <p class="font-medium text-xl">20.000</p>
                            </div>
                            <div class="max-w-xl bg-white flex items-center mx-10">
                                <button type="submit" class="w-10 h-10 rounded-lg bg-slate-400 mx-2">
                                    <p class="text-3xl"> - </p>
                                </button>
                                <p class="text-2xl">1</p>
                                <button type="submit" class="w-10 h-10 rounded-lg bg-slate-400 mx-2">
                                    <p class="text-3xl"> + </p>
                                </button>
                            </div>
                            <div class="max-w-xl bg-white flex items-center">
                                <a href="#" class="text-3xl"><i class="fa-regular fa-trash-can"></i></a>
                            </div>
                        </div>
                        <!-- catatan pesanan -->
                        <div class="max-w-4xl  mx-auto my-6 h-20 bg-white shadow-lg rounded-lg">
                            <div class="flex w-full h-full ">
                                <a href="#" class="text-2xl m-6"><i class="fa-solid fa-pen-to-square"></i></a>
                                <input type="text" name="catatan" id="catatan" placeholder="catatan" class=" w-full rounded-lg text-2xl">
                            </div>
                        </div>
                    </div>
                    <!-- daftar menu keranjang -->
                    <div class="p-10 w-full shadow border bg-white">
                        <div class="flex">
                            <input type="checkbox" name="ceklist" id="ceklist" class="mx-3 w-ceklist h-auto items-center">
                            <div class="max-w-md w-28 items-center mx-3">
                                <img src={{ URL::asset('/img/banner.jpg') }} alt="nasgor" class="object-cover rounded-lg h-24">
                            </div>
                            <div class="max-w-xl w-[457px] bg-white p-3 mx-3">
                                <p class="font-semibold text-2xl">Nasi goreng</p>
                                <p class="font-medium text-xl">20.000</p>
                            </div>
                            <div class="max-w-xl bg-white flex items-center mx-10">
                                <button type="submit" class="w-10 h-10 rounded-lg bg-slate-400 mx-2">
                                    <p class="text-3xl"> - </p>
                                </button>
                                <p class="text-2xl">1</p>
                                <button type="submit" class="w-10 h-10 rounded-lg bg-slate-400 mx-2">
                                    <p class="text-3xl"> + </p>
                                </button>
                            </div>
                            <div class="max-w-xl bg-white flex items-center">
                                <a href="#" class="text-3xl"><i class="fa-regular fa-trash-can"></i></a>
                            </div>
                        </div>
                        <!-- catatan pesanan -->
                        <div class="max-w-4xl  mx-auto my-6 h-20 bg-white shadow-lg rounded-lg">
                            <div class="flex w-full h-full ">
                                <a href="#" class="text-2xl m-6"><i class="fa-solid fa-pen-to-square"></i></a>
                                <input type="text" name="catatan" id="catatan" placeholder="catatan" class=" w-full rounded-lg text-2xl">
                            </div>
                        </div>
                    </div>
                    <!-- daftar menu keranjang -->
                    <div class="p-10 w-full shadow border bg-white">
                        <div class="flex">
                            <input type="checkbox" name="ceklist" id="ceklist" class="mx-3 w-ceklist h-auto items-center">
                            <div class="max-w-md w-28 items-center mx-3">
                                <img src={{ URL::asset('/img/banner.jpg') }} alt="nasgor" class="object-cover rounded-lg h-24">
                            </div>
                            <div class="max-w-xl w-[457px] bg-white p-3 mx-3">
                                <p class="font-semibold text-2xl">Nasi goreng</p>
                                <p class="font-medium text-xl">20.000</p>
                            </div>
                            <div class="max-w-xl bg-white flex items-center mx-10">
                                <button type="submit" class="w-10 h-10 rounded-lg bg-slate-400 mx-2">
                                    <p class="text-3xl"> - </p>
                                </button>
                                <p class="text-2xl">1</p>
                                <button type="submit" class="w-10 h-10 rounded-lg bg-slate-400 mx-2">
                                    <p class="text-3xl"> + </p>
                                </button>
                            </div>
                            <div class="max-w-xl bg-white flex items-center">
                                <a href="#" class="text-3xl"><i class="fa-regular fa-trash-can"></i></a>
                            </div>
                        </div>
                        <!-- catatan pesanan -->
                        <div class="max-w-4xl  mx-auto my-6 h-20 bg-white shadow-lg rounded-lg">
                            <div class="flex w-full h-full ">
                                <a href="#" class="text-2xl m-6"><i class="fa-solid fa-pen-to-square"></i></a>
                                <input type="text" name="catatan" id="catatan" placeholder="catatan" class=" w-full rounded-lg text-2xl">
                            </div>
                        </div>
                    </div>
                    <div class="p-10 w-full shadow  border bg-white">
                        <!-- catatan pesanan -->
                        <div class="max-w-4xl mx-auto my-6 h-20 bg-white border-2 shadow-lg rounded-lg">
                            <div class="flex w-full h-full ">
                                <a href="promo" class="text-2xl m-6"><i class="fa-solid fa-percent"></i></a>
                                <button type="submit" class="text-xl font-semibold w-200">Pakai Voucher</button>
                                <div class="w-full flex justify-end h-full items-center">
                                    <a href="promo" class="mx-5"><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="max-w-xs p-2 h-auto bg-white mx-5">
                                <p class="text-2xl font-medium ">Total harga</p>
                                <p class="text-4xl font-bold">60.000</p>
                            </div>
                            <!-- button beli -->
                            <a href="transaksi"><button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-light rounded-lg text-2xl px-5 py-2.5 mr-5 w-200 h-16 mb-2 focus:outline-none dark:focus:ring-blue-800">Beli</button></a>
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