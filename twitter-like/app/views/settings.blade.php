@extends('master')

@section('content')

	{{ Form::open(array('route' => array('users.update', $user->id), 'method' => 'put')) }}
			<div class="col-xs-3">
		    {{ Form::text('username', null, array('placeholder'=>'Change your Username', 'class'=>'form-control')) }}
			</div>
		    {{ Form::submit('Update', array('class'=>'btn btn-default')) }} </br>
		    {{ Session::get('username_message') }}
	{{ Form::close() }}

	{{ Form::open(array('route' => array('users.update', $user->id), 'method' => 'put')) }}
			<div class="col-xs-3">
		    {{ Form::email('email', null, array('placeholder'=>'Change your Email adress', 'class'=>'form-control')) }}
			</div>
		    {{ Form::submit('Update', array('class'=>'btn btn-default')) }} </br>
		    {{ Session::get('email_message') }}
	{{ Form::close() }}

	{{ Form::open(array('route' => array('users.update', $user->id), 'method' => 'put')) }}
			<div class="col-xs-3">
		    {{ Form::password('password', array('placeholder'=>'Change your password', 'class'=>'form-control')) }}
			</div>
		    {{ Form::submit('Update', array('class'=>'btn btn-default')) }} </br>
		    {{ Session::get('password_message') }}
	{{ Form::close() }}

	{{ Form::open(array('route' => array('users.destroy', $user->id), 'method' => 'delete')) }}
		    {{ Form::submit('Delete account', array('class'=>'btn btn-default')) }} </br>
	{{ Form::close() }}

@stop