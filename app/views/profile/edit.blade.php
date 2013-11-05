@extends('layouts.main')
@section('content')
	
	<h1>Index</h1>
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
<h2 id="adminText">My Profile</h2>
   <div class="well" >
        <div id="loginForm">
          
         {{ Form::open(array('method' => 'post', 'action' => array('ProfileController@getEdit', $id))) }}
              {{ Form::token() }}

            {{ Form::label('name', 'Name:', array('class'=>'form-control formz','placeholder' => 'name')) }}
           {{ Form::text('name', Input::old('name')) }}

                  {{ Form::submit('Submit', array('class'=>'btn btn-primary span12 formz')) }}
        </div>
  </div>

  {{ Form::close() }}

@stop
         