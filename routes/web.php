<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frantend\HomeController;
use App\Http\Controllers\Backend\User\UserController;
use App\Http\Controllers\Backend\Admin\AdminController;



//Route for HomeController
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');



//Route for Admin BookManageController
Route::prefix('admin')->middleware(['auth', 'is_Admin'])->group(function () { 
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});



//Route for User BookManageController
Route::prefix('user')->middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard', [UserController::class, 'index'])->name('user');
});

require __DIR__.'/auth.php';
