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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'HomeController@index')->name('landing');
Route::get('/contact-me', 'ContactController@getContact')->name('contact');
Route::post('/contact/send', 'ContactController@saveContact')->name('contact.send');
Route::get('/services', 'HomeController@services')->name('services');
Route::get('/portfolio', 'HomeController@portfolio')->name('portfolio');
