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

    	           {{ Form::open(array('url'=>'admin/team/create','POST','files' => true,'class'=>'form-horizontal'))}}
                     <li class="control-group">
        			{{ Form::label('name','Team Name', '', array('class'=>'control-label'))}}
                    <div class="controls">    
        			{{ Form::text('team_name','',array('class'=>'span6','id'=>'name'))}}
                    </div>
                    </li>

        	        <li class="control-group"> 
        			{{ Form::label('name','Team Logoo', '', array('class'=>'control-label'))}}
                    <div class="controls">    
        			{{ Form::file('team_logo',array('title' => 'team_logo','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4,'class'=>'span6'))}}
                    </div>
                    </li>
                    

        	        <li class="control-group"> 
        			{{ Form::label('team_photo','Team Photo', '', array('class'=>'control-label'))}}
                    <div class="controls">    
        			{{ Form::file('photo_name',array('title' => 'photo_name','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4,'class'=>'span6','id'=>'photo_name'))}}
                    </div>
                    </li>
        	        <li class="control-group"> 
                    {{ Form::label('Team_photos','Team Photo', '', array('class'=>'control-label'))}}
                    <div class="controls">    
                    {{ Form::file('photo_name1',array('title' => 'photo_name1','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4,'class'=>'span6'))}}
                    </div>
                    </li>
                     <li class="control-group"> 
                    {{ Form::label('jersey_image','Jersey Image', '', array('class'=>'control-label'))}}
                    <div class="controls">    
                    {{ Form::file('jersey_image',array('title' => 'jersey_image','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4,'class'=>'span6'))}}
                     <li class="control-group">  
                    {{ Form::label('previous_jerseys','Previous Jerseys', '', array('class'=>'control-label'))}}
                    <div class="controls">    
                    {{ Form::file('previous_jerseysimg',array('title' => 'previous_jerseysimg','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4,'class'=>'span6'))}}
                    </div>
                    </li>
                    
                     <li class="control-group"> 
        			{{ Form::label('previous_jerseys','Previous Jerseys', '', array('class'=>'control-label'))}}
                    <div class="controls">    
        			{{ Form::text('previous_jerseys','',array('class'=>'span6','placeholder'=>'red, blue, green'))}}
                    </div>
                    </li>
        	        <li class="control-group"> 	
        			{{ Form::label('head_coach','Head Coach', '', array('class'=>'control-label'))}}
                    <div class="controls">    
        			{{ Form::text('head_coach','',array('class'=>'span6'))}}
                    </div>
                    </li>
        	        <li class="control-group"> 
                    {{ Form::label('current_jersey','Current Jersey', '', array('class'=>'control-label'))}}
                    <div class="controls">    
                    {{ Form::text('current_jersey','',array('class'=>'span6'))}}
                    </div>
                    </li>
                     <li class="control-group"> 
        			{{ Form::label('assistant_coach','Assistant Coach', '', array('class'=>'control-label'))}}
                    <div class="controls">    
        			{{ Form::text('assistant_coach','',array('class'=>'span6'))}}
                    </div>
                    </li>
        	        <li class="control-group"> 
        			{{ Form::label('time_keepers','Time Keepers', '', array('class'=>'control-label'))}}
                    <div class="controls">    
                    {{ Form::text('time_keepers','',array('class'=>'span6'))}}
                    </div>
                    </li>
        	        <li class="control-group"> 
        			{{ Form::label('disbanded','Team Disbanded', '', array('class'=>'control-label'))}}
                    <div class="controls">    
                    {{Form::text('disbanded','',array('class'=>'span6'))}}
                    </div>
                    </li>
        	        <li class="control-group"> 
                    {{ Form::label('history','Team History', '', array('class'=>'control-label'))}}
                    <div class="controls">    
                    {{ Form::textarea('history','',array('class'=>'span6'))}}
                    </div>
                    </li>
                     <li class="control-group"> 
        			{{ Form::label('referees','Team Referees', '', array('class'=>'control-label'))}}
                    <div class="controls">    
        			{{ Form::text('referees','',array('class'=>'span6'))}}
                    </div>
                    </li>
        		   <li class="control-group"> 
        			{{ Form::label('medics','Team Medics', '', array('class'=>'control-label'))}}
                    <div class="controls">    
        			{{ Form::text('medics','',array('class'=>'span6'))}}
                    </div>
                    </li>
        	        <li class="control-group"> 
        			{{ Form::label('founded','Team Founded', '', array('class'=>'control-label'))}}
                    <div class="controls">    
        			{{ Form::text('founded','',array('class'=>'span6 datepicker'))}}
                    </div>
                    </li>
        	        <li class="control-group"> 
                    {{ Form::label('president_name','President Name', '', array('class'=>'control-label'))}}
                    <div class="controls">    
                    {{ Form::text('president_name','',array('class'=>'span6'))}}
                    </div>
                    </li>
                     <li class="control-group"> 
                    {{ Form::label('Videos','Videos Link', '', array('class'=>'control-label'))}}
                    <div class="controls">    
                    {{ Form::text('video_name','',array('class'=>'span6','id'=>'Videos'))}}
                    </div>
                    </li>
                     <li class="control-group"> 
                    {{ Form::label('Videos2','Videos Link', '', array('class'=>'control-label'))}}
                    <div class="controls">    
                    {{ Form::text('video_name1','',array('class'=>'span6','id'=>'Videos2'))}}
                    </div>
                    </li>
             
            {{ Form::label('','')}}
            {{ Form::hidden('abc','',array('class'=>'span6'))}}
         
                       
                {{ Form::submit('Add',array('class'=>'btn btn-primary pull-right'))}}
                {{ HTML::link('admin/teams','Back',array('class'=>'btn btn-success pull-right backbtn'))}}      
                {{ Form::close() }}
           </div>
       </ul>
        </div>  
        </div> 
        </div>

    
     <script >
         $('.datepicker').datepicker({

            'format': 'yyyy-mm-dd'
         })
  </script>
@stop