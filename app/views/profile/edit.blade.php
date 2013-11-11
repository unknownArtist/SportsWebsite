@extends('layouts.main')
@section('content')
  
  <h1>Index</h1>
  <style>
    #adminText {
      margin-left: 500px;
    }
    #loginForm {
      margin-left: 500px;
    }
    .formz {
      margin-top: 4px;
    }
    .well {
      
    }
    .form-control {
      width: 250px;
    }
  </style>
<h2 id="adminText">My Profile</h2>
   <div class="well" >
        <div id="loginForm">
         
         {{ Form::open(array('url'=>'profile/',$profiles['id'],'/edit','POST','files' => true))}}
        
              {{ Form::token() }}


            {{ Form::label('name', 'Name:', array('class'=>'form-control formz','placeholder' => 'name')) }}
            {{ Form::text('name',$profiles['name']) }}

            {{ Form::label('player_nickname', 'NickName:', array('class'=>'form-control formz','placeholder' => 'player_nickname')) }}
            {{ Form::text('player_nickname',$profiles['player_nickname']) }}

            {{ Form::label('age', 'Age:', array('class'=>'form-control formz','placeholder' => 'age')) }}
            {{ Form::text('age',$profiles['age']) }}

            {{ Form::label('weight', 'Weight:', array('class'=>'form-control formz','placeholder' => 'weight')) }}
            {{ Form::text('weight',$profiles['weight']) }}

            {{ Form::label('height', 'Height', array('class'=>'form-control formz','placeholder' => 'height')) }}
            {{ Form::text('height',$profiles['height']) }}

            {{ Form::label('position', 'Position', array('class'=>'form-control formz','placeholder' => 'position')) }}
            {{ Form::text('position',$profiles['position']) }}

            {{ Form::label('shoots', 'Shoots', array('class'=>'form-control formz','placeholder' => 'shoots')) }}
            {{ Form::text('shoots',$profiles['shoots']) }}

            {{ Form::label('statistic', 'Statistics', array('class'=>'form-control formz','placeholder' => 'statistic')) }}
            {{ Form::text('statistic',$profiles['statistic']) }}

            {{ Form::label('current_teams', 'Current teams:', array('class'=>'form-control formz','placeholder' => 'current_teams')) }}
            {{ Form::text('current_teams',$profiles['current_teams']) }}

            {{ Form::label('previous_teams', 'Previous Teams', array('class'=>'form-control formz','placeholder' => 'previous_teams')) }}
            {{ Form::text('previous_teams',$profiles['previous_teams']) }}

            {{ Form::label('achievements', 'Achievements', array('class'=>'form-control formz','placeholder' => 'achievements')) }}
            {{ Form::text('achievements',$profiles['achievements']) }}

            {{ Form::file('player_profile_photos', array('title' => 'player_profile_photos','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4)) }}

                  {{ Form::submit('Submit', array('class'=>'btn btn-primary span12 formz')) }}
        </div>
  </div>

  {{ Form::close() }}

@stop
