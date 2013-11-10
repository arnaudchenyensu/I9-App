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

Route::get('/', array('as' => 'home', function()
{
	return View::make('home');
}));


/**
* Login the user.
*
* @return Response 
*/

Route::post('/login', function()
{
	$username_login = array(
	  'username' => Input::get('login'),
	  'password' => Input::get('password')
	);

	$email_login = array(
	  'email' => Input::get('login'),
	  'password' => Input::get('password')
	);

	if (Auth::attempt($username_login) || Auth::attempt($email_login)) {		
		// return Redirect::intended('dashboard');
		// return Redirect::route('home')
  //     		->with('flash_notice', 'You are successfully logged in.');
		return var_dump('User logged');
	} else {
		// authentication failure! lets go back to the login page
        return Redirect::route('home')
            ->with('message', 'Your username/password combination was incorrect.')
            ->withInput();
	}
});

Route::resource('users', 'UserController');




