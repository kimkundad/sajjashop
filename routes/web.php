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

Route::get('/about_us', function () {
    return view('about_us');
});
Route::get('/contact_us', function () {
    return view('contact_us');
});
Route::get('/contact_price_quotation', function () {
    return view('contact_price_quotation');
});
Route::get('/payment_option', function () {
    return view('payment_option');
});
Route::get('/delivery', function () {
    return view('delivery');
});
Route::get('/blogs', function () {
    return view('blogs');
});
Route::get('/blog_detail', function () {
    return view('blog_detail');
});
Route::get('/category', function () {
    return view('category');
});
Route::get('/terms', function () {
    return view('terms');
});
Route::get('/policy', function () {
    return view('policy');
});
Route::get('/return', function () {
    return view('return');
});

