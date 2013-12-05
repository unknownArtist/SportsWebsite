@extends('layouts.admin')
@section('content')
<div class="row-fluid">
    <div class="span8 grider">
      <div class="widget widget-simple">
        <div class="widget-header">    @if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
     </div>
@endif
   

 
 
  <div class="row-fluid">
        <div class="span12 form-dark">
            <ul class="form-list label-left list-bordered">

    	{{ Form::open(array('url'=>'members/'.$users->user_id.'/update','POST','files'=>true,'class'=>'form-horizontal'))}}
        
                <li class="control-group">
            			{{ Form::label('name','Name')}}
                <div class="controls">        
            			{{ Form::text('name',$users->name,array('class'=>'form-control','id'=>'name'))}}
                 </div>
                    </li>        
                <li class="control-group">
            			{{ Form::label('pname','Nick Name', '', array('class'=>'control-label'))}}
                <div class="controls">        
            			{{ Form::text('player_nickname',$users->player_nickname,array('class'=>'form-control'))}}	
                 </div>
                    </li>        
                <li class="control-group">
            			{{ Form::label('age','age', '', array('class'=>'control-label'))}}
                <div class="controls">        
            			{{ Form::text('age',$users->age,array('class'=>'form-control'))}}
                 </div>
                    </li>        
                <li class="control-group">
            			{{ Form::label('weight','weight', '', array('class'=>'control-label'))}}
                <div class="controls">        
            			{{ Form::text('weight',$users->weight,array('class'=>'form-control'))}}
                 </div>
                    </li>        
            	<li class="control-group">
            			{{ Form::label('height','height', '', array('class'=>'control-label'))}}
                <div class="controls">        
            			{{ Form::text('height',$users->height,array('class'=>'form-control'))}}
                  </div>
                    </li>       
            	<li class="control-group">
            			{{ Form::label('position','position', '', array('class'=>'control-label'))}}
                <div class="controls">        
            			{{ Form::text('position',$users->position,array('class'=>'form-control'))}}
                    </div>
                    </li>     
            	<li class="control-group">
        			{{ Form::label('shoots','shoots', '', array('class'=>'control-label'))}}
                <div class="controls">    
        			{{ Form::text('shoots',$users->shoots,array('class'=>'form-control'))}}
                   </div>
                    </li>  
        		<li class="control-group">
        			{{ Form::label('statistic','statistic', '', array('class'=>'control-label'))}}
                   <div class="controls"> 
        			{{ Form::text('statistic',$users->statistic,array('class'=>'form-control'))}}
                  </div>
                    </li>   
        		<li class="control-group">
        			{{ Form::label('achievements','achievements', '', array('class'=>'control-label'))}}
                    <div class="controls">
        			{{ Form::text('achievements',$users->achievements,array('class'=>'form-control'))}}
                 </div>
                    </li>    
        	<li class="control-group">
                {{ Form::submit('Update',array('class'=>'btn btn-primary','style'=>'margin-top:25px;'))}}
                {{ Form::hidden('id',Request::segment(3))}}
                {{ HTML::link('members','Back',array('class'=>'btn btn-success'))}}
            </li>    
        

        {{ Form::close() }}
            </ul>
              </div>
                  </div>
                    </div>

@stop