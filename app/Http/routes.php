<?php

use App\Role;
use App\User;
use App\Permission;


Route::get('/', function () {
	return redirect()->route('login');
});


Route::group(['middleware' => ['auth', 'status']], function() {

	Route::get('home', function() {
		return view('home');
	});

	// Admin routes
	Route::group(['prefix' => 'admin', 'middleware' => 'role:Admin'], function() {
		Route::resource('users', 'Admin\UsersController');
		Route::resource('suppliers', 'Admin\SuppliersController');
	});

});


// Authentication routes
Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');

// Route::get('password/email', function() {
// 	return view('auth.password');
// });

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('test', function() {
	// User::first()->roles()->attach(2);
	// return User::with('roles')->first();
	// $user = User::first();
	// if ($user->hasRole('admin')) return 'You are the admin';
	// return 'You are not an admin';
	// $user->removeRole(1);
	// $role = Role::whereName('owner')->first();
	// $user->assignRole($role);

	// return $user->roles;

	// $user->username = 'Administrator';
	// $user->save();
	// return 'user renamed';

});