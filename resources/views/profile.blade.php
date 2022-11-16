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
                    <img class="h-80 w-full object-cover" src={{ URL::asset('/img/banner.jpg') }} alt="banner">
                    <div class="absolute top-0 left-0 flex h-full w-full justify-center">
                        <p class="my-auto text-5xl font-semibold text-white pt-11">Profile</p>
                    </div>
                </div>
            </article>
            <!-- end judul -->
        </section>
        <!-- dashboard profile -->
        <section>
            <article>
                <div class="max-w-4xl mx-auto">
                    <div class="flex ">
                        <!-- container profile gambar dan nama -->
                        <div class=" flex flex-col m-6 mx-10">
                            <a href="#">
                                <img src={{ URL::asset('/img/profile.jpg') }} alt="profile" class="w-48 h-48 rounded-full mx-auto">
                            </a>
                            <a href="#" class="mx-auto m-10">
                                <button type="submit" class="bg-yellow-400  w-48 p-3 px-10 rounded-lg text-xl text-white shadow-md hover:shadow-lg hover:bg-yellow-500">Edit gambar</button>
                            </a>
                        </div>
                        <!-- form user -->
                        <div class="w-full m-6 rounded-xl  border-2  border-slate-300">
                            <form action="#">
                                <div class="flex p-3 ">
                                    <div>
                                        <label for="nama" class="text-lg font-semibold mx-3">Nama</label>
                                    </div>
                                    <input type="text" name="nama" id="nama" placeholder="nama" class="border-2 border-slate-300 w-full rounded-lg px-3">
                                </div>
                                <div class="flex p-3 ">
                                    <div class="mx-3 ">
                                        <label for="hp" class="text-lg font-semibold ">Nohp</label>
                                    </div>
                                    <input type="number" name="hp" id="hp" placeholder="+62" class="border-2  border-slate-300 w-full rounded-lg px-3">
                                </div>
                                <div class="flex p-3 ">
                                    <div class="mx-3 ">
                                        <label for="hp" class="text-lg font-semibold ">Alamat</label>
                                    </div>
                                    <textarea name="alamat" id="alamat" class="border-2 border-slate-300 w-full rounded-lg px-3"></textarea>
                                </div>
                                <div class="flex p-3 ">
                                    <div class="mx-3 ">
                                        <label for="email" class="text-lg font-semibold ">Email</label>
                                    </div>
                                    <input type="email" name="email" id="email" placeholder="email" class="border-2 border-slate-300 w-full rounded-lg px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- button edit profile -->
                    <div class=" flex justify-center">
                        <button type="submit" class="bg-biru-kode text-xl font-semibold text-white p-3 w-[150px] rounded-lg shadow-md hover:shadow-lg hover:bg-blue-700">Simpan</button>
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