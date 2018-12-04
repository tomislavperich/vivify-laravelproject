<?php

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

// Root route
Route::get('/', 'HomeController@index')->name('home');

// Home route
Route::get('/home', function () {
    return view('welcome');
})->middleware('middleware');

// About route
Route::get('/about', function () {
    return view('about');
});

// Home greeting route
Route::get('/home/{name}', 'HiController');

// Auth routes
Auth::routes();
