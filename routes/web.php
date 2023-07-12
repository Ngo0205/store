<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\AccessoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//route cho man hinh trang chu
Route::get('/', [HomeController::class, 'index']);
Route::get('/search',[HomeController::class,'searchProduct'])->name('search');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'postLogin'])->name('postLogin');
Route::post('/register', [LoginController::class, 'register'])->name('register');

//route cho chi tiet san pham
Route::get('product-detail/{id}', [ProductController::class, 'productDetail'])->name('productDetail');

//route cho view laptop
Route::prefix('laptop')->group(function () {

    Route::get('/', [LaptopController::class, 'index'])->name('laptop.index');
    Route::get('/bestseller', [LaptopController::class, 'bestSeller'])->name('laptop.bestseller');
    Route::get('/highest-price', [LaptopController::class, 'highestPrice'])->name('laptop.highest-price');
    Route::get('/lowest-price', [LaptopController::class, 'lowestPrice'])->name('laptop.lowest-price');

});

//route cho view điện thoại
Route::prefix('phone')->group(function () {

    Route::get('/', [PhoneController::class, 'index'])->name('phone.index');
    Route::get('/bestseller', [PhoneController::class, 'bestSeller'])->name('phone.bestseller');
    Route::get('/highest-price', [PhoneController::class, 'highestPrice'])->name('phone.highest-price');
    Route::get('/lowest-price', [PhoneController::class, 'lowestPrice'])->name('phone.lowest-price');

});

//route cho view phu kien
Route::prefix('accessory')->group(function () {
    Route::get('/', [AccessoryController::class, 'index'])->name('accessory.index');
    Route::get('/bestseller', [AccessoryController::class, 'bestSeller'])->name('accessory.bestseller');
    Route::get('/highest-price', [AccessoryController::class, 'highestPrice'])->name('accessory.highest-price');
    Route::get('/lowest-price', [AccessoryController::class, 'lowestPrice'])->name('accessory.lowest-price');

});

// route cho gio hang
Route::prefix('cart')->group(function () {
    Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.addToCart');
    Route::get('/cart', [CartController::class, 'showCart'])->name('cart.showCart');
    Route::get('/delete-cart/{id}', [CartController::class, 'deleteCart'])->name('cart.deleteCart');
    Route::post('/update-cart', [CartController::class, 'updateCart'])->name('cart.updateCart');
    Route::post('/order', [CartController::class, 'order'])->name('cart.order');

});



