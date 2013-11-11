<html>
<head>
	<title></title>
</head>
<body>

	<h3>{{ Auth::user()->username }}</h3>
	<a href="logout">log out</a>

	<h3>Tweets</h3>

	@foreach ($followings as $following)
		@foreach ($following->tweets as $tweet)
			<p>{{ '@'. $following->username }}</p>
			<p>{{ $tweet->text }}</p>
		@endforeach
	@endforeach
</body>
</html>