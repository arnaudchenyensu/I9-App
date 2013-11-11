<?php

class UserController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
		foreach ($users as $user) {
			echo $user;
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('home');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$user = User::create(array(
			'username' => $input['username'],
			'email' => $input['email'],
			'password' => Hash::make($input['password'])
		));
		return Redirect::route('home')
			->with('message', 'Account successfully created, you can now log in.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::find($id);
		if ($user) {
			echo $user;
		} else {
			echo 'No user with id='.$id;
		}
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// Update Username
		if ($new_username = Input::get('username')) {
			if (User::where('username', '=', $new_username)->first()) {
				return Redirect::to('settings')
	            	->with('username_message', 'Username already exists, please choose another one.');
			} else {
				$user = User::find($id);
				$user->username = $new_username;
				$user->push();
				return Redirect::to('settings')
	            	->with('username_message', 'Username successfully updated!');
			}
		}

		// Update email
		if ($new_email = Input::get('email')) {
			if (User::where('email', '=', $new_email)->first()) {
				return Redirect::to('settings')
	            	->with('email_message', 'email already exists, please choose another one.');
			} else {
				$user = User::find($id);
				$user->email = $new_email;
				$user->push();
				return Redirect::to('settings')
	            	->with('email_message', 'email successfully updated!');
			}
		}

		// Update password
		if ($new_password = Input::get('password')) {
			$user = User::find($id);
			$user->password = Hash::make($new_password);
			$user->push();
			return Redirect::to('settings')
            	->with('password_message', 'password successfully updated!');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::find(1);
		$user->delete();
		Auth::logout();
		return Redirect::route('home')
            	->with('message', 'Account successfully deleted!');
	}

}