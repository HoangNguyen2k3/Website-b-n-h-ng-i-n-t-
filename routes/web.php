<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductController;

Route::post('/login', [LoginController::class, 'postLogin']);
Route::post('/register', 'App\Http\Controllers\RegisterController@postRegister');
Route::get('/login',[
    'as'=>'loginat',
    'uses'=>'App\Http\Controllers\LoginController@login'
]);

Route::get('/details_products', function() {
    return view('details_product\index');
})->name('details_products');
// Route::get('/', function() {
//     return view('welcome');
// });
Route::get('/home',[HomeController::class,'index'])->name('comehome');
Route::get('/test',[HomeController::class,'test']);
Route::get('/category/{slug}/{id}',[
    'as'=>'category.product',
    'uses'=>'App\Http\Controllers\CategoryController@index1'
]);

Route::get('/products/add-to-cart/{id}',[ProductController::class,'addToCart'])->name('addToCart');
Route::get('/products/show-cart',[ProductController::class,'showCart'])->name('showCart');
Route::get('/checkout', function() {
    return view('cart\checkout');
})->name('checkOut');