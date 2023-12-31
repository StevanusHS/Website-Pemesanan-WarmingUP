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
    return view('index');
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
    return view('warmindo');
});
// route ke bento menu
Route::get('/bento', function () {
    return view('bento');
});
// route ke menu nasgor
Route::get('/nasgor', function () {
    return view('nasgor');
});
// route ke menu makan-makan
Route::get('/makanmakan', function () {
    return view('makanmakan');
});
// route ke menu bakar celup
Route::get('/bakarcelup', function () {
    return view('bakarcelup');
});
// route ke page camilan
Route::get('/camilan', function () {
    return view('camilan');
});
// route ke minuman
Route::get('/minuman', function () {
    return view('minuman');
});
// route ke toping
Route::get('/toping', function () {
    return view('toping');
});

// route ke daftar transaksi
Route::get('/daftarTransaksi', function () {
    return view('daftarTransaksi');
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
Route::get('/index', function () {
    return view('index');
});

// route ke page transaksi
Route::get('/transaksi', function () {
    return view('transaksi');
});
// route ke page invoice
Route::get('/invoice', function () {
    return view('invoice');
});

// route kepage favorite
Route::get('/favorite', function () {
    return view('favorite');
});

// route ke ubah alamat page
Route::get('/kostumalamat', function () {
    return view('kostumalamat');
});

// route ke pintpoint lokasi
Route::get('/pinlokasi', function () {
    return view('pinlokasi');
});

// route ke detail voucher
Route::get('/detailvoucher', function () {
    return view('detailvoucher');
});

// route ke profile
Route::get('/profile', function () {
    return view('profile');
});

// route ke page metode pembayaran
Route::get('/metodpembayaran', function () {
    return view('metodpembayaran');
});

// route ke tipe pemesanan
Route::get('/tipepesan', function () {
    return view('tipepesan');
});

// route ke detail transaksi
Route::get('/detailtransaksi', function () {
    return view('detailtransaksi');
});

// route ke page paket
Route::get('/paket', function () {
    return view('paket');
});

// route ke page semua menu promo
Route::get('/semuapromo', function () {
    return view('semuapromo');
});

// route ke page semua menu rekomendasi
Route::get('/semuarekomendasi', function () {
    return view('semuarekomendasi');
});

// route ke page semua menu paket sarapan
Route::get('/semuapaketsarapan', function () {
    return view('semuapaketsarapan');
});

// route ke page semua menu pmb
Route::get('/semuapmb', function () {
    return view('semuapmb');
});

// route ke page semua menu pn
Route::get('/semuapn', function () {
    return view('semuapn');
});
