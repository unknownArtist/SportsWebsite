@extends('layouts.main')
@section('content')

<div class="container">

    @if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif
    
	
   <div class="col-xs-7" style="float:none; margin:0 auto;">
    <div class="labellineheight">
        
         {{ Form::open(array('profile.create','Post', 'files' => true))  }}
              {{ Form::token() }} 
          <div class="col-xs-6">
              {{ Form::label('team', 'Teams') }}
              {{Form::select('team',$teams)}}     
         </div>
         <div class="col-xs-6">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name','',array('class'=>'form-control')) }}
            </div>
             <div class="col-xs-6">
            {{ Form::label('player_nickname', 'NickName') }}
            {{ Form::text('player_nickname','',array('class'=>'form-control')) }}
           </div>
            <div class="col-xs-6">
            {{ Form::label('age', 'Age') }}
            {{ Form::text('age','',array('class'=>'form-control')) }}
            </div>
           <div class="col-xs-6">
            {{ Form::label('weight', 'Weight') }}
            {{ Form::text('weight','',array('class'=>'form-control')) }}
          </div>
           <div class="col-xs-6">
            {{ Form::label('height', 'Height') }}
            {{ Form::text('height','',array('class'=>'form-control')) }}
          </div>
           <div class="col-xs-6">
            {{ Form::label('position', 'Position') }}
            {{ Form::text('position','',array('class'=>'form-control')) }}
          </div>
           <div class="col-xs-6">
            {{ Form::label('shoots', 'Shoots') }}
            {{ Form::text('shoots','',array('class'=>'form-control')) }}
          </div>
           <div class="col-xs-6">
            {{ Form::label('statistic', 'Statistics') }}
            {{ Form::text('statistic','',array('class'=>'form-control')) }}
         </div>
          <div class="col-xs-6">
            {{ Form::label('current_teams', 'Current teams') }}
            {{ Form::text('current_teams','',array('class'=>'form-control')) }}
          </div>
           <div class="col-xs-6">
            {{ Form::label('previous_teams', 'Previous Teams') }}
            {{ Form::text('previous_teams','',array('class'=>'form-control')) }}
        </div>
         <div class="col-xs-6">
            {{ Form::label('achievements', 'Achievements') }}
            {{ Form::text('achievements','',array('class'=>'form-control')) }}
          </div>
           <div class="col-xs-6">
          	{{ Form::label('userprofileimage', 'Choose Your Picture') }}
            {{ Form::file('player_profile_photos', array('title' => 'player_profile_photos','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4, 'class'=>'form-control')) }}
         </div>
          <div class="col-xs-12">
                  {{ Form::submit('Submit', array('class'=>'btn btn-primary pull-right')) }}
                  {{ HTML::link('profile','Back',array('class'=>'btn btn-success '))}}
         
                  {{ Form::close() }}
  		</div>
    </div>
    
    </div>
    </div>

@stop