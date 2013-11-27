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
       
         {{ Form::open(array('url'=>'profile/'.$profiles['id'].'/edit','POST','files' => true))}}
        
   <tr class="odd gradeX">
          <tr>
           
            <td>
              {{ Form::label('team', 'Teams') }}
              {{Form::select('team' , $teams)}}
             
            </td>
          </tr>
          <tr>
            <td>

            {{ Form::label('name', 'Name') }}
            {{ Form::text('name',$profiles['name'],array('class'=>'form-control')) }}
            </td>
            <td>
            {{ Form::label('player_nickname', 'NickName:') }}
            {{ Form::text('player_nickname',$profiles['player_nickname'],array('class'=>'form-control')) }}
            </td>
          </tr>
        <tr>
          <td>
            {{ Form::label('age', 'Age:') }}
            {{ Form::text('age',$profiles['age'],array('class'=>'form-control')) }}
          </td>
          <td>
            {{ Form::label('weight', 'Weight:')}}
            {{ Form::text('weight',$profiles['weight'],array('class'=>'form-control')) }}
          </td>
        </tr>
        <tr>
          <td>
            {{ Form::label('height', 'Height' )}}
            {{ Form::text('height',$profiles['height'],array('class'=>'form-control')) }}
          </td>
          <td>
            {{ Form::label('position', 'Position')}}
            {{ Form::text('position',$profiles['position'],array('class'=>'form-control')) }}
          </td>
        </tr>
        <tr>
          <td>
            {{ Form::label('shoots', 'Shoots')}}
            {{ Form::text('shoots',$profiles['shoots'],array('class'=>'form-control')) }}
          </td>
          <td>
            {{ Form::label('statistic', 'Statistics')}}
            {{ Form::text('statistic',$profiles['statistic'],array('class'=>'form-control')) }}
          </td>
        </tr>
        <tr>
          <td>
            {{ Form::label('current_teams', 'Current teams:')}}
            {{ Form::text('current_teams',$profiles['current_teams'],array('class'=>'form-control')) }}
          </td>
          <td>
            {{ Form::label('previous_teams', 'Previous Teams')}}
            {{ Form::text('previous_teams',$profiles['previous_teams'],array('class'=>'form-control')) }}
          </td>
        </tr>
        <tr>
          <td>
            {{ Form::label('achievements', 'Achievements') }}
            {{ Form::text('achievements',$profiles['achievements'],array('class'=>'form-control')) }}
          </td>
          <td>
            {{ Form::file('player_profile_photos', array('title' => 'player_profile_photos','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4)) }}
          </td>
        </tr>  
          <td>
                  {{ Form::submit('Update', array('class'=>'btn btn-primary span12 formz')) }}
                  {{ HTML::link('profile',"Back",array('class'=>'btn btn-success'))}}
        </tr>
  {{ Form::close() }}
   </tbody>
    </table>
@stop