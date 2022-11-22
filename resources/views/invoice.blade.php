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
                        <p class="my-auto text-5xl font-semibold text-white pt-11">Invoice</p>
                    </div>
                </div>
            </article>
            <!-- end judul -->
        </section>
        <section>
            <article class="container  mx-auto ">
                <form action="#">
                    <div class="max-w-3xl border-2 shadow-md border-slate-200 rounded-lg mx-auto my-5">
                        <div class="m-5 flex items-center justify-between">
                            <p class="text-3xl font-normal">Warming Up</p>
                            <a href="#" class="text-lg font-semibold text-biru-kode">
                                Cetak :
                                <span class="text-black">
                                    <i class="fa-solid fa-print"></i>
                                </span>
                            </a>
                        </div>
                        <!-- no resi invoice -->
                        <div class="m-5">
                            <p class="text-2xl font-semibold">INVOICE</p>
                            <p class="text-md font-medium text-biru-kode">INV/220221002/MPL/2703275695</p>
                        </div>
                        <!-- tabel transaksi header detail kostumer -->
                        <div class=" m-5">
                            <table class=" w-full">
                                <thead>
                                    <tr>
                                        <th rowspan="4" colspan="3" class="text-start ">Diterbitkan atas nama</th>
                                        <th colspan="3" class="text-start ">untuk</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class=" w-14">Penjual
                                        </td>
                                        <td>:</td>
                                        <td class="text-lg font-semibold ">Warming Up</td>
                                        <td class=" w-36">Pembeli</td>
                                        <td>:</td>
                                        <td class=" w-60">Derryna</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td>Tanggal pembelian</td>
                                        <td>:</td>
                                        <td class="font-semibold">11 November 2022</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td>Alamat pengiriman</td>
                                        <td>:</td>
                                        <td> <span class="font-semibold">Derryna </span> (082281828384)
                                            Gd. FTE, Lantai 2, Ruang Multimedia, Kec. Dayeuhkolot, Bandung, Jawa Barat, 40257
                                            (Sebelah ruangan Lab K1)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td>Pembayaran</td>
                                        <td>:</td>
                                        <td class="font-semibold">Qris</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- tabel produk transaksi detil -->
                            <table class="table-auto min-w-full border-b-2 mt-3 border-black">
                                <thead class="border-y-2 border-black">
                                    <tr>
                                        <th class="text-lg text-start">Nama produk</th>
                                        <th class="text-lg">Jumlah</th>
                                        <th class="text-lg">Harga Satuan</th>
                                        <th class="text-lg">Total Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="">Nasi goreng telur</td>
                                        <td rowspan="2" class=" text-center">2</td>
                                        <td rowspan="2" class=" text-center">Rp18.000</td>
                                        <td rowspan="2" class=" text-center">Rp36.000</td>
                                    </tr>
                                    <tr>
                                        <td class="font-semibold">Catatan:
                                            <span class="font-normal">1 pedas, 1 tidak pedas</span>
                                        </td>
                                    </tr>
                                    <tr class="border-t-2">
                                        <td class="">Mie dokdok</td>
                                        <td rowspan="2" class=" text-center">1</td>
                                        <td rowspan="2" class=" text-center">Rp10.000</td>
                                        <td rowspan="2" class=" text-center">Rp10.000</td>
                                    </tr>
                                    <tr>
                                        <td class="font-semibold">Catatan:
                                            <span class="font-normal">1 pedas, 1 tidak pedas</span>
                                        </td>
                                    </tr>
                                    <tr class="border-y-2 border-black">
                                        <td colspan="3" class=" font-semibold">NOMOR ANTRIAN</td>
                                        <td class=" text-center">15</td>
                                    </tr>
                                    <tr class="border-b-2">
                                        <td></td>
                                        <td colspan="2" class=" px-3">Subtotal</td>
                                        <td class=" text-center font-semibold">Rp46.000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td colspan="2" class="border-b-2 px-3">Ongkos kirim</td>
                                        <td class="border-b-2 text-center ">Rp5.000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td colspan="2" class="border-b-2  px-3">Diskon</td>
                                        <td class="border-b-2 text-center ">-Rp6.000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td colspan="2" class="border-b-2  px-3">Biaya jasa aplikasi</td>
                                        <td class="border-b-2 text-center ">Rp2.000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td colspan="2" class=" px-3 text-lg font-semibold uppercase">Total</td>
                                        <td class=" text-center font-semibold">Rp47.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class=" m-5">
                            <p>Invoice ini sah dan diproses oleh komputer
                                Silahkan hubungi <a href="#" class="text-biru-kode">Warming Up</a>  apabila kamu membutuhkan bantuan. Terakhir diupdate 11 November 2022 12:22 WIB</p>
                        </div>
                    </div>
                </form>
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