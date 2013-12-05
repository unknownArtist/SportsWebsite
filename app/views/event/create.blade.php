@extends('layouts.admin')
@section('content')

<div class="row-fluid">
    <div class="span8 grider">
      <div class="widget widget-simple">
        <div class="widget-header">
    @if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
     </div>
@endif
   

    <div class="row-fluid">
        <div class="span12 form-dark">
            <ul class="form-list label-left list-bordered">

        {{ Form::open(array('url'=>'events/create','POST','files'=>true,'class'=>'form-horizontal'))}}
     
                    <li class="control-group">
                    {{ Form::label('ev_name','Event Name', '', array('class'=>'control-label'))}}
                    <div class="controls">
                    {{ Form::text('ev_name','',array('class'=>'span6','id'=>'ev_name'))}}
                    </div>
                    </li>

                    <li class="control-group">
                    {{ Form::label('ev_time','Event Date&Time', '', array('class'=>'control-label'))}}
                    <div class="controls">
                    {{ Form::text('ev_time','',array('class'=>'span6'))}}
                    </div>
                    </li>
                    
                    <li class="control-group">
                    {{ Form::label('ev_place','Event Place', '', array('class'=>'control-label'))}}
                    <div class="controls">
                    {{ Form::text('ev_place','',array('class'=>'span6'))}}
                    </div>
                    </li>
           
                <li class="control-group">
                {{ HTML::link('events','Back',array('class'=>'btn btn-success'))}}
                {{ Form::submit('Add',array('class'=>'btn btn-primary'))}}
                </li>
         

        {{ Form::close() }}
            </ul>
              </div>
                  </div>
                    </div>
@stop