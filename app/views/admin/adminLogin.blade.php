@extends('layouts.adminlogin')
@section('content')
	<div id="main-content" class="container-fluid">

<div id="page-content" class="page-content">
<div class="row-fluid margin-top20">
<div class="span3 grider" style="float:none; margin:100px auto 100px auto;">
<div class="widget widget-simple">
<div class="span12 loginformmargin ">
<h4 id="adminText" class="widget-header">Login to Admin Account</h4>
   <div class="" >
        <div id="loginForm">
         {{ Form::open(array('admin/login','POST'))  }}
              {{ Form::token() }}
      
                  {{ Form::text('email','', array('class'=>'form-control formz span12','placeholder' => 'Email address')) }}
                  {{ Form::password('password' , array('class'=>'form-control formz span12','placeholder' => 'Password','AUTOCOMPLETE' => 'OFF')) }}  
                  {{ Form::submit('Login', array('class'=>'btn btn-primary pull-right margin-bottom15 margin-top5')) }}
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
