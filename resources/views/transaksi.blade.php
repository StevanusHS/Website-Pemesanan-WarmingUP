<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
</head>

<body>
    <!-- navbar start -->
    <nav class="fixed z-10 w-full flex flex-wrap items-center justify-between py-4 bg-white  shadow-lg navbar navbar-expand-lg navbar-light">
        <div class="container-fluid  w-full flex flex-wrap items-center justify-between px-6">
            <button class="navbar-toggler text-gray-500 border-0 hover:shadow-none hover:no-underline py-2 px-2.5 bg-transparent focus:outline-none focus:shadow-none focus:no-underline" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="w-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
                    </path>
                </svg>
            </button>
            <div class="collapse navbar-collapse flex-grow items-center" id="navbarSupportedContent">
                <a href="home" class="flex items-center text-gray-900 hover:text-gray-900 focus:text-gray-900 mt-2 lg:mt-2 mr-1">
                    <p class="text-lg font-semibold">Warming Up</p>
                </a>
                <!-- left links -->
                <ul class="navbar-nav flex justify-end   pl-0 list-style-none mx-auto w-[900px]">
                    <li class="nav-item p-2">
                        <div class="flex">
                            <input type="text" name="search-bar" id="search-bar" class="nav-link text-gray-500 hover:text-blue-500 focus:text-gray-900 p-0 w-[500px] shadow-md rounded-l-md focus: outline-blue-400 ring-1">
                            <label for="search-bar" class="bg-slate-300 px-2  rounded-r-lg">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </label>
                        </div>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link text-gray-900 hover:text-blue-500 focus:text-blue-500 text-md font-semibold p-0" href="menu">Menu</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link text-gray-900 hover:text-blue-500 focus:text-blue-500 text-md font-semibold p-0" href="promo">Promo</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link text-gray-900 hover:text-blue-500 focus:text-blue-500 text-md font-semibold p-0" href="paket">Paket</a>
                    </li>
                </ul>
                <!-- right elements -->
                <div class="flex items-center justify-end relative ">
                    <!-- icon -->
                    <a href="keranjang" class="text-gray-500 hover:text-gray-700 focus:text-gray-700 mr-4">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-cart" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z">
                            </path>
                        </svg>
                    </a>
                    <!-- profile image dropdown -->
                    <div class="dropdown-relative">
                        <a class="dropdown-toggle flex items-center hidden-arrow" href="#" id="dropdownMenuButton2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/img/profile.jpg" class="rounded-full w-7 h-7" alt="" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1  m-0 bg-clip-padding border-none left-auto right-0" aria-labelledby="dropdownMenuButton2">
                            <li>
                                <a href="profile" class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">
                                    <div class=" flex items-center  rounded-lg shadow-md  w-48 pr-10 pl-2 py-3 ">
                                        <img src="/img/profile.jpg" alt="profile" class="rounded-full w-7 h-7">
                                        <p class="text-md font-semibold mx-2">Zaky</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="daftarTransaksi" class="dropdown-item text-sm py-2 px-4  block w-full whitespace-nowrap bg-transparent text-gray-700  font-semibold border-b-2 hover:bg-slate-200">Riwayat</a>
                            </li>
                            <li>
                                <a href="favorite" class="dropdown-item text-sm py-2 px-4  block w-full whitespace-nowrap bg-transparent text-gray-700  font-semibold border-b-2 hover:bg-slate-200">Favorite</a>
                            </li>
                            <li>
                                <a href="login" class="dropdown-item text-sm py-2 px-4  w-full whitespace-nowrap bg-transparent text-gray-700  font-semibold  flex justify-center">
                                    <p class="mr-2">Keluar</p>
                                    <p><i class="fa-solid fa-right-from-bracket"></i></p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar end -->
    <main>
        <!-- judul -->
        <section>
            <article>
                <div class="relative">
                    <img class="h-300 w-full object-cover" src={{ URL::asset('/img/bannerpage.jpg') }} alt="">
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
                    <a href="#"><img src={{ URL::asset('/img/icon/pesanantar.jpg') }} alt="pesan-antar" class="max-w-sm h-16 w-16 rounded-full object-cover"></a>
                    <div class="my-auto">
                        <p class="text-xl font-semibold mx-3 w-full">Pesan antar</p>
                    </div>
                    <div class="my-auto w-full flex justify-end">
                        <a href="tipepesan">
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
                        <p class="text-lg">Jemi</p>
                        <p class="text-lg">jln.bojongsoang Rt3/Rw4,Bandung,Jawa Barat,5343</p>
                        <p class="text-lg">Sebelah warung baraya</p>
                    </div>
                    <div class="w-full flex justify-end">
                        <a href="kostumalamat">
                            <button type="submit" class="bg-blue-500 p-3 rounded-xl shadow-md font-semibold text-white hover:bg-blue-700">Ubah Alamat</button>
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
                                <img src={{ URL::asset('/img/makanan/siomay.jpg') }} alt="menu-detail" class="rounded-lg object-cover h-24 w-28 ">
                            </a>
                            <p class="text-xl font-semibold"> Siomay </p>
                            <p class="text-lg font-semibold"> 17.000 </p>
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
                                <img src={{ URL::asset('/img/nasgor/nasigorengtelur.jpg') }} alt="menu-detail" class="rounded-lg object-cover h-24 w-28 ">
                            </a>
                            <p class="text-xl font-semibold">Nasi goreng telur</p>
                            <p class="text-lg font-semibold"> 17.000</p>
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
                        <a href="promo">
                            <img src={{ URL::asset('/img/icon/iconpromo.jpg') }} alt="klaim-promo" class="rounded-full w-24 h-20">
                            <div class="flex items-center mx-5 w-full justify-between">
                                <p class="text-xl font-semibold">Promo</p>
                                <a href="promo" class="text-xl">
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
                                <p class="text-xl font-medium line-through mx-5">51.000</p>
                                <p class="text-xl font-medium">40.000</p>
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
                                <p class="text-xl font-medium">47.000</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <a href="detailtransaksi">
                                <p class=" mx-4 py-10 text-xl font-medium text-biru-kode">Lihat detail belanja</p>
                            </a>
                            <div class="flex mx-3">
                                <a href="detailtransaksi" class="text-xl font-medium mx-3"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article>
                <div class="bg-white flex justify-center my-5">
                    <a href="metodpembayaran" class="bg-biru-kode p-4 rounded-lg shadow-md hover:shadow-lg hover:bg-blue-800">
                        <button type="submit" class="text-lg font-medium text-white">Konfirmasi</button>
                    </a>
                </div>
            </article>
        </section>
    </main>
    <!--footer-->
    <footer class="w-full bg-footer ">
        <div class=" flex justify-between  m-5">
            <div class="max-w-sm m-3 flex flex-col text-white">
                <p class="text-2xl font-semibold">Warming UP</p>
                <p class="text-lg font-light">Food and Bavarage</p>
                <a href="https://www.instagram.com/warmingupid/" target="_blank" class="text-lg">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
            <!-- link footer -->
            <div class="flex text-white">
                <div class="max-w-sm  m-3">
                    <p class="text-lg font-semibold uppercase">Useful Links</p>
                    <a href="#" class="text-md font-medium">About US</a>
                </div>
                <div class="max-w-sm flex flex-col  m-3">
                    <p class="text-lg font-semibold uppercase">PRIVACY POLICY</p>
                    <a href="#" class="text-md font-medium">Terms & Conditions</a>
                    <a href="#" class="text-md font-medium">Privacy</a>
                    <a href="#" class="text-md font-medium">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="max-w-xl mx-auto border-t-2 border-white text-white">
            <p class="text-center py-2">Copyright © 2021 created by Warming Up</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>

</html>