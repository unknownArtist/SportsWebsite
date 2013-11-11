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
    	{{ Form::open(array('url'=>'admin/team/create','POST'))}}
        
        <tr class="odd gradeX">
        	<tr>
        		<td>
        			{{ Form::label('name','Team Name')}}
        			{{ Form::text('team_name',$teams['team_name'],array('class'=>'form-control','id'=>'myId'))}}

        		</td>
        		<td>
        			{{ Form::label('name','Team Logo')}}
        			{{ Form::file('team_logo','',array('class'=>'form-control'))}}
        		</td>

        	</tr>
        	<tr>
        		<td>
        			{{ Form::label('current_jersey','Team Jersey')}}
        			{{ Form::text('current_jersey',$teams['current_jersey'],array('class'=>'form-control'))}}
        		</td>
        		<td>
        			{{ Form::label('jersey_image','Jersey Image')}}
        			{{ Form::file('jersey_image','',array('class'=>'form-control'))}}
        		</td>
        	</tr>
        	<tr>
        		<td>
        			{{ Form::label('previous_jerseys','Previous Jerseys')}}
        			{{ Form::text('previous_jerseys',$teams['team_name'],array('class'=>'form-control'))}}
        		</td>
        		<td>
        			{{ Form::label('head_coach','Head Coach')}}
        			{{ Form::text('head_coach',$teams['head_coach'],array('class'=>'form-control'))}}
        		</td>
        	</tr>
        	<tr>
        		<td>
        			{{ Form::label('assistant_coach','Assistant Coach')}}
        			{{ Form::text('assistant_coach',$teams['assistant_coach'],array('class'=>'form-control'))}}
        		</td>
        		<td>
        			{{ Form::label('time_keepers','Time Keepers')}}
        			{{ Form::text('time_keepers',$teams['team_name'],array('class'=>'form-control'))}}
        		</td>
        	</tr>
        	<tr>
        		<td>
        			{{ Form::label('disbanded','Team Disbanded')}}
        			{{ Form::text('disbanded',$teams['disbanded'],array('class'=>'form-control'))}}
        		</td>
        		<td>
        			{{ Form::label('referees','Team Referees')}}
        			{{ Form::text('referees',$teams['team_name'],array('class'=>'form-control'))}}
        		</td>
        	</tr>
        	<tr>
        		<td>
        			{{ Form::label('medics','Team Medics')}}
        			{{ Form::text('medics',$teams['team_name'],array('class'=>'form-control'))}}
        		</td>
        		<td>
        			{{ Form::label('founded','Team Founded')}}
        			{{ Form::text('founded',$teams['founded'],array('class'=>'form-control'))}}
        		</td>
        	</tr>
        	<tr>
        		<td>
        			{{ Form::label('history','Team History')}}
        			{{ Form::text('history',$teams['history'],array('class'=>'form-control'))}}
        		</td>
                <td>
                    {{ Form::label('president_name','President Name')}}
                    {{ Form::text('president_name',$teams['president_name'],array('class'=>'form-control'))}}
                </td>
        		
        	</tr>  
            <td>
                {{ Form::submit('Add',array('class'=>'btn btn-primary','style'=>'margin-top:25px;'))}}
                {{ HTML::link('admin/teams','Back',array('class'=>'btn btn-success','style'=>'margin-top:25px;'))}}
            </td>

        </tr>

        {{ Form::close() }}
    </tbody>
    </table>
@stop