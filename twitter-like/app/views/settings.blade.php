<html>
<head>
	<title></title>
</head>
<body>

	{{ Form::open(array('route' => array('users.update', $user->id), 'method' => 'put')) }}
		    {{ Form::label('text', 'Change your Username: ') }} 
		    {{ Form::text('username') }}
		    {{ Form::submit('Change') }} </br>
		    {{ Session::get('username_message') }}
	{{ Form::close() }}

	{{ Form::open(array('route' => array('users.update', $user->id), 'method' => 'put')) }}
		    {{ Form::label('text', 'Change your Email adress: ') }} 
		    {{ Form::email('email') }}
		    {{ Form::submit('Change') }} </br>
		    {{ Session::get('email_message') }}
	{{ Form::close() }}

	{{ Form::open(array('route' => array('users.update', $user->id), 'method' => 'put')) }}
		    {{ Form::label('text', 'Change your password: ') }} 
		    {{ Form::password('password') }}
		    {{ Form::submit('Change') }} </br>
		    {{ Session::get('password_message') }}
	{{ Form::close() }}

</body>
</html>