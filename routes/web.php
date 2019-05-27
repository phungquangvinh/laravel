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

Route::get('/', [
	'as' => 'index',
	'uses' => 'MyController@getIndex',
]);
 Route::post('/', [ 'as' => 'index', 'uses' => 'MyController@postIndex']);

Route::get('shop', [
	'as' => 'shop',
	'uses' => 'MyController@getShop',
]);

Route::get('category/{id}/{TenKhongDau}.html', [ 'as' => 'category', 'uses' => 'MyController@category']);
 
Route::get('logout', [ 'as' => 'logout', 'uses' => 'Auth\LogoutController@getLogout']);

//Quên mật khẩu
Route::get('forgot', [ 'as' => 'forgot', 'uses' => 'Auth\ForgotPasswordController@getForgotPassword']);
Route::post('forgot', [ 'as' => 'forgot', 'uses' => 'Auth\ForgotPasswordController@postForgotPassword']);

// chi tiết sản phẩm
Route::get('chi-tiet-san-pham/{id}/{TenKhongDau}.html', [ 'as' => 'detail', 'uses' => 'MyController@detail']);

//admin
Route::group(['prefix'=>'admin', 'middleware' => 'adminLogin'], function(){
	Route::get('/', [ 'as' => 'admin', 'uses' => 'MyController@admin']);

	Route::group(['prefix'=>'user'], function(){
		Route::get('list', [
			'as' => 'user.list',
			'uses' => 'UserController@list'
		]);

		Route::get('/add', [
			'as' => 'user.add',
			'uses' => 'UserController@add'
		]);

		Route::post('/add', 'UserController@postAdd');

	    Route::get('/edit/{id}', [
			'as' => 'user.edit',
			'uses' => 'UserController@getEdit'
		]);
		Route::post('/edit/{id}', 'UserController@postEdit');

		Route::get('/delete/{id}', [
			'as' => 'user.delete',
			'uses' => 'UserController@getDelete'
		]);
	});

	Route::group(['prefix'=>'role'], function(){
		Route::get('list', [
			'as' => 'role.list',
			'uses' => 'RoleController@list'
		]);

		Route::get('/add', [
			'as' => 'role.add',
			'uses' => 'RoleController@add'
		]);

		Route::post('/add', 'RoleController@postAdd');

	    Route::get('/edit/{id}', [
			'as' => 'role.edit',
			'uses' => 'RoleController@getEdit'
		]);
		Route::post('/edit/{id}', 'RoleController@postEdit');

		Route::get('/delete/{id}', [
			'as' => 'role.delete',
			'uses' => 'RoleController@getDelete'
		]);
	});

	Route::group(['prefix'=>'category'], function(){
		Route::get('list', [
			'as' => 'category.list',
			'uses' => 'CategoryController@list'
		]);

		Route::get('/add', [
			'as' => 'category.add',
			'uses' => 'CategoryController@add'
		]);

		Route::post('/add', 'CategoryController@postAdd');

	    Route::get('/edit/{id}', [
			'as' => 'category.edit',
			'uses' => 'CategoryController@getEdit'
		]);
		Route::post('/edit/{id}', 'CategoryController@postEdit');

		Route::get('/delete/{id}', [
			'as' => 'category.delete',
			'uses' => 'CategoryController@getDelete'
		]);
	});

	Route::group(['prefix'=>'product'], function(){
		Route::get('list', [
			'as' => 'product.list',
			'uses' => 'ProductController@list'
		]);

		Route::get('/add', [
			'as' => 'product.add',
			'uses' => 'ProductController@add'
		]);

		Route::post('/add', 'ProductController@postAdd');

	    Route::get('/edit/{id}', [
			'as' => 'product.edit',
			'uses' => 'ProductController@getEdit'
		]);
		Route::post('/edit/{id}', 'ProductController@postEdit');

		Route::get('/delete/{id}', [
			'as' => 'product.delete',
			'uses' => 'ProductController@getDelete'
		]);
	});

	Route::group(['prefix'=>'slide'], function(){
		Route::get('list', [
			'as' => 'slide.list',
			'uses' => 'SlideController@list'
		]);

		Route::get('/add', [
			'as' => 'slide.add',
			'uses' => 'SlideController@add'
		]);

		Route::post('/add', 'SlideController@postAdd');

	    Route::get('/edit/{id}', [
			'as' => 'slide.edit',
			'uses' => 'SlideController@getEdit'
		]);
		Route::post('/edit/{id}', 'SlideController@postEdit');

		Route::get('/delete/{id}', [
			'as' => 'slide.delete',
			'uses' => 'SlideController@getDelete'
		]);
	});
});

//search
Route::get('search', 'MyController@search');

//người dùng, member
Route::group(['prefix'=>'user'], function(){
	Route::get('/', [ 'as' => 'user', 'uses' => 'HomeController@getUser']);
	Route::post('/', [ 'as' => 'user', 'uses' => 'HomeController@postUser']);
	Route::get('cart', [ 'as' => 'user.cart', 'uses' => 'CartController@cart']);
});

Route::get('test', [ 'as' => 'test', 'uses' => 'MyController@test']);
Route::get('json', 'MyController@getJson');

// trả về auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
