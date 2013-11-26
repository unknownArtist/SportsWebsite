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
         {{ Form::open(array('profile.create','Post', 'files' => true))  }}
              {{ Form::token() }}

        <tr class="odd gradeX">
          <tr>
              <td>
                  {{ Form::label('name', 'Name') }}
                  {{ Form::text('name','',array('class'=>'form-control')) }}
              </td>
          </tr>
          <tr>  
              <td>
                  {{ Form::label('player_nickname', 'NickName') }}
                  {{ Form::text('player_nickname','',array('class'=>'form-control')) }}
              </td>
          </tr>
          
          <tr>
              <td>
                  {{ Form::label('age', 'Age') }}
                  {{ Form::text('age','',array('class'=>'form-control')) }}
              </td>
          </tr>
          <tr> 
              <td>
                  {{ Form::label('weight', 'Weight') }}
                  {{ Form::text('weight','',array('class'=>'form-control')) }}
              </td>
          </tr>
          
          <tr>
              <td>
                  {{ Form::label('height', 'Height') }}
                  {{ Form::text('height','',array('class'=>'form-control')) }}
              </td>
          </tr>
          <tr> 
              <td>
                  {{ Form::label('position', 'Position') }}
                  {{ Form::text('position','',array('class'=>'form-control')) }}
              </td>
         </tr>
          
         <tr>
              <td>
                  {{ Form::label('shoots', 'Shoots') }}
                  {{ Form::text('shoots','',array('class'=>'form-control')) }}
              </td>
          </tr>
          <tr>
              <td>
                  {{ Form::label('statistic', 'Statistics') }}
                  {{ Form::text('statistic','',array('class'=>'form-control')) }}
              </td>
        </tr>
        
        <tr>
              <td>
                  {{ Form::label('current_teams', 'Current teams') }}
                  {{ Form::text('current_teams','',array('class'=>'form-control')) }}
              </td>
        </tr>
        <tr>
              <td>
                  {{ Form::label('previous_teams', 'Previous Teams') }}
                  {{ Form::text('previous_teams','',array('class'=>'form-control')) }}
              </td>
        </tr>
        
        <tr>
            <td>
                {{ Form::label('achievements', 'Achievements') }}
                {{ Form::text('achievements','',array('class'=>'form-control')) }}
            </td>
        </tr>
        <tr>  
            <td>
            {{ Form::file('player_profile_photos', array('title' => 'player_profile_photos','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4)) }}
            </td>
        </tr>  
            <td>
                  {{ HTML::link('profile','Back',array('class'=>'btn btn-success'))}}
                  {{ Form::submit('Submit', array('class'=>' btn btn-primary span12 formz')) }}
           </td>

         </tr>
                  {{ Form::close() }}
   </tbody>
    </table>

@stop