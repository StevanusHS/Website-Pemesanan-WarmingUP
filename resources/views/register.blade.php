<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
<div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 md:p-8 dark:bg-white dark:border-gray-300  mx-auto my-10">
    <form class="space-y-6" action="#" method="#">
        <h5 class="text-xl font-medium text-gray-900 dark:text-gray-900 text-center">Daftar</h5>
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Nama</label>
            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-300 dark:placeholder-gray-400 dark:text-gray-900" placeholder="nama" required="">
        </div>
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Email</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-300 dark:placeholder-gray-400 dark:text-gray-900" placeholder="email" required="">
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Kata sandi</label>
            <input type="password" name="password" id="password" placeholder="kata sandi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-300 dark:placeholder-gray-400 dark:text-gray-900" required="">
        </div>
        <div>
            <label for="konfirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Konfirmasi kata sandi</label>
            <input type="password" name="konfirm-password" id="konfirm-password" placeholder="konfirmasi kata sandi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-300 dark:placeholder-gray-400 dark:text-gray-900" required="">
        </div>
        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" href="login">Daftar</button>
        <div class="text-sm w-full flex justify-between font-medium text-gray-500 dark:text-gray-900">
            Sudah memiliki akun?   <a href="login" class="text-blue-700 hover:underline dark:text-blue-500">Masuk</a>
        </div>
    </form>
</div>
</body>

</html>