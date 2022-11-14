<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});



Route::get('/login', function () {
    return view('login');
});

// route ke register
Route::get('/register', function () {
    return view('register');
});


// route ke home 
Route::get('/home', function () {
    return view('home');
});

// route ke menu
Route::get('/menu', function () {
    return view('menu');
});

// rout ke menu wamrindo
Route::get('/warmindo', function () {
    return view('warmin');
});
// route ke bento menu
Route::get('/bento', function () {
    return view('bento');
});
// route ke menu nasgor
Route::get('/nasgor', function () {
    return view('nasgor');
});
// route ke page camilan
Route::get('/camilan', function () {
    return view('camilan');
});
// route ke minuman
Route::get('/minuman', function () {
    return view('minuman');
});
// route ke kopi
Route::get('/kopi', function () {
    return view('kopi');
});

// route ke riwayat
Route::get('/riwayat', function () {
    return view('riwayat');
});
// route ke promo
Route::get('/promo', function () {
    return view('promo');
});

// route ke keranjang
Route::get('/keranjang', function () {
    return view('keranjang');
});

// route ke index home
Route::get('/homeUser', function () {
    return view('index');
});

// route ke page transaksi
Route::get('/transaksi', function () {
    return view('transaksi');
});