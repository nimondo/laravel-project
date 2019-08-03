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

Route::get('/', function() {
    return view('home');
});

Route::get('/treks', function() {
    return view('treks');
});

Route::get('/contact', 'ContactController@getForm');
Route::post('/contact', 'ContactController@postForm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/devenir-partenaire', function() {
    return view('auth.registerPro');
});
