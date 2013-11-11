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

	if (Auth::check()) {
		$user = Auth::user();
		$followings = $user->followings;
		return View::make('home')
			->with('followings', $followings);
	}

	return View::make('login');
}));

Route::get('/logout', function()
{
	Auth::logout();
	return Redirect::route('home')
		->with('message', 'You are successfully logged out.');
});

Route::get('/followers', function()
{
	$user = Auth::user();
	$followers = $user->followers;
	foreach ($followers as $follower) {
		echo $follower->username.'</br>';
	}
});

Route::get('/followings', function()
{
	$user = Auth::user();
	$followings = $user->followings;
	foreach ($followings as $following) {
		echo $following->username.'</br>';
	}
});


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
		return Redirect::route('home')
      		->with('message', 'You are successfully logged in.');
	} else {
		// authentication failure! lets go back to the login page
        return Redirect::route('home')
            ->with('message', 'Your username/password combination was incorrect.');
	}
});

Route::resource('users', 'UserController');
Route::resource('tweets', 'TweetController');




