@extends('layouts.main')
@section('content')

<div class="container">

    
  <div class="col-xs-12">
  <h3>Create New Message</h3>
</div>
   {{ Form::open(array('url'=>'user/message/compose','POST','files'=>true))}}
    <div class="col-xs-12">
  	{{ Form::label('send_to', 'Send To') }}
  	{{Form::select('to',$teams, '', array('class'=>'form-control selectwidth'));}}
  </div>	
    <div class="col-xs-12">
   	{{ Form::label('m_subject', 'Message Subject') }}
   	{{ Form::text('subject','',array('class'=>'form-control')) }}
   </div>	

<div class="col-xs-12">
	{{ Form::label('msg', 'Message') }}
   	{{ Form::textarea('body','',array('class'=>'form-control')) }}


   	{{ HTML::link('user/messages','Return to inbox',array('class'=>'btn btn-success '))}}
                {{ Form::submit('Send Message',array('class'=>'btn btn-primary pull-right'))}}
                {{ Form::close() }}
                  </div>
              </div>

@stop