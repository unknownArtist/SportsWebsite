@extends('layouts.logout')
@section('content')

<div id="main-content" class="container-fluid">

<div id="page-content" class="page-content">
<div class="row-fluid margin-top20">
<div class="col-xs-12 grider">
<div class="widget widget-simple">
<div class="span3 loginformmargin">
	
<h2 id="adminText">User Registraion</h2>
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
         {{ Form::open(array('user/register','POST'))  }}
              {{ Form::token() }}
      
                  {{ Form::text('email','', array('class'=>'form-control formz span12','placeholder' => 'Email address')) }}
                  {{ Form::password('password' , array('class'=>'form-control formz span12','placeholder' => 'Password','AUTOCOMPLETE' => 'OFF')) }}  
                  {{ Form::submit('Register', array('class'=>'btn btn-success pull-right margin-bottom15 margin-top5')) }}
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