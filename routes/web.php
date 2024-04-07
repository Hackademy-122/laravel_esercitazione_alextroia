<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class, 'home'] )->name('homePage');

//Rotte che gestiscono i prodotti

Route::get('/create/article', [ProductController::class, 'create'])->name('productCreate');
Route::post('/store/product', [ProductController::class, 'store'])->name('storeProduct');
Route::get('/index/article', [ProductController::class, 'index'])->name('productIndex');
