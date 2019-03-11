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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','HomeController@index')->name('list-product');
Route::get('shop','HomeController@shop')->name('shop');
Route::get('checkout','HomeController@checkout')->name('checkout');
Route::get('payment','HomeController@payment')->name('payment');
Route::get('single','HomeController@single')->name('single');
Route::get('contact','HomeController@contact')->name('contact');
Route::get('about','HomeController@about')->name('about');
