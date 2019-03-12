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
<<<<<<< HEAD

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','ProductController@index')->name('list-product');
route::view('ahihi', 'backend.category.list');
=======
Route::get('/','HomeController@index')->name('list-product');
Route::get('shop','HomeController@shop')->name('shop');
Route::get('checkout','HomeController@checkout')->name('checkout');
Route::get('payment','HomeController@payment')->name('payment');
Route::get('single','HomeController@single')->name('single');
Route::view('/welcome', 'frontend.contact');
Route::view('/welcome', 'frontend.about');
>>>>>>> c24174642d02d6ee4df5bfbc30baed7a95a17233
