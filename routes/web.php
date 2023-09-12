<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\BlogController;
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
