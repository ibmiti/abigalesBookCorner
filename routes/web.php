<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [HomeController::class, 'index']);

// Admin/Auth routes
Route::get('/secret/admin', function (){
    return view('auth.admin');
});

Route::post('/process-form', [LoginController::class, 'process'])->name('process.form');

// Route::post('/contact', [Homecontroller::class, 'sendEmail'])->name('sendEmail'); TODO get this working later

// Post admin, Dashboard route is accessible
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Blog routes
Route::get('/blog/all', [BlogController::class, 'index']);

// Show authoring view
Route::get('/blog/create', function(){
    return view('blog.create');
})->name('createBlog');

// Show individual blog post
Route::get('/blog/{id}', [BlogController::class, 'show']);

// Action: Submit and create blog post
Route::post('/create-article', [BlogController::class, 'confirmAndCreateArticle'])->name('createArticle');

// show individual blogPost which is to be edited
Route::get('/edit/{blogPost}', [BlogController::class, 'edit'])->name('editBlogPost');

// Show all blogPosts that are to be edited
Route::get('/blog/edit/blogPosts', [BlogController::class, 'editIndex'])->name('blogPostsEditIndex');

// Update blogPost
// TODO: use patch vs post ( test it out )
Route::post('/update/{articleId}', [BlogController::class, 'update'])->name('update');

// Remove blogPost
Route::post('/blog/delete/{blogPost}', [BlogController::class, 'destroy']);

// Route::get('/blog/edit', function(){
//     return view('blog.edit');
// })->name('editBlog');


// Ecommerce routes
// 1 Book/pdf related route,view
Route::get('/shop/books', [ProductsController::class, 'showBookProducts'])->name('showBookProducts');

// 2 General route,view
Route::get('/shop/general', [ProductsController::class, 'showGeneralProducts'])->name('showGeneralProducts');

// 3 product admin route, view
Route::get('/shop/admin', function(){
    return view('ecommerce.admin');
})->name('productAdmin');

// 4 List or crud routes for Products
Route::post('/shop/product/create', [ProductsController::class, 'store'])->name('createProduct');
// Route::get('/shop/products', [ProductsController::class, 'index'])->name('products'); // not used currently

// show individual product which is to be edited
Route::get('/shop/products/edit', [ProductsController::class, 'showEditPage'])->name('editProducts'); //
Route::get('/shop/product/edit/{productId}', [ProductsController::class, 'showProductToBeEdited'])->name('showProductToBeEdited'); //
Route::post('/shop/product/update/{productId}', [ProductsController::class, 'update'])->name('updateProduct');
Route::post('/shop/product/delete/{productId}', [ProductsController::class, 'delete'])->name('deleteProduct'); //

// Is this an error?
// require __DIR__.'/auth.php';
