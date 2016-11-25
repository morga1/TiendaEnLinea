<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::bind('product', function($slug){
	return App\Product::where('slug', $slug)->first();
});

Route::get('/', [
	'as' => 'home',
	'uses' => 'StoreController@index'
]);

Route::get('product/{slug}', [
	'as' => 'product-detail',
	'uses' => 'StoreController@show'
	]
	);


/* Carrito */

Route::get('cart/show', [
	'as' => 'cart-show',
	'uses' => 'CartController@show'
]);
Route::get('cart/add/{product}', [
	'as' => 'cart-add',
	'uses' => 'CartController@add'
]);
Route::get('cart/delete/{product}',[
	'as' => 'cart-delete',
	'uses' => 'CartController@delete'
]);
Route::get('cart/trash', [
	'as' => 'cart-trash',
	'uses' => 'CartController@trash'
]);
Route::get('cart/update/{product}/{quantity?}', [
	'as' => 'cart-update',
	'uses' => 'CartController@update'
]);



// Detalle del pedido

Route::group(['middleware' => 'auth'], function () {

Route::get('order-detail', [
	'as' => 'order-detail',
	'uses' => 'CartController@orderDetail'
]);
}); //---------------- need to fix "boton comprar"


// Autenticacion 5.3 doesn't found
Route::auth();  //------ need to fix autenticacion

Route::get('/home', 'HomeController@index');


// Login
Route::get('auth/login', [
	'as' => 'login-get',
	'uses' => 'Auth\AuthController@getLogin'
]);
Route::post('auth/login', [
	'as' => 'login-post',
	'uses' => 'Auth\AuthController@postLogin'
]);
Route::get('auth/logout', [
	'as' => 'logout',
	'uses' => 'Auth\AuthController@getLogout'
]);

// Registro 
Route::get('auth/register', [
	'as' => 'register-get',
	'uses' => 'Auth\AuthController@getRegister'
]);
Route::post('auth/register', [
	'as' => 'register-post',
	'uses' => 'Auth\AuthController@postRegister'
]);


// -----  Administrador  ------ 

//Categorias

Route::resource('admin/category', 'Admin\CategoryController');