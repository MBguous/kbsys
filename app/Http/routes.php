<?php

use App\Role;
use App\User;
use App\Permission;

Route::get('/', function () {
	return view('app');
});

Route::get('home', ['middleware' => 'auth', function() {
	return view('home');
}]);

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('password/email', function() {
	return view('auth.password');
});

Route::get('admin/users', 'Admin\UsersController@index');