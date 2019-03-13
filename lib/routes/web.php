<?php

Route::get('/','ProductController@index')->name('list-product');
route::view('ahihi', 'backend.category.list');

Route::get('/','HomeController@index')->name('list-product');

Route::get('/','HomeController@index')->name('index');
Route::get('index','HomeController@index')->name('index');

Route::get('shop','HomeController@shop')->name('shop');
Route::get('checkout','HomeController@checkout')->name('checkout');
Route::get('payment','HomeController@payment')->name('payment');

Route::get('single/{id}','HomeController@single')->name('single');

Route::view('contact', 'frontend.contact');
Route::view('about', 'frontend.about');
Route::get('login','admin\LoginController@getLogin')->middleware('checkrole')->name('login');
Route::get('register','admin\LoginController@getRegister')->name('register');
Route::POST('register','admin\LoginController@postRegister')->name('registered');
Route::POST('login','admin\LoginController@postLogin')->name('logined');

Route::get('logout','admin\LoginController@getLogout')->name('logout');


//category


Route::group(['middleware' => ['auth']], function () {
	Route::group(['prefix' => 'admin','middleware'=>'admin'], function(){
	//route category
		Route::group(['prefix' => 'category'], function(){
			Route::get('/', 'admin\CategoryController@index')->name('category-list');
			Route::get('/create', 'admin\CategoryController@create')->name('category-create');
			Route::post('/store', 'admin\CategoryController@store')->name('category-store');
			Route::get('/{id}/edit', 'admin\CategoryController@edit')->name('category-edit');
			Route::put('/{id}/update', 'admin\CategoryController@update')->name('category-update');
			Route::delete('/{id}/delete', 'admin\CategoryController@destroy')->name('category-delete');
		});
	});
	Route::group(['prefix' => 'user','middleware'=>'user'], function(){
		Route::view('user','backend.user')->name('user');
	});	
});
