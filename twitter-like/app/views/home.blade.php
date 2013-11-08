<html>
<head>
	<title></title>
</head>
<body>

	{{ Form::open(array('url' => 'user')) }}
		    {{ Form::label('username', 'Username or email: ') }} 
		    {{ Form::text('username') }} </br>

		    {{ Form::label('email', 'Email: ') }}
		    {{ Form::email('email') }} </br>

		    {{ Form::submit('Sign in') }} </br>
		    
		    <!-- TODO -->
			{{ Form::checkbox('remember') }} Remember me - Forgot password
	{{ Form::close() }}
	
	<h3>New to Twitter? Sign up</h3>
	{{ Form::open(array('url' => 'user')) }}
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