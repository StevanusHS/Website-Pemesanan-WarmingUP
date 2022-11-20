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
                        <p class="my-auto text-5xl font-semibold text-white pt-11">Detail</p>
                    </div>
                </div>
            </article>
            <!-- end judul -->
        </section>
        <section class="max-w-6xl mx-auto border-x-2 border-b-2">
            <!-- pesan antar -->
            <article>
                <!-- logo image -->
                <div class="w-full flex h-auto p-5 bg-white border-b-2 border-gray-700">
                    <a href="#"><img src={{ URL::asset('/img/banner.jpg') }} alt="pesan-antar" class="max-w-sm h-16 w-16 rounded-full object-cover"></a>
                    <div class="my-auto">
                        <p class="text-xl font-semibold mx-3 w-full">Pesan antar</p>
                    </div>
                    <div class="my-auto w-full flex justify-end">
                        <a href="#">
                            <button type="submit" class="text-xl bg-white p-3 rounded-xl text-biru-kode shadow-lg ring-2 hover:shadow-xl">Ganti</button>
                        </a>
                    </div>
                </div>
                <!-- pilihan selesai -->
            </article>
            <article>
                <!-- alamat pengantaran -->
                <div class="w-full flex flex-col h-auto p-5 bg-white border-b-2 border-gray-700">
                    <div>
                        <p class="text-xl font-medium">Alamat pengantaran</p>
                        <p class="text-lg">Ahlan</p>
                        <p class="text-lg">jln.bojongsoang Rt3/Rw4,Bandung,Jawa Barat,5343</p>
                        <p class="text-lg">Sebelah warung baraya</p>
                    </div>
                    <div class="w-full flex justify-end">
                        <a href="kostumalamat">
                            <button type="submit" class="bg-biru-kode p-3 rounded-xl text-white ring-black shadow-md hover:shadow-xl">Ubah Alamat</button>
                        </a>
                    </div>
                </div>
            </article>
            <article>
                <!-- menu detail transaksi -->
                <div class="w-full h-auto p-5 bg-white border-b-2 border-black">
                    <div class="max-w-full flex flex-col p-5 ">
                        <div class="flex justify-between items-center mx-4">
                            <a href="#">
                                <img src={{ URL::asset('/img/banner.jpg') }} alt="menu-detail" class="rounded-lg object-cover h-24 w-28 ">
                            </a>
                            <p class="text-xl font-semibold">Nasi goreng telur balado</p>
                            <p class="text-lg font-semibold"> 20.000</p>
                            <p class="text-lg font-semibold"> 1x </p>
                        </div>
                        <!-- catatan -->
                        <div class="m-5 max-w-5xl shadow-md flex">
                            <input type="text" name="catatan" id="kostum-text" placeholder="tidak ada catatan" class="text-2xl w-full h-16 p-4 rounded-lg ring-2 ring-slate-300">
                        </div>
                    </div>
                </div>
            </article>
            <article>
                <!-- menu detail transaksi -->
                <div class="w-full h-auto p-5 bg-white border-b-2 border-black">
                    <div class="max-w-full flex flex-col p-5 ">
                        <div class="flex justify-between items-center mx-4">
                            <a href="#">
                                <img src={{ URL::asset('/img/banner.jpg') }} alt="menu-detail" class="rounded-lg object-cover h-24 w-28 ">
                            </a>
                            <p class="text-xl font-semibold">Nasi goreng telur balado</p>
                            <p class="text-lg font-semibold"> 20.000</p>
                            <p class="text-lg font-semibold"> 2x </p>
                        </div>
                        <!-- catatan -->
                        <div class="m-5 max-w-5xl shadow-md flex">
                            <input type="text" name="catatan" id="kostum-text" placeholder="tidak ada catatan" value="Nasi gorengnya tidak pedas" class="text-2xl w-full h-16 p-4 rounded-lg ring-2 ring-slate-300">
                        </div>
                    </div>
                </div>
            </article>
            <article>
                <!-- klaim promo -->
                <div class="w-full h-auto p-5 bg-white border-b-2 border-black">
                    <div class="flex ring-2 ring-slate-200 p-3 rounded-xl bg-white shadow-md hover:shadow-lg">
                        <a href="#">
                            <img src={{ URL::asset('/img/banner.jpg') }} alt="klaim-promo" class="rounded-full w-24 h-20">
                            <div class="flex items-center mx-5 w-full justify-between">
                                <p class="text-xl font-semibold">Promo</p>
                                <a href="#" class="text-xl">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </a>
                    </div>
                </div>
            </article>
            <article>
                <!-- ringkasan pembayaran -->
                <div class="w-full h-auto p-5 bg-white ">
                    <div class="max-w-full border-2 border-slate-200 rounded-lg">
                        <p class=" mx-4 py-5 text-2xl font-bold">Ringkasan pembayaran</p>
                        <div class="flex items-center justify-between border-b-2 border-slate-300">
                            <p class=" mx-4 py-5 text-xl font-medium">Harga</p>
                            <div class="flex mx-3">
                                <p class="text-xl font-medium line-through mx-5">35.000</p>
                                <p class="text-xl font-medium">30.000</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between border-b-2 border-slate-300">
                            <p class=" mx-4 py-5 text-xl font-medium">Ongkir</p>
                            <div class="flex mx-3">
                                <p class="text-xl font-medium">5.000</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between border-b-2 border-slate-300">
                            <p class=" mx-4 py-5 text-xl font-medium">Biaya jasa aplikasi</p>
                            <div class="flex mx-3">
                                <p class="text-xl font-medium">2.000</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between border-b-2 border-slate-300">
                            <p class=" mx-4 py-5 text-xl font-medium">Total pembayaran</p>
                            <div class="flex mx-3">
                                <p class="text-xl font-medium">37.000</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <a href="#">
                                <p class=" mx-4 py-10 text-xl font-medium text-biru-kode">Lihat detail belanja</p>
                            </a>
                            <div class="flex mx-3">
                                <a href="#" class="text-xl font-medium mx-3"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article>
                <div class="bg-white flex justify-center my-5">
                    <a href="#" class="bg-biru-kode p-4 rounded-lg shadow-md hover:shadow-lg hover:bg-blue-800">
                        <button type="submit" class="text-lg font-medium text-white">Konfirmasi</button>
                    </a>
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