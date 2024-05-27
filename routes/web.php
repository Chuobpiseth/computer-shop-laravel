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
    return view('frontend.pages.home');
});
Route::get('/brands', function () {
    return view('frontend.pages.brand');
});
Route::get('/laptops', function () {
    return view('frontend.pages.laptops');
});
Route::get('/contact', function () {
    return view('frontend.pages.contact');
});
Route::get('/about', function () {
    return view('frontend.pages.about');
});
Route::get('/promotion', function () {
    return view('frontend.pages.promotion');
});
Route::get('/terms', function () {
    return view('frontend.subpages.termcondition');
});
Route::get('/privacy', function () {
    return view('frontend.subpages.privacy');
});
Route::get('/fqa', function () {
    return view('frontend.subpages.fqa');
});
