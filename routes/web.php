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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/github', [

	'uses' => 'Auth\LoginController@redirectToProvider',
	'as' => 'login.github'

]);

Route::get('login/github/callback', [

	'uses' => 'Auth\LoginController@handleProviderCallback',
	'as' => 'callback.github'

]);

Route::group(['middleware' => 'auth'], function(){

	Route::resource('credits', 'CreditsController');
	Route::resource('debits', 'DebitsController');
	Route::resource('transactions', 'TransactionsController');


	Route::get('/users', [

		'uses' => 'UsersController@index',
		'as' => 'users'

	]);

	

	

	Route::get('/user/admin/{id}', [

		'uses' => 'UsersController@admin',
		'as' => 'user.admin'

	]);

	Route::get('/user/not-admin/{id}', [

		'uses' => 'UsersController@not_admin',
		'as' => 'user.not.admin'

	]);

	

	Route::get('/user/delete/{id}',[

		'uses' => 'UsersController@destroy',
		'as' => 'user.delete'

	]);
	Route::get('/transac/create1',[

		'uses' => 'TransCon@create1',
		'as' => 'transactions.create1'

	]);
	Route::get('/transac/create2',[

		'uses' => 'TransCon@create2',
		'as' => 'transactions.create2'

	]);
	Route::post('/transac/store1',[

		'uses' => 'TransCon@store1',
		'as' => 'transactions.store1'

	]);
	Route::post('/transac/store2',[

		'uses' => 'TransCon@store2',
		'as' => 'transactions.store2'

	]);
	Route::post('/rekap',[

		'uses' => 'TransCon@rekapIndex',
		'as' => 'rekap'

	]);
});
