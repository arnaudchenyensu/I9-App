<html>
<head>
	<title></title>
</head>
<body>

	{{ Session::get('message'); }}

	{{ Form::open(array('url' => 'login')) }}
		    {{ Form::label('login', 'Username or email: ') }} 
		    {{ Form::text('login') }} </br>

		    {{ Form::label('password', 'Password: ') }}
		    {{ Form::password('password') }} </br>

		    {{ Form::submit('Sign in') }} </br>
		    
		    <!-- TODO -->
			{{ Form::checkbox('remember') }} Remember me - Forgot password
	{{ Form::close() }}
	
	<h3>New to Twitter? Sign up</h3>
	{{ Form::open(array('url' => 'users')) }}
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