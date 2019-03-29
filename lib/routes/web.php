<?php

Route::get('/','HomeController@index')->name('/');
Route::get('index','HomeController@index')->name('index');

Route::get('shop','HomeController@shop')->name('shop');
Route::any('list-search','HomeController@postSearch')->name('list-search');
Route::get('checkout','CheckoutController@index')->name('checkout');
Route::POST('checkout','CheckoutController@postCheckout')->name('checkout');
Route::get('payment','CheckoutController@payment')->name('payment');
Route::POST('sendmail','CheckoutController@sendMail')->name('sendmail');
Route::get('single/{id}','HomeController@single')->name('single');
Route::view('contact', 'frontend.contact')->name('contact');
Route::view('about', 'frontend.about')->name('about');

Route::get('ADMIN',function(){
	if (Auth::check()) {
		if (\Auth::user()->id==1) {
			return redirect()->route('admin-profile');
		}else{
			return	redirect()->route('user');
		}
	}else{
		return	redirect()->route('login');
	}
});
Route::get('login','admin\LoginController@getLogin')->middleware('checkrole')->name('login');
Route::POST('login','admin\LoginController@postLogin')->name('logined');

Route::get('register','admin\LoginController@getRegister')->name('register');
Route::POST('register','admin\LoginController@postRegister')->name('registered');

Route::get('logout','admin\LoginController@getLogout')->name('logout');

Route::POST('shopping','ShoppingCartController@addProduct')->name('shopping');
Route::POST('delete','ShoppingCartController@deleteProduct')->name('delete');
Route::POST('update','ShoppingCartController@updateProduct')->name('update');
Route::POST('search','ShoppingCartController@searchProduct')->name('search');
Route::POST('comment','admin\CommentController@comment')->name('comment');


Route::group(['middleware' => ['auth']], function () {	
	Route::group(['prefix' => 'admin','middleware'=>'admin'], function(){
		Route::get('/', 'admin\ProfileController@index')->name('admin-profile');
		Route::POST('changepass','admin\ProfileController@change')->name('changepass');
		Route::get('getnewcapt','admin\ProfileController@getnewcapt')->name('getnewcapt');
		Route::group(['prefix' => 'category'], function(){
			Route::get('/', 'admin\CategoryController@index')->name('category-list');
			Route::get('/create', 'admin\CategoryController@create')->name('category-create');
			Route::post('/store', 'admin\CategoryController@store')->name('category-store');
			Route::get('/{id}/edit', 'admin\CategoryController@edit')->name('category-edit');
			Route::put('/{id}/update', 'admin\CategoryController@update')->name('category-update');
			Route::delete('/{id}/delete', 'admin\CategoryController@destroy')->name('category-delete');
		});
		Route::group(['prefix' => 'product'], function(){
			Route::get('/list', 'admin\ProductController@index')->name('product-list');
			Route::get('/create', 'admin\ProductController@create')->name('product-create');
			Route::post('/store', 'admin\ProductController@store')->name('product-store');
			Route::get('/{id}/edit', 'admin\ProductController@edit')->name('product-edit');
			Route::put('/{id}/update', 'admin\ProductController@update')->name('product-update');
			Route::delete('/{id}/delete', 'admin\ProductController@destroy')->name('product-delete');
			Route::get('/{id}/showcate', 'admin\ProductController@showCate')->name('category-show');
			Route::get('/{id}/show', 'admin\ProductController@show')->name('product-show');
		});
		Route::group(['prefix' => 'image'], function(){
			Route::get('/create', 'ImageController@create')->name('image-create');
			Route::post('/store', 'ImageController@store')->name('image-store');
		});
		Route::group(['prefix' => 'user'], function(){
			Route::get('/list', 'admin\UserController@index')->name('user-list');
			Route::get('/create', 'admin\UserController@create')->name('user-create');
			Route::post('/store', 'admin\UserController@store')->name('user-store');
			Route::get('/{id}/edit', 'admin\UserController@edit')->name('user-edit');
			Route::put('/{id}/update', 'admin\UserController@update')->name('user-update');
			Route::delete('/{id}/delete', 'admin\UserController@destroy')->name('user-delete');
		});
		Route::group(['prefix' => 'comment'], function(){
			
			Route::get('/list', 'admin\CommentController@index')->name('comment-list');
			Route::delete('/{id}/delete', 'admin\CommentController@destroy')->name('comment-delete');
		});
		Route::group(['prefix' => 'order'], function(){
			Route::get('/list', 'admin\OrderController@index')->name('order-list');
			Route::get('/{id}/edit', 'admin\OrderController@edit')->name('order-edit');
			Route::put('/{id}/update', 'admin\OrderController@update')->name('order-update');
			Route::get('/{id}/comfirm', 'admin\OrderController@confirm')->name('order-comfirm');
			Route::group(['prefix' =>'orderDetail'], function(){
				Route::get('/{id}/orderdetail', 'admin\OrderDetailController@show')->name('orderDetail-show');
			});
		});
	});	Route::group(['prefix' => 'user','middleware'=>'user'], function(){

		Route::get('user','user\UserController@index')->name('user');
		Route::get('/','user\UserController@index')->name('user');
		Route::POST('imageUP','user\UserController@upload')->name('imageUP');
		Route::get('refreshcaptcha', 'user\UserController@refreshCaptcha')->name('refreshcaptcha');
		Route::POST('changed', 'user\UserController@change')->name('changed');
		Route::get('lis-transaction','user\UserController@listtran')->name('list-tran');
		Route::get('transaction-details/{id}','user\UserController@detail')->name('transaction-details');
	});	


});




