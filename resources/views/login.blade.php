<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>

    <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 m-auto mt-32">
        <form class="space-y-6" action="#" method="#">
            <h5 class="text-xl font-medium text-gray-900 dark:text-white text-center">Masuk</h5>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="email" >
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kata sandi</label>
                <input type="password" name="password" id="password" placeholder="kata sandi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
            </div>
            <div class="flex items-start">
                <a href="#" class="ml-auto mb-5 top-0 text-sm text-blue-700 hover:underline dark:text-blue-500">Lupa kata sandi?</a>
            </div>
            <a href="home"><button type="submit" class="w-full text-white bg-button hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Masuk</button></a>
            <div class=" w-full flex justify-between text-sm font-medium text-gray-500 dark:text-gray-300">
                Tidak terdaftar? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Buat akun</a>
            </div> 
        </form>
    </div>
</body>

</html>