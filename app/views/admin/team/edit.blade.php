@extends('layouts.admin')
@section('content')

<div class="row-fluid">
    <div class="span8 grider">
      <div class="widget widget-simple">
        <div class="widget-header">
    @if ($errors->any())
    <ul style="color:red;">
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
      </div>
@endif
  

	<div class="row-fluid">
        <div class="span12 form-dark">
            <ul class="form-list label-left list-bordered">

    	{{ Form::open(array('url'=>'admin/team/update','POST','files'=>true,'class'=>'form-horizontal'))}}
        
        		<li class="control-group">
        			{{ Form::label('name','Team Name', '', array('class'=>'control-label'))}}
              <div class="controls">
        			{{ Form::text('team_name',$teams['team_name'],array('class'=>'span6','id'=>'name'))}}
              </div>
              </li>
					      
             <li class="control-group">
        			{{ Form::label('team_logo','Team Logo', '', array('class'=>'control-label'))}}
              <div class="controls">
        			{{ Form::file('team_logo','',array('class'=>'span6','id'=>'team_logo'))}}
              </div>
              </li>
        		 <li class="control-group">

        			{{ Form::label('current_jersey','Team Jersey', '', array('class'=>'control-label'))}}
              <div class="controls">
        			{{ Form::text('current_jersey',$teams['current_jersey'],array('class'=>'span6'))}}
              </div>
              </li>
        			
               <li class="control-group">
        			{{ Form::label('jersey_image','Jersey Image', '', array('class'=>'control-label'))}}
              <div class="controls">
        			{{ Form::file('jersey_image','',array('class'=>'span6'))}}
              </div>
              </li>
        			
               <li class="control-group">
        			{{ Form::label('previous_jerseys','Previous Jerseys', '', array('class'=>'control-label'))}}
              <div class="controls">
        			{{ Form::text('previous_jerseys',$teams['team_name'],array('class'=>'span6'))}}
              </div>
              </li>
        			
               <li class="control-group">
        			{{ Form::label('head_coach','Head Coach', '', array('class'=>'control-label'))}}
              <div class="controls">
        			{{ Form::text('head_coach',$teams['head_coach'],array('class'=>'span6'))}}
              </div>
              </li>
        			

               <li class="control-group">
        			{{ Form::label('assistant_coach','Assistant Coach', '', array('class'=>'control-label'))}}
              <div class="controls">
        			{{ Form::text('assistant_coach',$teams['assistant_coach'],array('class'=>'span6'))}}
              </div>
              </li>
        			
               <li class="control-group">
        			{{ Form::label('time_keepers','Time Keepers', '', array('class'=>'control-label'))}}
              <div class="controls">
        			{{ Form::text('time_keepers',$teams['team_name'],array('class'=>'span6'))}}
              </div>
              </li>
        			
               <li class="control-group">
              {{ Form::label('disbanded','Team Disbanded', '', array('class'=>'control-label'))}}
              <div class="controls">
        			{{ Form::text('disbanded',$teams['disbanded'],array('class'=>'span6'))}}
              </div>
              </li>
        			

               <li class="control-group">
        			{{ Form::label('referees','Team Referees', '', array('class'=>'control-label'))}}
              <div class="controls">
        			{{ Form::text('referees',$teams['team_name'],array('class'=>'span6'))}}
              </div>
              </li>
        			

               <li class="control-group">
        			{{ Form::label('medics','Team Medics')}}
              <div class="controls">
        			{{ Form::text('medics',$teams['team_name'],array('class'=>'span6'))}}
              </div>
              </li>
        			

               <li class="control-group">
        			{{ Form::label('founded','Team Founded')}}
              <div class="controls">
        			{{ Form::text('founded',$teams['founded'],array('class'=>'span6'))}}
              </div>
              </li>
        			

               <li class="control-group">
        			{{ Form::label('history','Team History')}}
              <div class="controls">
        			{{ Form::text('history',$teams['history'],array('class'=>'span6'))}}
              </div>
              </li>
        			

               <li class="control-group">
              {{ Form::label('president_name','President Name')}}
              <div class="controls">
              {{ Form::text('president_name',$teams['president_name'],array('class'=>'span6'))}}
              </div>
              </li>
              


              {{ Form::submit('Update',array('class'=>'btn btn-primary pull-right'))}}
              {{ Form::hidden('id',Request::segment(3))}}
              {{ HTML::link('admin/teams','Back',array('class'=>'btn btn-success pull-right backbtn'))}}
           		

                                
        {{ Form::close() }}

            </ul>
              </div>
                  </div>
                    </div>
    
@stop