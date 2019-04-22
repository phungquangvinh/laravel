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

Route::get('collection', [
	'as' => 'collection',
	'uses' => 'MyController@Collection',
]);
 
Route::get('register', 'Auth\RegisterController@getRegister');
Route::post('register', 'Auth\RegisterController@postRegister');
 
Route::get('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@postLogin']);
 
Route::get('logout', [ 'as' => 'logout', 'uses' => 'Auth\LogoutController@getLogout']);

//Quên mật khẩu
Route::get('forgot', [ 'as' => 'forgot', 'uses' => 'Auth\ForgotPasswordController@getForgotPassword']);
Route::post('forgot', [ 'as' => 'forgot', 'uses' => 'Auth\ForgotPasswordController@postForgotPassword']);

// form
Route::get('form', [ 'as' => 'form', 'uses' => 'MyController@getForm']);
// Route::post('form', [ 'as' => 'form', 'uses' => 'MyController@postForm']);

// upload file
Route::get('uploadFile',function()
{
 	return view('collection');
});

Route::post('postFile',[
 	'as'=>'postFile',
 	'uses'=>'MyController@postFile'
]);

// tính toán
Route::get('chi-tiet-san-pham/{id}', [ 'as' => 'detail', 'uses' => 'MyController@detail']);

//admin
Route::group(['prefix'=>'admin'], function(){
	Route::get('/','MyController@admin')->name('/');

	Route::group(['prefix'=>'user'], function(){
		Route::get('list', [
			'as' => 'user.list',
			'uses' => 'AdminController@list'
		]);

		Route::get('/add', [
			'as' => 'user.add',
			'uses' => 'AdminController@add'
		]);

		Route::post('/add', 'AdminController@postAdd');

	    Route::get('/edit/{id}', [
			'as' => 'user.edit',
			'uses' => 'AdminController@getEdit'
		]);
		Route::post('/edit/{id}', 'AdminController@postEdit');

		Route::get('/delete/{id}', [
			'as' => 'user.delete',
			'uses' => 'AdminController@getDelete'
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
});

Route::get('test', [ 'as' => 'test', 'uses' => 'MyController@test']);
Route::get('json', 'MyController@getJson');

// trả về auth
Auth::routes();