<html>
<head>
	<title></title>
</head>
<body>

	<h3>{{ Auth::user()->username }}</h3>
	<a href="settings">Settings</a>
	<a href="logout">log out</a>

	{{ Form::open(array('url' => 'tweets')) }}
		    {{ Form::label('text', 'Compose new Tweet: ') }} 
		    {{ Form::text('text') }}

		    {{ Form::submit('Tweet') }} </br>
	{{ Form::close() }}
	{{ Session::get('message') }}

	<h3>Tweets</h3>

	@foreach ($followings as $following)
		@foreach ($following->tweets as $tweet)
			<p>{{ '@'. $following->username }}</p>
			<p>{{ $tweet->text }}</p>
		@endforeach
	@endforeach
</body>
</html>