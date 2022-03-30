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

/*Route::get('/', function () {
    return view('index');
});*/

Route::middleware('web')->group(function (){

    Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);
    Route::get('/men',[\App\Http\Controllers\HomeController::class,'men']);
    Route::get('/women',[\App\Http\Controllers\HomeController::class,'women']);
    Route::get('/about',[\App\Http\Controllers\HomeController::class,'about']);
    Route::get('/contact',[\App\Http\Controllers\HomeController::class,'contact']);
    Route::get('/cart',[\App\Http\Controllers\HomeController::class,'cart']);
    Route::get('/product-details',[\App\Http\Controllers\HomeController::class,'productDetails']);
    Route::get('/checkout',[\App\Http\Controllers\HomeController::class,'checkOut']);
    Route::get('/order-complete',[\App\Http\Controllers\HomeController::class,'complete']);


});
