<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about', [
        'nama' => 'Dimas Satrya',
        'umur' => 20,
        'alamat' => 'Indonesia',
    ]);
});


Route::view('/contact', 'pages.contact');

// Route untuk Produk
Route::get('/product', [ProdukController::class, 'getProduk']);
Route::get('/product/tambah', [ProdukController::class, 'tambahProduk']); 