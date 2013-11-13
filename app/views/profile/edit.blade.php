@extends('layouts.admin')
@section('content')

<div class="well">
    @if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif
    </div>

   <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered" id="companies">
    <thead>
    <tbody>
         
         {{ Form::open(array('url'=>'profile/',$profiles['id'],'/edit','POST','files' => true))}}
        
              {{ Form::token() }}
   <tr class="odd gradeX">
          <tr>
            <td>

            {{ Form::label('name', 'Name:', array('class'=>'form-control formz','placeholder' => 'name')) }}
            {{ Form::text('name',$profiles['name']) }}
            </td>
            <td>
            {{ Form::label('player_nickname', 'NickName:', array('class'=>'form-control formz','placeholder' => 'player_nickname')) }}
            {{ Form::text('player_nickname',$profiles['player_nickname']) }}
            </td>
          </tr>
        <tr>
          <td>
            {{ Form::label('age', 'Age:', array('class'=>'form-control formz','placeholder' => 'age')) }}
            {{ Form::text('age',$profiles['age']) }}
          </td>
          <td>
            {{ Form::label('weight', 'Weight:', array('class'=>'form-control formz','placeholder' => 'weight')) }}
            {{ Form::text('weight',$profiles['weight']) }}
          </td>
        </tr>
        <tr>
          <td>
            {{ Form::label('height', 'Height', array('class'=>'form-control formz','placeholder' => 'height')) }}
            {{ Form::text('height',$profiles['height']) }}
          </td>
          <td>
            {{ Form::label('position', 'Position', array('class'=>'form-control formz','placeholder' => 'position')) }}
            {{ Form::text('position',$profiles['position']) }}
          </td>
        </tr>
        <tr>
          <td>
            {{ Form::label('shoots', 'Shoots', array('class'=>'form-control formz','placeholder' => 'shoots')) }}
            {{ Form::text('shoots',$profiles['shoots']) }}
          </td>
          <td>
            {{ Form::label('statistic', 'Statistics', array('class'=>'form-control formz','placeholder' => 'statistic')) }}
            {{ Form::text('statistic',$profiles['statistic']) }}
          </td>
        </tr>
        <tr>
          <td>
            {{ Form::label('current_teams', 'Current teams:', array('class'=>'form-control formz','placeholder' => 'current_teams')) }}
            {{ Form::text('current_teams',$profiles['current_teams']) }}
          </td>
          <td>
            {{ Form::label('previous_teams', 'Previous Teams', array('class'=>'form-control formz','placeholder' => 'previous_teams')) }}
            {{ Form::text('previous_teams',$profiles['previous_teams']) }}
          </td>
        </tr>
        <tr>
          <td>
            {{ Form::label('achievements', 'Achievements', array('class'=>'form-control formz','placeholder' => 'achievements')) }}
            {{ Form::text('achievements',$profiles['achievements']) }}
          </td>
          <td>
            {{ Form::file('player_profile_photos', array('title' => 'player_profile_photos','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4)) }}
          </td>
        </tr>  
          <td>
                  {{ Form::submit('Submit', array('class'=>'btn btn-primary span12 formz')) }}
        </tr>
  {{ Form::close() }}
   </tbody>
    </table>
@stop