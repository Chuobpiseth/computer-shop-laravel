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

Route::get('/admin', function () {
    return view('backend.pages.admin');
});



Route::resource('products/laptop','App\Http\Controllers\LaptopController');
Route::get('/products/laptop','App\Http\Controllers\LaptopController@index')->name('product.laptop.index');
Route::get('/products/laptop/create','App\Http\Controllers\LaptopController@create')->name('product.laptop.store');
Route::post('/products/laptop','App\Http\Controllers\LaptopController@store')->name('product.laptop.index');
Route::get('/products/laptop/{id}','App\Http\Controllers\LaptopController@show')->name('product.laptop.show');
Route::get('/products/laptop/{id}/edit','App\Http\Controllers\LaptopController@edit')->name('product.laptop.edit');
Route::put('/products/laptop/{id}','App\Http\Controllers\LaptopController@update')->name('product.laptop.update');
Route::delete('/products/laptop/{id}','App\Http\Controllers\LaptopController@destroy')->name('product.laptop.destroy');






