<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/products', [App\Http\Controllers\ProductController::class, 
'index'])->name("product.list");

Route::get('/create', [App\Http\Controllers\ProductController::class, 
'create'])->name("product.create");

Route::post('/store', [App\Http\Controllers\ProductController::class, 
'store'])->name("product.store");

Route::get('/categories/create', [App\Http\Controllers\categoryController::class, 
'create'])->name("category.create");

Route::get('/categories/store', [App\Http\Controllers\categoryController::class, 
'store'])->name("category.store");

Route::get('/categories', [App\Http\Controllers\CategoryController::class, 
'index'])->name("category.list");
