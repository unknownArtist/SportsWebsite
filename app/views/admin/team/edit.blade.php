@extends('layouts.admin')
@section('content')

<div class="container">

<div class="">
    @if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif
    </div>

	<div class="col-xs-7" style="float:none; margin:0 auto;">
    <div class="labellineheight">
    	{{ Form::open(array('url'=>'admin/team/update','POST','files'=>true))}}
        
        			  <div class="col-xs-6">
        			{{ Form::label('name','Team Name')}}
        			{{ Form::text('team_name',$teams['team_name'],array('class'=>'form-control','id'=>'myId'))}}
					</div>
                      <div class="col-xs-6">        		
        			{{ Form::label('name','Team Logo')}}
        			{{ Form::file('team_logo','',array('class'=>'form-control'))}}
        			</div>
                      <div class="col-xs-6">
        			{{ Form::label('current_jersey','Team Jersey')}}
        			{{ Form::text('current_jersey',$teams['current_jersey'],array('class'=>'form-control'))}}
        			</div>
                      <div class="col-xs-6">
        			{{ Form::label('jersey_image','Jersey Image')}}
        			{{ Form::file('jersey_image','',array('class'=>'form-control'))}}
        			</div>
                      <div class="col-xs-6">
        			{{ Form::label('previous_jerseys','Previous Jerseys')}}
        			{{ Form::text('previous_jerseys',$teams['team_name'],array('class'=>'form-control'))}}
        			</div>
                      <div class="col-xs-6">
        			{{ Form::label('head_coach','Head Coach')}}
        			{{ Form::text('head_coach',$teams['head_coach'],array('class'=>'form-control'))}}
        			</div>
                      <div class="col-xs-6">
        			{{ Form::label('assistant_coach','Assistant Coach')}}
        			{{ Form::text('assistant_coach',$teams['assistant_coach'],array('class'=>'form-control'))}}
        			</div>
                      <div class="col-xs-6">
        			{{ Form::label('time_keepers','Time Keepers')}}
        			{{ Form::text('time_keepers',$teams['team_name'],array('class'=>'form-control'))}}
        			</div>
                      <div class="col-xs-6">
        			{{ Form::label('disbanded','Team Disbanded')}}
        			{{ Form::text('disbanded',$teams['disbanded'],array('class'=>'form-control'))}}
        			</div>
                      <div class="col-xs-6">
        			{{ Form::label('referees','Team Referees')}}
        			{{ Form::text('referees',$teams['team_name'],array('class'=>'form-control'))}}
        			</div>
                      <div class="col-xs-6">
        			{{ Form::label('medics','Team Medics')}}
        			{{ Form::text('medics',$teams['team_name'],array('class'=>'form-control'))}}
        			</div>
                      <div class="col-xs-6">
        			{{ Form::label('founded','Team Founded')}}
        			{{ Form::text('founded',$teams['founded'],array('class'=>'form-control'))}}
        			</div>
                      <div class="col-xs-6">
        			{{ Form::label('history','Team History')}}
        			{{ Form::text('history',$teams['history'],array('class'=>'form-control'))}}
        			</div>
                      <div class="col-xs-6">
                    {{ Form::label('president_name','President Name')}}
                    {{ Form::text('president_name',$teams['president_name'],array('class'=>'form-control'))}}
               		</div>
                    <div class="col-xs-6">
                {{ Form::submit('Update',array('class'=>'btn btn-primary pull-right'))}}
                {{ Form::hidden('id',Request::segment(3))}}
                {{ HTML::link('admin/teams','Back',array('class'=>'btn btn-success pull-right backbtn'))}}
           		</div>
                                
        {{ Form::close() }}
        
        </div>
                </div>
                </div>
    
@stop