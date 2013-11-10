<html>
<head>
	<title></title>
</head>
<body>

	<h3> {{ Auth::user()->username }}'s Home Page </h3>

	<h3>Tweets</h3>

	@foreach ($tweets as $tweet)
		<p>{{ '@'. $tweet->user->username }}</p>
    	<p>{{ $tweet->text }}</p>
	@endforeach
</body>
</html>