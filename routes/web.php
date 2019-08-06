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

Route::get('/', 'HomeController@index');

Route::get('/register', 'FormController@create')->name('form.create');
Route::post('/register/submit', 'FormController@store')->name('form.store');

Route::get('/about', function () {
    return view('about');
});

Route::get('/terms-of-service', function () {
    return view('terms');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/privacy-policy', function () {
    return view('privacy');
});
