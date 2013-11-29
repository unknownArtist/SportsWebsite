@extends('layouts.main')
@section('content')

<div class="container">

   {{ Form::open(array('url'=>'user/messages/{id}/reply','POST','files'=>true))}}
   
  	
  	{{ Form::hidden('to',Request::segment(3))}}

<div class="col-xs-12">
	{{ Form::label('msg', 'Message') }}
   	{{ Form::textarea('body','',array('class'=>'form-control')) }}


   	{{ HTML::link('user/messages','Return to inbox',array('class'=>'btn btn-success '))}}
                {{ Form::submit('Send Message',array('class'=>'btn btn-primary pull-right'))}}
                {{ Form::close() }}
                  </div>
              </div>

@stop