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


    	{{ Form::open(array('url'=>'admin/team/create','POST','files' => true))}}
            <div class="col-xs-6">
        			{{ Form::label('name','Team Name')}}
        			{{ Form::text('team_name','',array('class'=>'form-control','id'=>'myId'))}}

        	</div>
            <div class="col-xs-6">
        			{{ Form::label('name','Team Logoo')}}

        			{{ Form::file('team_logo',array('title' => 'team_logo','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4,'class'=>'form-control'))}}
                    

        	</div>
        	<div class="col-xs-6">
        			{{ Form::label('team_photo','Team Photo')}}
        			{{ Form::file('photo_name',array('title' => 'photo_name','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4,'class'=>'form-control'))}}
        		</div>
        	<div class="col-xs-6">
                    {{ Form::label('Team_photos','Team Photo')}}
                    {{ Form::file('photo_name1',array('title' => 'photo_name1','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4,'class'=>'form-control'))}}
               </div>
            <div class="col-xs-6">
                    {{ Form::label('jersey_image','Jersey Image')}}
                    {{ Form::file('jersey_image',array('title' => 'jersey_image','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4,'class'=>'form-control'))}}
               </div>
            <div class="col-xs-6">
                    {{ Form::label('previous_jerseys','Previous Jerseys')}}
                    {{ Form::file('previous_jerseysimg',array('title' => 'previous_jerseysimg','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4,'class'=>'form-control'))}}
                    
               </div>
        	<div class="col-xs-6">
        			{{ Form::label('previous_jerseys','Previous Jerseys')}}
        			{{ Form::text('previous_jerseys','',array('class'=>'form-control','placeholder'=>'red, blue, green'))}}
        		</div> 
            <div class="col-xs-6">
        			{{ Form::label('head_coach','Head Coach')}}
        			{{ Form::text('head_coach','',array('class'=>'form-control'))}}
        		</div>
            <div class="col-xs-6">
                    {{ Form::label('current_jersey','Current Jersey')}}
                    {{ Form::text('current_jersey','',array('class'=>'form-control'))}}
               </div>
        	<div class="col-xs-6">
        			{{ Form::label('assistant_coach','Assistant Coach')}}
        			{{ Form::text('assistant_coach','',array('class'=>'form-control'))}}
        		</div>
            <div class="col-xs-6">
        			{{ Form::label('time_keepers','Time Keepers')}}
                    {{ Form::text('time_keepers','',array('class'=>'form-control'))}}
        		</div>

        	<div class="col-xs-6">
        			{{ Form::label('disbanded','Team Disbanded')}}
                    {{Form::text('disbanded','',array('class'=>'form-control'))}}
        		</div>
             <div class="col-xs-6">
                    {{ Form::label('history','Team History')}}
                    {{ Form::textarea('history','',array('class'=>'form-control'))}}
                </div>     

            <div class="col-xs-6">
        			{{ Form::label('referees','Team Referees')}}
        			{{ Form::text('referees','',array('class'=>'form-control'))}}
        		</div>
        	<div class="col-xs-6">
        			{{ Form::label('medics','Team Medics')}}
        			{{ Form::text('medics','',array('class'=>'form-control'))}}
        		</div>
            <div class="col-xs-6">
        			{{ Form::label('founded','Team Founded')}}
        			{{ Form::text('founded','',array('class'=>'form-control datepicker'))}}
        		</div>
        	
            <div class="col-xs-6">
                    {{ Form::label('president_name','President Name')}}
                    {{ Form::text('president_name','',array('class'=>'form-control'))}}
               </div>
            <div class="col-xs-6">
                    {{ Form::label('Videos','Videos Link')}}
                    {{ Form::text('video_name','',array('class'=>'form-control'))}}
              </div>
              <div class="col-xs-6">
                    {{ Form::label('Videos','Videos Link')}}
                    {{ Form::text('video_name1','',array('class'=>'form-control'))}}
              </div>
            
            <div class="col-xs-6">
            {{ Form::label('','')}}
            {{ Form::hidden('abc','',array('class'=>'form-control'))}}
            </div>
            <div class="col-xs-6">
                       
                {{ Form::submit('Add',array('class'=>'btn btn-primary pull-right'))}}
                {{ HTML::link('admin/teams','Back',array('class'=>'btn btn-success pull-right backbtn'))}}      
                {{ Form::close() }}
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