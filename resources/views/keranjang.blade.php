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
                            <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="rounded-full w-7 h-7" alt="" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1  m-0 bg-clip-padding border-none left-auto right-0" aria-labelledby="dropdownMenuButton2">
                            <li>
                                <a href="profile" class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">
                                    <div class=" flex items-center  rounded-lg shadow-md  w-48 pr-10 pl-2 py-3 ">
                                        <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" alt="profile" class="rounded-full w-7 h-7">
                                        <p class="text-md font-semibold mx-2">Derryna</p>
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
                    <img class="h-300 w-full object-cover" src={{ URL::asset('/img/banner.jpg') }} alt="">
                    <div class="absolute top-0 left-0 flex h-full w-full justify-center">
                        <p class="my-auto text-5xl font-semibold text-white pt-11">Keranjang</p>
                    </div>
                </div>
            </article>
            <!-- end judul -->
        </section>
        <section class="container mx-auto flex">
            <article class="m-3 max-w-sm w-full ">
                <!-- route ke promo -->
                <div class="max-w-sm flex items-center border-2 border-slate-500 m-3 p-3 rounded-xl shadow-md">
                    <a href="#" class="text-lg">
                        <i class="fa-solid fa-percent"></i>
                    </a>
                    <p class="text-lg font-semibold mx-3 w-full">Pakai Voucher</p>
                    <a href="#" class="w-full flex justify-end">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                <!-- Ringkasan belanja -->
                <div class="max-w-sm flex flex-col rounded-xl shadow-md  m-3 border-2 border-slate-500">
                    <p class="text-lg font-semibold m-3">Ringkasan belanja</p>
                    <div class="flex justify-between mx-3">
                        <p class="text-lg">Total Harga (3 barang)</p>
                        <p class="text-lg text-red-costum">Rp50.000</p>
                    </div>
                    <button type="submit" class="bg-biru-kode p-3 mx-3 my-5 rounded-xl shadow-md text-lg font-semibold text-white hover:bg-blue-700">Beli</button>
                </div>
            </article>
            <article class=" mx-10 w-full">
                <div class=" border-2 border-slate-300  mt-5 rounded-md">
                    <!-- checkbox pilih semua -->
                    <div class="m-3 flex">
                        <input type="checkbox" name="keranjang" id="pilih-semua" class="w-7 h-7 mx-3">
                        <p class="text-lg font-semibold">Pilih semua</p>
                    </div>
                </div>
                <!-- keranjang makanan -->
                <div class="shadow-md rounded-md border-2 border-slate-300">
                    <div class="m-3  flex items-center ">
                        <div class="w-full flex items-center my-3">
                            <input type="checkbox" name="keranjang-makanan" id="jumlah-makanan" class="w-7 h-7 mx-3">
                            <img src={{ URL::asset('/img/banner.jpg') }} alt="keranjang-makanan" class="w-[68px] h-[68px] rounded-xl mx-5">
                            <p class="text-lg font-semibold">Nasi goreng balado ayam</p>
                        </div>
                        <!-- kostumisasi makanan,nambah dan hapus -->
                        <div class="w-full ">
                            <div class="flex justify-end">
                                <button type="submit" class="text-2xl ">
                                    <i class="fa-solid fa-square-minus"></i>
                                </button>
                                <p class="text-2xl mx-3">1</p>
                                <button type="submit" class="text-2xl">
                                    <i class="fa-regular fa-square-plus"></i>
                                </button>
                                <button type="submit" class="text-2xl ml-5">
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- catatan makanan -->
                    <div class="shadow-md mx-3 flex items-center my-3 rounded-xl">
                        <a href="#" class="text-xl mx-3"><i class="fa-regular fa-clipboard"></i></a>
                        <input type="text" name="catatan" id="catatan-keranjang" placeholder="Catatan" class="w-full h-[44px] rounded-xl px-3 focus:outline-blue-400">
                    </div>
                </div>
                 <!-- keranjang makanan -->
                 <div class="shadow-md rounded-md border-2 border-slate-300">
                    <div class="m-3  flex items-center ">
                        <div class="w-full flex items-center my-3">
                            <input type="checkbox" name="keranjang-makanan" id="jumlah-makanan" class="w-7 h-7 mx-3">
                            <img src={{ URL::asset('/img/banner.jpg') }} alt="keranjang-makanan" class="w-[68px] h-[68px] rounded-xl mx-5">
                            <p class="text-lg font-semibold">Nasi goreng balado ayam</p>
                        </div>
                        <!-- kostumisasi makanan,nambah dan hapus -->
                        <div class="w-full ">
                            <div class="flex justify-end">
                                <button type="submit" class="text-2xl ">
                                    <i class="fa-solid fa-square-minus"></i>
                                </button>
                                <p class="text-2xl mx-3">1</p>
                                <button type="submit" class="text-2xl">
                                    <i class="fa-regular fa-square-plus"></i>
                                </button>
                                <button type="submit" class="text-2xl ml-5">
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- catatan makanan -->
                    <div class="shadow-md mx-3 flex items-center my-3 rounded-xl">
                        <a href="#" class="text-xl mx-3"><i class="fa-regular fa-clipboard"></i></a>
                        <input type="text" name="catatan" id="catatan-keranjang" placeholder="Catatan" class="w-full h-[44px] rounded-xl px-3 focus:outline-blue-400">
                    </div>
                </div>
                 <!-- keranjang makanan -->
                 <div class="shadow-md rounded-md border-2 border-slate-300">
                    <div class="m-3  flex items-center ">
                        <div class="w-full flex items-center my-3">
                            <input type="checkbox" name="keranjang-makanan" id="jumlah-makanan" class="w-7 h-7 mx-3">
                            <img src={{ URL::asset('/img/banner.jpg') }} alt="keranjang-makanan" class="w-[68px] h-[68px] rounded-xl mx-5">
                            <p class="text-lg font-semibold">Nasi goreng balado ayam</p>
                        </div>
                        <!-- kostumisasi makanan,nambah dan hapus -->
                        <div class="w-full ">
                            <div class="flex justify-end">
                                <button type="submit" class="text-2xl ">
                                    <i class="fa-solid fa-square-minus"></i>
                                </button>
                                <p class="text-2xl mx-3">1</p>
                                <button type="submit" class="text-2xl">
                                    <i class="fa-regular fa-square-plus"></i>
                                </button>
                                <button type="submit" class="text-2xl ml-5">
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- catatan makanan -->
                    <div class="shadow-md mx-3 flex items-center my-3 rounded-xl">
                        <a href="#" class="text-xl mx-3"><i class="fa-regular fa-clipboard"></i></a>
                        <input type="text" name="catatan" id="catatan-keranjang" placeholder="Catatan" class="w-full h-[44px] rounded-xl px-3 focus:outline-blue-400">
                    </div>
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