<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\DesktopController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\DashboardController;
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

// Frontend Routes
Route::get('/', function () {
    $latestLaptops = app(LaptopController::class)->latest();
    $lastFourDesktops = app(DesktopController::class)->lastfour();
    $allslideshows = app(SlideController::class)->allslides();
    return view('frontend.pages.home', [
        'latestLaptops' => $latestLaptops,
        'lastFourDesktops' => $lastFourDesktops,
        'allslideshows' => $allslideshows,
    ]);
});

Route::view('/contact', 'frontend.pages.contact');
Route::view('/about', 'frontend.pages.about');
Route::view('/accessories', 'frontend.pages.accessories');
Route::view('/terms', 'frontend.subpages.termcondition');
Route::view('/privacy', 'frontend.subpages.privacy');
Route::view('/fqa', 'frontend.subpages.fqa');

// Laptop routes
Route::get('/laptops', [LaptopController::class, 'alllaptops']);
Route::get('/laptop/detail/{id}', [LaptopController::class, 'showdetail']);

// Desktop routes
Route::get('/desktop', [DesktopController::class, 'alldesktops']);
Route::get('/desktop/detail/{id}', [DesktopController::class, 'showdetail']);
Auth::routes();
// Backend Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('admin');

    // Laptop resource routes
    Route::resource('admin/products/laptop', LaptopController::class)->names('admin.product.laptop');
    Route::get('/admin/products/laptop','App\Http\Controllers\LaptopController@index')->name('product.laptop.index');
    Route::get('/admin/products/laptop/create','App\Http\Controllers\LaptopController@create')->name('product.laptop.store');
    Route::post('/admin/products/laptop','App\Http\Controllers\LaptopController@store')->name('product.laptop.index');
    Route::get('/admin/products/laptop/{id}','App\Http\Controllers\LaptopController@show')->name('product.laptop.show');
    Route::get('/admin/products/laptop/{id}/edit','App\Http\Controllers\LaptopController@edit')->name('product.laptop.edit');
    Route::put('/admin/products/laptop/{id}','App\Http\Controllers\LaptopController@update')->name('product.laptop.update');
    Route::delete('/admin/products/laptop/{id}','App\Http\Controllers\LaptopController@destroy')->name('product.laptop.destroy');

    // Desktop resource routes
    Route::resource('/admin/products/desktop', DesktopController::class)->names('admin.product.desktop');
    Route::get('/admin/products/desktop','App\Http\Controllers\DesktopController@index')->name('product.desktop.index');
    Route::get('/admin/products/desktop/create','App\Http\Controllers\DesktopController@create')->name('product.desktop.store');
    Route::post('/admin/products/desktop','App\Http\Controllers\DesktopController@store')->name('product.desktop.index');
    Route::get('/admin/products/desktop/{id}','App\Http\Controllers\DesktopController@show')->name('product.desktop.show');
    Route::get('/admin/products/desktop/{id}/edit','App\Http\Controllers\DesktopController@edit')->name('product.desktop.edit');
    Route::put('/admin/products/desktop/{id}','App\Http\Controllers\DesktopController@update')->name('product.desktop.update');
    Route::delete('/admin/products/desktop/{id}','App\Http\Controllers\DesktopController@destroy')->name('product.desktop.destroy');

    // Slide resource routes
    Route::resource('admin/slide', SlideController::class)->names('admin.slide');

    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/'); // Redirect to the desired page after logout
    })->name('logout');

});
