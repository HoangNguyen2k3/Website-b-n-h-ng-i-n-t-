<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Log;
Route::get('/', function() {
    return view('welcome');
});
Route::get('/home',[HomeController::class,'index']);
Route::get('/test',[HomeController::class,'test']);
Route::get('/category/{slug}/{id}',[
    'as'=>'category.product',
    'uses'=>'App\Http\Controllers\CategoryController@index1'
]);