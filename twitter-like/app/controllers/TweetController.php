<?php

class TweetController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Auth::check()) {
			$tweets = Tweet::all();
			foreach ($tweets as $tweet) {
				echo $tweet;
			}
		} else {
			return Redirect::route('home')
            	->with('message', 'Please log in first');
        }
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		if (Auth::check()) {

		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if (Auth::check()) {
			$input = Input::all();
			$tweet = Tweet::create(array(
				'text' => $input['text'],
				'user_id' => Auth::User()->id
			));
			return Redirect::route('home')
      			->with('message', 'Tweet posted!');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		if (Auth::check()) {
			$tweet = Tweet::find($id);
			if ($tweet) {
				echo $tweet;
			} else {
				echo 'No tweet with id='.$id;
			}
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
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}