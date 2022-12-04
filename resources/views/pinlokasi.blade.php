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
                    <p class="text-2xl font-semibold">Warming Up</p>
                </a>
                <!-- left links -->
                <ul class="navbar-nav flex justify-end   pl-0 list-style-none mx-auto w-[1300px]">
                    <li class="nav-item p-0">
                        <div class="relative text-gray-600 mr-10">
                            <input type="search" name="search-bar" id="search-bar" placeholder="Cari" class="bg-gray-200 text-gray-500 hover:text-blue-500 focus:text-gray-900 p-5 h-10 w-[500px] shadow-md pr-10 rounded-full text-md focus:outline-blue-500" >
                            <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                                <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                                    <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                                </svg>
                            </button>
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
                    <img class="h-80 w-full object-cover" src={{ URL::asset('/img/bannerpage.jpg') }} alt="">
                    <div class="absolute top-0 left-0 flex h-full w-full justify-center">
                        <p class="my-auto text-5xl font-semibold text-white pt-11">Pinpoint lokasi</p>
                    </div>
                </div>
            </article>
            <!-- end judul -->
        </section>
        <section>
            <article>
                <div class="mx-auto max-w-full">
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.304369646168!2d107.63042881530103!3d-6.973371870221307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9afad6fa06f%3A0xd4fc2f579a78668a!2sSchool%20of%20Applied%20Science%20Telkom%20University!5e0!3m2!1sen!2sid!4v1668495343977!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-300">
                        </iframe>
                    </div>
                    <!-- button cari dan search -->
                    <div class="max-w-6xl mx-auto">
                        <div class="flex w-full m-5">
                            <div class="max-w-xs rounded-lg flex shadow-lg">
                                <a href="#" class="flex items-center text-xl mx-3"><i class="fa-regular fa-compass"></i></a>
                                <input type="text" name="lokasi" id="lokasi" placeholder="cari lokasi" class="p-2 w-full">
                            </div>
                            <div class="max-w-xs rounded-lg flex mx-5 shadow-lg">
                                <a href="#" class="flex items-center text-xl mx-3"><i class="fa-solid fa-magnifying-glass"></i></a>
                                <input type="text" name="lokasi" id="lokasi" placeholder="cari lagi" class="p-2 w-full">
                            </div>
                        </div>
                        <!-- deskripsi -->
                        <div class="max-w-sm m-5">
                            <p class="text-xl font-semibold">Citereup</p>
                            <p class="text-lg text-slate-400">Dayeuhkolot, Kab. Bandung, Jawa Barat</p>
                        </div>
                        <!-- button cari lokasi -->
                        <div class="m-5">
                            <a href="kostumalamat">
                                <button type="submit" class="bg-blue-500 p-3 w-full rounded-xl text-xl font-semibold text-white my-3 shadow-md hover:shadow-lg">Pilih Lokasi & Lanjut Isi Alamat</button>
                            </a>
                            <a href="kostumalamat">
                                <button type="submit" class="ring-2 ring-biru-kode p-3 w-full rounded-xl text-xl font-semibold text-slate-400 my-3 shadow-md hover:shadow-lg">Tidak Ketemu? Isi Alamat Manual</button>
                            </a>
                        </div>
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
                <p class="text-lg font-light">Food and Beverage</p>
                <a href="https://www.instagram.com/warmingupid/" target="_blank" class="text-lg">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
            <!-- link footer -->
            <div class="flex text-white">
                <div class="max-w-sm  m-3">
                    <p class="text-md font-semibold uppercase">Useful Links</p>
                    <a href="#" class="text-md font-medium">About US</a>
                </div>
                <div class="max-w-sm flex flex-col  m-3">
                    <p class="text-md font-semibold uppercase">PRIVACY POLICY</p>
                    <a href="#" class="text-md font-medium">Terms & Conditions</a>
                    <a href="#" class="text-md font-medium">Privacy</a>
                    <a href="#" class="text-md font-medium">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="max-w-8xl mx-auto border-t-2 border-white text-white">
            <p class="text-center py-2">Copyright © 2022 created by Warming Up</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>

</html>