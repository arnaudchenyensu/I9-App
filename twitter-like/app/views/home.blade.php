@extends('master')

@section('content')

	<h3>{{ Auth::user()->username }}</h3>
	<a href="settings">Settings</a> |
	<a href="logout">log out</a></br>
	<a href="tweets">{{$tweets->count().' Tweets'}}</a><br>
	<a href="followings">{{$followings->count().' Following'}}</a><br>
	<a href="followers">{{$followers->count().' Followers'}}</a>

	{{ Form::open(array('url' => 'tweets')) }}
		<div class="col-xs-3">
	    {{ Form::text('text', null, array('placeholder'=>'Compose new Tweet', 'class'=>'form-control')) }}
		</div>

	    {{ Form::submit('Tweet', array('class'=>'btn btn-default')) }} </br>
	{{ Form::close() }}
	{{ Session::get('message') }}

	<h3>Tweets</h3>

	@foreach ($followings as $following)
		@foreach ($following->tweets as $tweet)
			<p>{{ '@'. $following->username }}</p>
			<p>{{ $tweet->text }}</p>
		@endforeach
	@endforeach

@stop