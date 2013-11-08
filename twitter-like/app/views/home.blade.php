<html>
<head>
	<title></title>
</head>
<body>

	{{ Form::open(array('url' => 'login')) }}
		    {{ Form::label('username', 'Username: ') }} 
		    {{ Form::text('username') }} </br>

		    {{ Form::label('email', 'Email: ') }}
		    {{ Form::email('email') }} </br>

		    {{ Form::label('password', 'Password: ') }}
		    {{ Form::password('password') }} </br>

		    {{ Form::submit('Sign up') }}
	{{ Form::close() }}

</body>
</html>