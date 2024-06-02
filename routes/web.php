<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\Admin\AdminHomeController;


Auth::routes();


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/search', [HomeController::class, 'search'])->name('search');


/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'role:user'])->prefix('user')->group(function () {
  
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('search', [HomeController::class, 'search'])->name('search');

});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
  
    Route::get('/home', [AdminHomeController::class, 'index'])->name('admin.home');
});