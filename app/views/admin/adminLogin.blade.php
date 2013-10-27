@extends('layouts.adminlogin')
@section('content')
	<style>
		.well {
			margin-left: 300px; 
		}
	</style>
<h1>Login to your account</h1>
  <hr />

   <div class="row-fluid">
          
      <div class="row-fluid">
        <div class="login-box">


  {{ Form::open(array('#','POST'))  }}
  {{ Form::token() }}
  <fieldset class="well">
  	<div class="positioning">
          {{ Form::text('username','', array('id'=>'login_name', 'class' => 'input-block-level', 'placeholder' => 'Email address')) }}


        {{ Form::password('password' , array('id'=>'password', 'class' => 'input-block-level', 'placeholder' => 'Password', 'AUTOCOMPLETE' => 'OFF')) }}


      {{ Form::submit('Login', array('class'=>'btn btn-primary span12')) }}
  </div>
  </fieldset>
  {{ Form::close() }}

@stop
