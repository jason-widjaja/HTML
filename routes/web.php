<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productcontroller;



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


Route::get('/home', function () {
    return view('home_page');
});

Route::get('/about', function () {
    return view('about_us');
});

Route::get('/product',[productcontroller::class,"list"]);

Route::get('/buy/{product}', [productcontroller::class,"buy"]);

