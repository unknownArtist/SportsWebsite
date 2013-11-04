@extends('layouts.adminlogin')
@section('content')
	<style>
  #errors 
    {
       margin-left: 500px;
       color: red;
    }
  #success 
    {
       margin-left: 500px;
       color: green;
    }

    #adminText {
      margin-left: 550px;
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
<h2 id="adminText">User Registraion</h2>
   <div class="well" >
     <div id="errors">
        @if (Session::get('errors'))
          {{ Session::get('errors') }}
        @endif
      </div>
      <div id="success">
        @if (Session::get('success'))
          {{ Session::get('success') }}
        @endif

      </div>

        <div id="loginForm">
         {{ Form::open(array('user/register','POST'))  }}
              {{ Form::token() }}
      
                  {{ Form::text('email','', array('class'=>'form-control formz','placeholder' => 'Email address')) }}
                  {{ Form::password('password' , array('class'=>'form-control formz','placeholder' => 'Password','AUTOCOMPLETE' => 'OFF')) }}  
                  {{ Form::submit('Register', array('class'=>'btn btn-success span12 formz')) }}
        </div>
  </div>
{{ Form::close() }}

@stop