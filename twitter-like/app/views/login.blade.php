@extends('master')

@section('content')

	<h3>Sign in</h3>
	{{ Session::get('message') }}
	
	{{ Form::open(array('url' => 'login')) }}
		<div class="col-xs-2">
	    {{ Form::text('login', null, array('placeholder'=>'Username or email', 'class'=>'form-control')) }} </br>
		</div>
		
		<div class="col-xs-2">
	    {{ Form::password('password', array('placeholder'=>'Password', 'class'=>'form-control')) }} </br>
		</div>

	    {{ Form::submit('Sign in', array('class'=>'btn btn-default')) }} </br>
	    
	    <!-- TODO -->
		{{-- Form::checkbox('remember') --}} 
		<!-- <p>Remember me - Forgot password</p> -->
	{{ Form::close() }}
	
	<h3>New to Twitter? Sign up</h3>
	{{ Form::open(array('url' => 'users')) }}
		<div class="col-xs-2">
	    {{ Form::text('username', null, array('placeholder'=>'Username', 'class'=>'form-control')) }} </br>
		</div>

		<div class="col-xs-2">
	    {{ Form::email('email', null, array('placeholder'=>'Email', 'class'=>'form-control')) }} </br>
		</div>

		<div class="col-xs-2">
	    {{ Form::password('password', array('placeholder'=>'password', 'class'=>'form-control')) }} </br>
		</div>

	    {{ Form::submit('Sign up', array('class'=>'btn btn-default')) }}
	{{ Form::close() }}

@stop