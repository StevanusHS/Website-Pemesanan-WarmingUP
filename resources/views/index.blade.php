<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<script>
    currentSlide = 1;

    sliderElement = document.getElementById('slider');
    totalSlide = sliderElement.childElementCount;
    console.log(totalSlide);

    function next() {
        if (totalSlide < currentSlide) {
            currentSlide++;
            showSlide()
        }
    }

    function prev() {
        if (currentSlide > 2) {
            currentSlide--;
            showSlide();
        }
    }

    function showSlide() {
        slide = document.getElementById('slider').getElementsByTagName('li')
        for (let index = 0; index < totalSlide; index++) {
            const element = slide[index];
            if (currentSlide === index + 1) {
                element.classList.remove('hidden')
            } {
                element.classList.add('hidden')
            }
        }
    }
</script>

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
        <!-- konten main delivery -->
        <section>
            <article>
                <div class="relative">
                    <ul id="slider">
                        <li class="h-[50vh] relative">
                            <img class="h-full object-cover w-full" src={{ URL::asset('/img/bannerhome.jpeg') }} alt="banner">
                            <div class="absolute top-0 left-0 h-full  w-full flex">
                            </div>
                        </li>
                        <li class="h-[50vh] relative hidden ">
                            <img class="h-full object-cover" src={{ URL::asset('/img/bannerhome.jpeg') }} alt="banner">
                            <div class="absolute top-0 left-0 h-full bg-red-400 w-full flex">
                                <h2 class="text-4xl font-semibold text-white my-auto w-full text-center px-20 ">banner menu 2</h2>
                            </div>
                        </li>
                        <li class="h-[50vh] relative hidden">
                            <img class="h-full object-cover" src={{ URL::asset('/img/bannerhome.jpeg') }} alt="banner">
                            <div class="absolute top-0 left-0 h-full bg-red-400 w-full flex">
                                <h2 class="text-4xl font-semibold text-white my-auto w-full text-center px-20 ">banner menu 3</h2>
                            </div>
                        </li>
                    </ul>
                    <div class="absolute flex top-0 left-0 h-full w-full">
                        <div class="my-auto px-5 w-full flex justify-between">
                            <button onclick="prev()" class="bg-slate-300 p-3 rounded-full bg-opacity-50 shadow-lg">
                                <i class="fa-solid fa-arrow-left"></i>
                            </button>
                            <button onclick="next()" class="bg-slate-300 p-3 rounded-full bg-opacity-50 shadow-lg">
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </article>
            <!-- end judul -->
        </section>
        <!-- end konten gambar -->
        <section>
            <!-- card promo makanan-->
            <article>
                <div class="block mx-auto max-w-4xl h-auto py-5 bg-white">
                    <div class="container flex justify-between">
                        <p class="font-semibold text-2xl mx-10 mb-3">Kategori menu</p>
                        <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-9 mb-2">Lihat semua</button>
                    </div>
                    <!-- card makanan -->
                    <div class="flex justify-center">
                        <div class="grid grid-cols-4 gap-5">
                            <div class="w-200 h-300 bg-white rounded-lg border border-gray-200 shadow-md">
                                <div class="relative">
                                    <a href="#">
                                        <img src={{ URL::asset('/img/indomieTektek.jpg') }} alt="card-food" class="rounded-t-lg h-[125px] w-full object-cover">
                                        <div class="w-1/2 h-auto bg-red-500 absolute mx-2 my-2 top-0 left-0 rounded-full">
                                            <p class="font-semibold text-white p-1 items-center text-center">20% off</p>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                </div>
                                <div class="py-2 flex flex-col justify-between bg-white h-40">
                                    <div class="w-full h-auto bg-white ">
                                        <a href="#">
                                            <div class="flex justify-between">
                                                <p class="font-normal px-3 text-20">Mie Tektek</p>
                                                <a href="#" class="mx-5 my-1"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <p class="font-semibold px-3 text-sm line-through">Rp16.000</p>
                                            <p class="font-semibold px-3 text-sm">Rp10.000</p>
                                        </a>
                                    </div>
                                    <div class="w-full flex justify-end bg-white items-end">
                                        <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-2">tambah</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-200 h-300 bg-white rounded-lg border border-gray-200 shadow-md">
                                <div class="relative">
                                    <a href="#">
                                        <img src={{ URL::asset('/img/nasgor.jpg') }} alt="card-food" class="rounded-t-lg h-[125px] w-full object-cover">
                                        <div class="w-1/2 h-auto bg-red-500 absolute mx-2 my-2 top-0 left-0 rounded-full">
                                            <p class="font-semibold text-white p-1 items-center text-center">20% off</p>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                </div>
                                <div class="py-2 flex flex-col justify-between bg-white h-40">
                                    <div class="w-full h-auto bg-white ">
                                        <a href="#">
                                            <div class="flex justify-between">
                                                <p class="font-normal px-3 text-20">Nasi goreng telor</p>
                                                <a href="#" class="mx-5 my-1"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <p class="font-semibold px-3 text-sm line-through">Rp17.000</p>
                                            <p class="font-semibold px-3 text-sm">Rp14.000</p>
                                        </a>
                                    </div>
                                    <div class="w-full flex justify-end bg-white items-end">
                                        <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-2">tambah</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-200 h-300 bg-white rounded-lg border border-gray-200 shadow-md">
                                <div class="relative">
                                    <a href="#">
                                        <img src={{ URL::asset('/img/kebab.jpg') }} alt="card-food" class="rounded-t-lg h-[125px] w-full object-cover">
                                        <div class="w-1/2 h-auto bg-red-500 absolute mx-2 my-2 top-0 left-0 rounded-full">
                                            <p class="font-semibold text-white p-1 items-center text-center">20% off</p>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                </div>
                                <div class="py-2 flex flex-col justify-between bg-white h-40">
                                    <div class="w-full h-auto bg-white ">
                                        <a href="#">
                                            <div class="flex justify-between">
                                                <p class="font-normal px-3 text-20">kebab</p>
                                                <a href="#" class="mx-5 my-1"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <p class="font-semibold px-3 text-sm line-through">Rp10.000</p>
                                            <p class="font-semibold px-3 text-sm">Rp8.000</p>
                                        </a>
                                    </div>
                                    <div class="w-full flex justify-end bg-white items-end">
                                        <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-2">tambah</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-200 h-300 bg-white rounded-lg border border-gray-200 shadow-md">
                                <div class="relative">
                                    <a href="#">
                                        <img src={{ URL::asset('/img/bentokarage.jpg') }} alt="card-food" class="rounded-t-lg h-[125px] w-full object-cover">
                                        <div class="w-1/2 h-auto bg-red-500 absolute mx-2 my-2 top-0 left-0 rounded-full">
                                            <p class="font-semibold text-white p-1 items-center text-center">20% off</p>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                </div>
                                <div class="py-2 flex flex-col justify-between bg-white h-40">
                                    <div class="w-full h-auto bg-white ">
                                        <a href="#">
                                            <div class="flex justify-between">
                                                <p class="font-normal px-3 text-20">Bento 3</p>
                                                <a href="#" class="mx-5 my-1"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <p class="font-semibold px-3 text-sm line-through">Rp17.000</p>
                                            <p class="font-semibold px-3 text-sm">Rp14.000</p>
                                        </a>
                                    </div>
                                    <div class="w-full flex justify-end bg-white items-end">
                                        <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-2">tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </article>
            <!-- rekomendasi menu -->
            <article>
                <div class="block mx-auto max-w-4xl h-auto py-5 bg-white">
                    <div class="container flex justify-between">
                        <p class="font-semibold text-2xl mx-10 mb-3">Rekomendasi</p>
                        <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-9 mb-2">Lihat semua</button>
                    </div>
                    <!-- card makanan -->
                    <div class="flex justify-center">
                        <div class="grid grid-cols-4 gap-5">
                            <div class="w-200 h-300 bg-white rounded-lg border border-gray-200 shadow-md">
                                <div class="relative">
                                    <a href="#">
                                        <img src={{ URL::asset('/img/katsu.jpg') }} alt="card-food" class="rounded-t-lg h-[125px] w-full object-cover">
                                    </a>
                                </div>
                                <div>
                                </div>
                                <div class="py-2 flex flex-col justify-between bg-white h-40">
                                    <div class="w-full h-auto bg-white ">
                                        <a href="#">
                                            <div class="flex justify-between">
                                                <p class="font-normal px-3 text-20">Nasi katsu</p>
                                                <a href="#" class="mx-5 my-1"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <p class="font-semibold px-3 text-sm">Rp20.000</p>
                                        </a>
                                    </div>
                                    <div class="w-full flex justify-end bg-white items-end">
                                        <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-2">tambah</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-200 h-300 bg-white rounded-lg border border-gray-200 shadow-md">
                                <div class="relative">
                                    <a href="#">
                                        <img src={{ URL::asset('/img/matcha.jpg') }} alt="card-food" class="rounded-t-lg h-[125px] w-full object-cover">
                                    </a>
                                </div>
                                <div>
                                </div>
                                <div class="py-2 flex flex-col justify-between bg-white h-40">
                                    <div class="w-full h-auto bg-white ">
                                        <a href="#">
                                            <div class="flex justify-between">
                                                <p class="font-normal px-3 text-20">Es matcha</p>
                                                <a href="#" class="mx-5 my-1"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <p class="font-semibold px-3 text-sm">Rp10.000</p>
                                        </a>
                                    </div>
                                    <div class="w-full flex justify-end bg-white items-end">
                                        <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-2">tambah</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-200 h-300 bg-white rounded-lg border border-gray-200 shadow-md">
                                <div class="relative">
                                    <a href="#">
                                        <img src={{ URL::asset('/img/mojito.jpg') }} alt="card-food" class="rounded-t-lg h-[125px] w-full object-cover">
                                    </a>
                                </div>
                                <div>
                                </div>
                                <div class="py-2 flex flex-col justify-between bg-white h-40">
                                    <div class="w-full h-auto bg-white ">
                                        <a href="#">
                                            <div class="flex justify-between">
                                                <p class="font-normal px-3 text-20">mojito</p>
                                                <a href="#" class="mx-5 my-1"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <p class="font-semibold px-3 text-sm">Rp10.000</p>
                                        </a>
                                    </div>
                                    <div class="w-full flex justify-end bg-white items-end">
                                        <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-2">tambah</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-200 h-300 bg-white rounded-lg border border-gray-200 shadow-md">
                                <div class="relative">
                                    <a href="#">
                                        <img src={{ URL::asset('/img/opor.jpg') }} alt="card-food" class="rounded-t-lg h-[125px] w-full object-cover">
                                    </a>
                                </div>
                                <div>
                                </div>
                                <div class="py-2 flex flex-col justify-between bg-white h-40">
                                    <div class="w-full h-auto bg-white ">
                                        <a href="#">
                                            <div class="flex justify-between">
                                                <p class="font-normal px-3 text-20">Opor ayam</p>
                                                <a href="#" class="mx-5 my-1"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <p class="font-semibold px-3 text-sm">Rp15.000</p>
                                        </a>
                                    </div>
                                    <div class="w-full flex justify-end bg-white items-end">
                                        <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-2">tambah</button>
                                    </div>
                                </div>
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