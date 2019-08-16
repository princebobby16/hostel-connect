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

Route::get('/gallery/foster', 'FosterHostelController@index');
Route::get('/gallery', 'GalleryController@index');
// Route::get('/gallery/jp', 'JPromptController@index');
Route::get('/gallery/kings', 'TheKingsCourtHostelController@index');
Route::get('/gallery/testimony', 'ATestimonyHostelController@index');
Route::get('/gallery/haven', 'TheHavenHostelController@index');
Route::get('/gallery/max', 'MaxHostelController@index');
Route::get('/gallery/k', 'KHostelController@index');


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/privacy-policy', function () {
    return view('privacy');
});
