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

// Route::get('/', 'HomeController@index');

Route::get('/', 'OrdersController@create');
Route::get('step1', ['as' => 'step1', 'uses' => 'OrdersController@create']);
Route::get('step2', ['as' => 'step2', 'uses' => 'ClientsController@create']);
Route::get('step3', ['as' => 'step3', 'uses' => 'FilesController@create']);
Route::get('step4', ['as' => 'step4', 'uses' => 'PaymentsController@create']);

Route::post('payments/chargeStripe', ['as' => 'chargeStripe', 'uses' => 'PaymentsController@chargeStripe']);
Route::post('payments/chargePaypal', ['as' => 'chargePaypal', 'uses' => 'PaymentsController@chargePaypal']);
Route::post('payments/chargeSofort', ['as' => 'chargeSofort', 'uses' => 'PaymentsController@chargeSofort']);


// Route::post('step4', ['as' => 'step4', 'uses' => 'PaymentsController@store']);


Route::get('dashboard', 'DashboardController@index');


Route::resource('orders', 'OrdersController');

Route::get('orders/claim/{orders}', ['as' => 'orders.claim', 'uses' => 'OrdersController@claim']);
Route::get('orders/unclaim/{orders}', ['as' => 'orders.unclaim', 'uses' => 'OrdersController@unclaim']);

Route::resource('files', 'FilesController');



// Auth Management
Route::get('login', ['as' => 'getLogin', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('login', ['as' => 'postLogin', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'getLogout', 'uses' => 'Auth\AuthController@getLogout']);
Route::get('register', ['as' => 'getRegister', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('register', ['as' => 'postRegister', 'uses' => 'Auth\AuthController@postRegister']);
Route::get('password', ['as' => 'getPassword', 'uses' => 'Auth\AuthController@getPassword']);
Route::post('password', ['as' => 'postPassword', 'uses' => 'Auth\AuthController@postPassword']);




// Route::get('login', 'UsersController@login');
// Route::get('logout', 'UsersController@logout');

// Route::get('/login', 'Auth\AuthController@getLogin');
// Route::get('/register', 'Auth\AuthController@getRegister');

// Route::controllers([
// 	'auth'     => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);
