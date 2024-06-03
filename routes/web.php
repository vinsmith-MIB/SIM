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
  
    Route::get('/home/{id}', [AdminHomeController::class, 'index'])->name('admin.home');
});