@extends('layouts.main')
@section('content')

 <div id="main-content" class="container-fluid">

<div id="page-content" class="page-content">
<div class="row-fluid margin-top20">
<div class="col-xs-9 grider">
<div class="widget widget-simple">
	
    <div class="">
    @if ($errors->any())
    <ul style="color:red;">
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
    </div>
@endif
  <div class="row-fluid">
        <div class="span12 form-dark">
            <ul class="form-list label-left list-bordered">
        
                      {{ Form::open(array('profile.create','Post', 'files' => true,'class'=>'form-horizontal'))  }}
                      {{ Form::token() }}
                 
                <li class="control-group">     
          
                      {{ Form::label('team', 'Teams', '', array('class'=>'control-label selectpicker-block')) }}
              <div class="controls">    
                      {{Form::select('team', $teams, '', array('class'=>'span6'))}}    
              </div>
                </li>
                <li class="control-group">
                      {{ Form::label('name', 'Name', '', array('class'=>'control-label')) }}
                     <div class="controls"> 
                      {{ Form::text('name','',array('class'=>'span6')) }}
                    </div>
                </li>
                 <li class="control-group">
                      {{ Form::label('player_nickname', 'NickName', '', array('class'=>'control-label')) }}
                     <div class="controls">
                      {{ Form::text('player_nickname','',array('class'=>'span6')) }}
                     </div>
                 </li>
                 <li class="control-group">     
                      {{ Form::label('age', 'Age', '', array('class'=>'control-label')) }}
                      <div class="controls">
                      {{ Form::text('age','',array('class'=>'span6')) }}
                </div>
                </li>
                <li class="control-group">
                      {{ Form::label('weight', 'Weight', '', array('class'=>'control-label')) }}
                      <div class="controls">
                      {{ Form::text('weight','',array('class'=>'span6')) }}
                </div>
                </li>  
               <li class="control-group">
                      {{ Form::label('height', 'Height', '', array('class'=>'control-label')) }}
                      <div class="controls">
                      {{ Form::text('height','',array('class'=>'span6')) }}
                </div>
                </li>
                <li class="control-group">
                      {{ Form::label('position', 'Position', '', array('class'=>'control-label')) }}
                      <div class="controls">
                      {{ Form::text('position','',array('class'=>'span6')) }}
                </div>
                </li>
                <li class="control-group">
                      {{ Form::label('shoots', 'Shoots', '', array('class'=>'control-label')) }}
                      <div class="controls">
                      {{ Form::text('shoots','',array('class'=>'span6')) }}
                </div>
                </li>
                <li class="control-group">
                      {{ Form::label('achievements', 'Achievements', '', array('class'=>'control-label')) }}
                      <div class="controls">
                      {{ Form::textarea('achievements','',array('class'=>'span6')) }}
                </div>
                </li>
                <li class="control-group">
                      {{ Form::label('statistic', 'Statistics', '', array('class'=>'control-label')) }}
                      <div class="controls">
                      {{ Form::text('statistic','',array('class'=>'span6')) }}
                 </div>
                </li>
         
                <li class="control-group">
                      {{ Form::label('current_teams', 'Current teams', '', array('class'=>'control-label')) }}
                      <div class="controls">
                      {{ Form::text('current_teams','',array('class'=>'span6')) }}
                  </div>
                </li>
          
                <li class="control-group">
                      {{ Form::label('previous_teams', 'Previous Teams', '', array('class'=>'control-label')) }}
                      <div class="controls">
                      {{ Form::text('previous_teams','',array('class'=>'span6')) }}
                  </div>
                </li>
        
                <li class="control-group">
                    	{{ Form::label('userprofileimage', 'Choose Your Picture', '', array('class'=>'control-label')) }}
                      <div class="controls">
                    
                      <div class="fileupload fileupload-new pull-left" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 50px; height: 50px;"> <img src="http://www.placehold.it/50x50/EFEFEF/AAAAAA" /> </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="width: 50px; height: 50px;"></div>
                                <span class="btn btn-file" style="vertical-align:top"> <span class="fileupload-new">Select image</span> <span class="fileupload-exists">Change</span>
                                 {{ Form::file('player_profile_photos', array('title' => 'player_profile_photos','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4, 'class'=>'span6')) }}
                                </span> <a href="#" class="btn btn-red fileupload-exists" data-dismiss="fileupload" style="vertical-align:top">Remove</a> </div>
                </div>
                </li>
         
                
                <li class="margin-bottom15 span2 loginformmargin">
                	
                      {{ HTML::link('profile','Back',array('class'=>'btn btn-success'))}}                  
              		
                  
                      {{ Form::submit('Submit', array('class'=>'btn btn-primary ')) }}
                      
                </li>      
                
        
      {{ Form::close() }}
       </ul> 
    </div>
   
    
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    
    

@stop