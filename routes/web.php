<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/become-partner', function () {
    return view('become-partner');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/error', function () {
    return view('error');
});

Route::get('/pricing-table', function () {
    return view('pricing-table');
});

Route::get('/restaurant-card', function () {
    return view('restaurant-card');
});

Route::get('/restaurants', function () {
    return view('restaurants');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/single-blog', function () {
    return view('single-blog');
});