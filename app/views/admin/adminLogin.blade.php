@extends('layouts.adminlogin')
@section('content')
	<style>
    #adminText {
      margin-left: 500px;
    }
    #loginForm {
      margin-left: 500px;
    }
    .formz {
      margin-top: 4px;
    }
		.well {
		  
		}
    .form-control {
      width: 250px;
    }
	</style>
<h2 id="adminText">Login to Admin Account</h2>
   <div class="well" >
        <div id="loginForm">
         {{ Form::open(array('admin/login','POST'))  }}
              {{ Form::token() }}
      
                  {{ Form::text('email','', array('class'=>'form-control formz','placeholder' => 'Email address')) }}
                  {{ Form::password('password' , array('class'=>'form-control formz','placeholder' => 'Password','AUTOCOMPLETE' => 'OFF')) }}  
                  {{ Form::submit('Login', array('class'=>'btn btn-primary span12 formz')) }}
        </div>
  </div>

  {{ Form::close() }}

@stop
