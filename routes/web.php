<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

Route::get('/', function () {
    return view('welcome');
});

// Ecommerce route 1
Route::get('/shop/books', [
    ProductsController::class, 'showBookProducts'
    ])->name('showBookProducts');

// Ecommerce route 2
Route::get('/shop/general', [
    ProductsController::class, 'showGeneralProducts']
    )->name('showGeneralProducts');

