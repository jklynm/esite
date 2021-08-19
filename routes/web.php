<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');
Route::get('/categoryCreate', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
Route::post('/categoryStore', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
Route::get('/categoryEdit/{category}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
Route::post('/categoryUpdate/{category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');

Route::get('/categoryDelete/{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.delete');







Route::get('/subcategory', [App\Http\Controllers\SubCategoryController::class, 'index'])->name('subcategory');
Route::get('/subcategoryCreate', [App\Http\Controllers\SubCategoryController::class, 'create'])->name('subcategory.create');
Route::post('/subcategoryStore', [App\Http\Controllers\SubCategoryController::class, 'store'])->name('subcategory.store');

Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product');
Route::get('/productCreate', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
Route::post('/productStore', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
Route::get('/productEdit/{product}', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
Route::post('/productUpdate/{product}', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');

Route::get('/productDelete/{category}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.delete');




