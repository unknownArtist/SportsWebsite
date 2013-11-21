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
    	{{ Form::open(array('url'=>'admin/team/create','POST','files'=>true))}}
        <tr class="odd gradeX">
        	<tr>
        		<td>
        			{{ Form::label('name','Team Name')}}
        			{{ Form::text('team_name','',array('class'=>'form-control','id'=>'myId'))}}

        		</td>
        		<td>
        			{{ Form::label('name','Team Logoo')}}
        			{{ Form::file('team_logo','',array('class'=>'form-control'))}}
                    {{ Form::image('uploads/teamImages/image12641664611384007776.jpg','',array('class'=>'img-thumbnail'))}}
        		</td>

        	</tr>
        	<tr>
        		<td>
        			{{ Form::label('team_photo','Team Photo')}}
        			{{ Form::file('photo_name','',array('class'=>'form-control'))}}
        		</td>
        		
                <td>
                    {{ Form::label('Team_photos','Team Photo')}}
                    {{ Form::file('photo_name1','',array('class'=>'form-control'))}}
                </td>
        	</tr>
            <tr>
                <td>
                    {{ Form::label('jersey_image','Jersey Image')}}
                    {{ Form::file('jersey_image','',array('class'=>'form-control'))}}
                </td>
                <td>
                    {{ Form::label('previous_jerseys','Previous Jerseys')}}
                    {{ Form::file('previous_jerseysimg','',array('class'=>'form-control'))}}
                    
                </td>
            </tr>
        	<tr>
        		<td>
        			{{ Form::label('previous_jerseys','Previous Jerseys')}}
        			{{ Form::text('previous_jerseys','',array('class'=>'form-control'))}}
        		</td>
        		<td>
        			{{ Form::label('head_coach','Head Coach')}}
        			{{ Form::text('head_coach','',array('class'=>'form-control'))}}
        		</td>
        	</tr>
            <tr>
                <td>
                    {{ Form::label('current_jersey','Current Jersey')}}
                    {{ Form::text('current_jersey','',array('class'=>'form-control'))}}
                </td>
            </tr>
        	<tr>
        		<td>
        			{{ Form::label('assistant_coach','Assistant Coach')}}
        			{{ Form::text('assistant_coach','',array('class'=>'form-control'))}}
        		</td>
        		<td>
        			{{ Form::label('time_keepers','Time Keepers')}}
        			{{ Form::text('time_keepers','',array('class'=>'form-control'))}}
        		</td>
        	</tr>
        	<tr>
        		<td>
        			{{ Form::label('disbanded','Team Disbanded')}}
        			{{ Form::text('disbanded','',array('class'=>'form-control'))}}
        		</td>
        		<td>
        			{{ Form::label('referees','Team Referees')}}
        			{{ Form::text('referees','',array('class'=>'form-control'))}}
        		</td>
        	</tr>
        	<tr>
        		<td>
        			{{ Form::label('medics','Team Medics')}}
        			{{ Form::text('medics','',array('class'=>'form-control'))}}
        		</td>
        		<td>
        			{{ Form::label('founded','Team Founded')}}
        			{{ Form::text('founded','',array('class'=>'form-control'))}}
        		</td>
        	</tr>
        	<tr>
        		<td>
        			{{ Form::label('history','Team History')}}
        			{{ Form::textarea('history','',array('class'=>'form-control'))}}
        		</td>
                <td>
                    {{ Form::label('president_name','President Name')}}
                    {{ Form::text('president_name','',array('class'=>'form-control'))}}
                </td>
        		
        	</tr> 
            <tr>
            <td>
                    {{ Form::label('Videos','Videos Link')}}
                    {{ Form::text('video_name','',array('class'=>'form-control'))}}
                </td> 
                <td>
                    {{ Form::label('Videos','Videos Link')}}
                    {{ Form::text('video_name1','',array('class'=>'form-control'))}}
                </td> 
            </tr>
            <tr>
            <td>
                {{ Form::submit('Add',array('class'=>'btn btn-primary','style'=>'margin-top:25px;'))}}
                {{ HTML::link('admin/teams','Back',array('class'=>'btn btn-success','style'=>'margin-top:25px;'))}}
            </td>

        </tr>

        {{ Form::close() }}
    </tbody>
    </table>
@stop