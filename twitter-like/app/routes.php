<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::resource('user', 'UserController');

// Route::post('login', function()
// {
// 	$input = Input::all();
// 	$user = User::create(array(
// 		'username' => $input['username'],
// 		'email' => $input['email'],
// 	));

// 	return View::make('hello');
// });