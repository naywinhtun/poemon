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







Route::group(['middleware' => ['auth']], function () {
	// Route::get('/', function () {
	// 	return view('user.login');
	// });
	Route::get('/update','UserController@edit' )->name('home');
	Route::patch('user/update','UserController@update');

	Route::get('/logout','LoginController@destroy');
});

Route::group(['middleware' => ['guest']], function () {

	Route::get('/login', function () {
		return view('user.login');
	})->name('login');

	Route::get('/register', function () {
		return view('user.register');
	});

	Route::post('user/register', 'UserController@store');

	Route::post('user/login','LoginController@Store');

});




