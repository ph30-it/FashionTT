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
Route::get('/','HomeController@index')->name('index');
Route::get('index','HomeController@index')->name('index');
Route::get('shop','HomeController@shop')->name('shop');
Route::get('checkout','HomeController@checkout')->name('checkout');
Route::get('payment','HomeController@payment')->name('payment');
Route::get('single','HomeController@single')->name('single');
Route::view('contact', 'frontend.contact');
Route::view('about', 'frontend.about');
Route::get('login','admin\LoginController@getLogin')->name('login');
Route::POST('login','admin\LoginController@postLogin')->name('logined');

Route::get('logout','admin\LoginController@getLogout')->name('logout');
