@extends('layouts.admin')
@section('content')

<div id="main-content" class="container-fluid">

<div id="page-content" class="page-content">
<div class="row-fluid margin-top20">
<div class="col-xs-9 grider">
<div class="widget widget-simple">
<div>
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
            <h4>Edit Team</h4>
            </li>

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
               <div class="fileupload fileupload-new pull-left" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 50px; height: 50px;"> <img src="http://www.placehold.it/50x50/EFEFEF/AAAAAA" /> </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="width: 50px; height: 50px;"></div>
                                <span class="btn btn-file" style="vertical-align:top"> <span class="fileupload-new">Select image</span> <span class="fileupload-exists">Change</span>
                               {{ Form::file('team_logo','',array('class'=>'span6','id'=>'team_logo'))}}
                                </span> <a href="#" class="btn btn-red fileupload-exists" data-dismiss="fileupload" style="vertical-align:top">Remove</a> </div>
        			
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
              <div class="fileupload fileupload-new pull-left" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 50px; height: 50px;"> <img src="http://www.placehold.it/50x50/EFEFEF/AAAAAA" /> </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="width: 50px; height: 50px;"></div>
                                <span class="btn btn-file" style="vertical-align:top"> <span class="fileupload-new">Select image</span> <span class="fileupload-exists">Change</span>
                             {{ Form::file('jersey_image','',array('class'=>'span6'))}}
                                </span> <a href="#" class="btn btn-red fileupload-exists" data-dismiss="fileupload" style="vertical-align:top">Remove</a> </div>
        			
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
        			{{ Form::textarea('history',$teams['history'],array('class'=>'span6'))}}
              </div>
              </li>
        			

               <li class="control-group">
              {{ Form::label('president_name','President Name')}}
              <div class="controls">
              {{ Form::text('president_name',$teams['president_name'],array('class'=>'span6'))}}
              </div>
              </li>
              
			 <li class="span8 margin-bottom15">

              {{ Form::submit('Update',array('class'=>'btn btn-primary pull-right addbtnmargin'))}}
              {{ Form::hidden('id',Request::segment(3))}}
              {{ HTML::link('admin/teams','Back',array('class'=>'btn btn-success pull-right backbtn'))}}
           		
				</li>
                                
        {{ Form::close() }}

            </ul>
              </div>
                  </div>
                    </div>
                    </div>
                    </div>
                    </div>
    
@stop