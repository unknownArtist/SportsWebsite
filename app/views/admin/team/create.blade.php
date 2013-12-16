@extends('layouts.admin')
@section('content')

<div id="main-content" class="container-fluid">

<div id="page-content" class="page-content">
<div class="row-fluid margin-top20">
<div class="col-xs-9 grider">
<div class="widget widget-simple">
    @if ($errors->any())
    <ul style="color:red;">
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
     </div>
@endif
    
	<div class="row-fluid">
        <div class="span12 form-dark">
            <ul class="form-list label-left list-bordered">
            <li class="section-form">
            <h4>Add New Team</h4>
            </li>

    	           {{ Form::open(array('url'=>'admin/team/create','POST','files' => true,'class'=>'form-horizontal'))}}
                     <li class="control-group">
        			{{ Form::label('name','Team Name', '', array('class'=>'control-label'))}}
                    <div class="controls">    
        			{{ Form::text('team_name','',array('class'=>'span6','id'=>'name'))}}
                    </div>
                    </li>

        	        <li class="control-group"> 
        			{{ Form::label('name','Team Logo', '', array('class'=>'control-label'))}}
                    <div class="controls"> 
                    <div class="fileupload fileupload-new pull-left" data-provides="fileupload" style="margin-bottom:0px;">
                                <div class="fileupload-new thumbnail" style="width: 50px; height: 50px;"> <img src="http://www.placehold.it/50x50/EFEFEF/AAAAAA" /> </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="width: 50px; height: 50px;"></div>
                                <span class="btn btn-file" style="vertical-align:top"> <span class="fileupload-new">Select image</span> <span class="fileupload-exists">Change</span>
                                {{ Form::file('team_logo',array('title' => 'team_logo','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4,'class'=>'span6'))}}
                                </span> <a href="#" class="btn btn-red fileupload-exists" data-dismiss="fileupload" style="vertical-align:top">Remove</a> </div>   
        			
                    </div>
                    </li>
                    

        	        <li class="control-group"> 
        			{{ Form::label('team_photo','Team Photo', '', array('class'=>'control-label'))}}
                    <div class="controls">  
                      <div class="fileupload fileupload-new pull-left" data-provides="fileupload" style="margin-bottom:0px;">
                                <div class="fileupload-new thumbnail" style="width: 50px; height: 50px;"> <img src="http://www.placehold.it/50x50/EFEFEF/AAAAAA" /> </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="width: 50px; height: 50px;"></div>
                                <span class="btn btn-file" style="vertical-align:top"> <span class="fileupload-new">Select image</span> <span class="fileupload-exists">Change</span>
                               {{ Form::file('photo_name',array('title' => 'photo_name','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4,'class'=>'span6','id'=>'photo_name'))}}
                                </span> <a href="#" class="btn btn-red fileupload-exists" data-dismiss="fileupload" style="vertical-align:top">Remove</a> </div>
        			
                    </div>
                    </li>
        	        <li class="control-group"> 
                    {{ Form::label('Team_photos','Team Photo', '', array('class'=>'control-label'))}}
                    <div class="controls">
                    <div class="fileupload fileupload-new pull-left" data-provides="fileupload" style="margin-bottom:0px;">
                                <div class="fileupload-new thumbnail" style="width: 50px; height: 50px;"> <img src="http://www.placehold.it/50x50/EFEFEF/AAAAAA" /> </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="width: 50px; height: 50px;"></div>
                                <span class="btn btn-file" style="vertical-align:top"> <span class="fileupload-new">Select image</span> <span class="fileupload-exists">Change</span>
                              {{ Form::file('photo_name1',array('title' => 'photo_name1','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4,'class'=>'span6'))}}
                                </span> <a href="#" class="btn btn-red fileupload-exists" data-dismiss="fileupload" style="vertical-align:top">Remove</a> </div>    
                    
                    </div>
                    </li>
                     <li class="control-group"> 
                    {{ Form::label('jersey_image','Jersey Image', '', array('class'=>'control-label'))}}
                    <div class="controls"> 
                    <div class="fileupload fileupload-new pull-left" data-provides="fileupload" style="margin-bottom:0px;">
                                <div class="fileupload-new thumbnail" style="width: 50px; height: 50px;"> <img src="http://www.placehold.it/50x50/EFEFEF/AAAAAA" /> </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="width: 50px; height: 50px;"></div>
                                <span class="btn btn-file" style="vertical-align:top"> <span class="fileupload-new">Select image</span> <span class="fileupload-exists">Change</span>
                              {{ Form::file('jersey_image',array('title' => 'jersey_image','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4,'class'=>'span6'))}}
                                </span> <a href="#" class="btn btn-red fileupload-exists" data-dismiss="fileupload" style="vertical-align:top">Remove</a> </div>   
                   
                     <li class="control-group">  
                    {{ Form::label('previous_jerseys','Previous Jerseys', '', array('class'=>'control-label'))}}
                    <div class="controls"> 
                    <div class="fileupload fileupload-new pull-left" data-provides="fileupload" style="margin-bottom:0px;">
                                <div class="fileupload-new thumbnail" style="width: 50px; height: 50px;"> <img src="http://www.placehold.it/50x50/EFEFEF/AAAAAA" /> </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="width: 50px; height: 50px;"></div>
                                <span class="btn btn-file" style="vertical-align:top"> <span class="fileupload-new">Select image</span> <span class="fileupload-exists">Change</span>
                              {{ Form::file('previous_jerseysimg',array('title' => 'previous_jerseysimg','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4,'class'=>'span6'))}}
                                </span> <a href="#" class="btn btn-red fileupload-exists" data-dismiss="fileupload" style="vertical-align:top">Remove</a> </div>   
                   
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
        			{{ Form::text('founded','',array('class'=>'span6 input-medium margin-00', 'id'=>'datePicker'))}}
                    </div>
                    
                    </li>
                    
                     <li class="control-group"> 
        			{{ Form::label('disbanded','Team Disbanded', '', array('class'=>'control-label'))}}
                    <div class="controls">    
                   {{ Form::text('disbanded','',array('class'=>'span6 input-medium margin-00', 'id'=>'datePicker'))}}
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
             <li class="span8 margin-bottom15">
            {{ Form::label('','')}}
            {{ Form::hidden('abc','',array('class'=>'span6'))}}        
                      
                {{ Form::submit('Add',array('class'=>'btn btn-primary pull-right addbtnmargin'))}}
                 {{ HTML::link('admin/teams','Back',array('class'=>'btn btn-success backbtn pull-right'))}}
                      
                {{ Form::close() }}
           		</li>
       </ul>
       </div>
        </div>  
        </div> 
        </div>
        </div>
        </div>
            
     <script >
         $('.datepicker').datepicker({

            'format': 'yyyy-mm-dd'
         })
  </script>
@stop