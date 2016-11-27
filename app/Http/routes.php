<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
	//store
    Route::get('/','StoreController@index');
    Route::get('store',
    	[
    	'as' => 'store',
    	'uses' => 'StoreController@index'
    	]);
    Route::get('producto/{producto}', //producto/{producto}
    	[
    	'as' => 'verproducto', //detalle-producto
    	'uses' => 'StoreController@verproducto' //StoreController@verproducto
    	]);

    /*Carrito*/
    Route::get('carrito',[ 
    	'as' => 'carrito-show',
    	'uses' => 'CarritoController@show'
    	]);
    Route::get('carrito/add/{producto}',[ //cart/add/{producto}
    	'as' => 'carrito-add',
    	'uses' => 'CarritoController@store'
    	]);
    Route::get('carrito/delete/{id}',[
    	'as' => 'carrito-delete',
    	'uses' => 'CarritoController@delete' 
    	]);
     Route::get('carrito/update/{id}/{cantidad}',[
        'as' => 'carrito-update',
        'uses' => 'CarritoController@update'
        ]);
     Route::get('ordendetalle',[        
    'as' => 'orden-detalle',
    'uses' => 'CarritoController@ordenDetalle'
    ])->middleware(['auth']);   
     //paypal
     Route::get('payment', array(
    'as' => 'payment',
    'uses' => 'PaypalController@postPayment',
    ));
 
    Route::get('payment/status', array(
    'as' => 'payment.status',
    'uses' => 'PaypalController@getPaymentStatus',
    ));
     /*Admin*/
     Route::get('admin',[
        'middleware' => 'auth',
        'as' => 'admin-show',
        'uses' => 'AdminController@show'
        ]);    
     Route::resource('admin/categoria','CategoriaController');
     Route::resource('admin/producto','ProductoController');//admin/producto@ProductoController
     Route::resource('admin/orden','OrdenController');
     Route::resource('admin/usuario','UsuarioController');
     
});


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
