@extends('layouts.main')
@section('content')

<div class="container">

    
  <div class="col-xs-12">
  <h3>Create New Message</h3>
</div>
    <div class="col-xs-12">
  	{{ Form::label('send_to', 'Send To') }}
  	{{Form::select('users', array( 'S' => 'Steve', 'A' => 'peter'), array('class'=>'form-control input-lg'));}}
  </div>	
    <div class="col-xs-12">
   	{{ Form::label('m_subject', 'Message Subject') }}
   	{{ Form::text('m_subject','',array('class'=>'form-control')) }}
   </div>	

<div class="col-xs-12">
	{{ Form::label('msg', 'Message') }}
   	{{ Form::textarea('m_subject','',array('class'=>'form-control')) }}


   	{{ HTML::link('admin/teams','Return to inbox',array('class'=>'btn btn-success '))}}
                {{ Form::submit('Send Message',array('class'=>'btn btn-primary pull-right'))}}
                {{ Form::close() }}
                  </div>
              </div>

@stop