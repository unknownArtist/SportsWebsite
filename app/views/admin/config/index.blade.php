@extends('layouts.admin')
@section('content')
	{{ Form::open(array('admin.config.index','Post', 'files' => true))  }}
    {{ Form::token() }}
    {{ Form::label('schedule_link', 'Schedule Link:', array('class'=>'form-control formz')) }}
    {{ Form::textarea('schedule_link','') }}
    {{ Form::submit('Submit', array('class'=>'btn btn-primary span12 formz')) }}
@stop