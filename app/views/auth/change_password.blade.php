@extends('layouts.logout')
@section('content')
	<div id="main-content" class="container-fluid">

<div id="page-content" class="page-content">
<div class="row-fluid margin-top20">
<div class="span3 grider" style="float:none; margin:100px auto 100px auto;">
<div class="widget widget-simple">
<div class="span12">
<h2 id="adminText">Reset Password</h2>
   <div class="" >
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
         {{ Form::open(array('login','POST'))  }}
              {{ Form::token() }}
      
                 {{ Form::password('password' , array('class'=>'form-control formz span12','placeholder' => 'Password','AUTOCOMPLETE' => 'OFF')) }} 
                  {{ Form::password('password' , array('class'=>'form-control formz span12','placeholder' => 'Confirm Password','AUTOCOMPLETE' => 'OFF')) }}  
                  {{ Form::submit('Update', array('class'=>'btn btn-primary pull-right margin-bottom15 margin-top5')) }}
        </div>

  </div>
{{ Form::close() }}


</div>
</div>
</div>
</div>
</div>
</div>
@stop
