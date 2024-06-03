<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\Admin\AdminHomeController;


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
  
    Route::get('home/{id}', [HomeController::class, 'index'])->name('home');

});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
  
    Route::get('home', [AdminHomeController::class, 'index'])->name('admin.home');
    Route::get('kategoriProduk', [AdminHomeController::class, 'kategori'])->name('admin.kategori');
    Route::get('order', [AdminHomeController::class, 'order'])->name('admin.order');
    Route::get('editKategori', [AdminHomeController::class, 'editKategori'])->name('admin.editKategori');
    Route::get('Produk', [AdminHomeController::class, 'produk'])->name('admin.produk');
    Route::get('Laporan', [AdminHomeController::class, 'laporan'])->name('admin.laporan');
    Route::get('editproduk', [AdminHomeController::class, 'editproduk'])->name('admin.editproduk');
    Route::get('editlaporan', [AdminHomeController::class, 'editlaporan'])->name('admin.editlaporan');
});