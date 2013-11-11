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

</body>
</html>