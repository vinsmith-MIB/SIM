<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\KategoriProdukController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;



Auth::routes();


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/cart', [HomeController::class, 'cartView'])->name('cart');



/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'role:user'])->prefix('user')->group(function () {
  
    Route::get('home', [HomeController::class, 'index'])->name('home');

});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
  
    Route::get('home', [AdminHomeController::class, 'index'])->name('admin.dashboard');
    Route::get('/invoice-data',[AdminHomeController::class, 'getChartData']);


    Route::resource('kategoriProduk', KategoriProdukController::class)->names('admin.kategori');
    Route::resource('Produk', ProdukController::class)->names('admin.produk');
    Route::resource('order', OrderController::class)->names('admin.order');
    Route::resource('laporan', LaporanController::class)->names('admin.laporan');
    Route::resource('admin', AdminController::class)->names('admin.admin');
    Route::resource('user', UserController::class)->names('admin.user');


});


Route::middleware(['auth'])->group(function () {
  
    Route::resource('konsumen', KonsumenController::class)->names('konsumen')->except('index');

});