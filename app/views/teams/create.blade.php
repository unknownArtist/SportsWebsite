@extends('layouts.scaffold')

@section('main')

<h1>Create Team</h1>

{{ Form::open(array('route' => 'teams.store')) }}
	<ul>
        <li>
            {{ Form::label('team_name', 'Team_name:') }}
            {{ Form::text('team_name') }}
        </li>

        <li>
            {{ Form::label('team_logo', 'Team_logo:') }}
            {{ Form::text('team_logo') }}
        </li>

        <li>
            {{ Form::label('current_jersey', 'Current_jersey:') }}
            {{ Form::text('current_jersey') }}
        </li>

        <li>
            {{ Form::label('jersey_image', 'Jersey_image:') }}
            {{ Form::text('jersey_image') }}
        </li>

        <li>
            {{ Form::label('previouse_jersey', 'Previouse_jersey:') }}
            {{ Form::text('previous_jerseys') }}
        </li>

        <li>
            {{ Form::label('president_name', 'President_name:') }}
            {{ Form::text('president_name') }}
        </li>

        <li>
            {{ Form::label('head_coach', 'Head_coach:') }}
            {{ Form::text('head_coach') }}
        </li>

        <li>
            {{ Form::label('assistant_coach', 'Assistant_coach:') }}
            {{ Form::text('assistant_coach') }}
        </li>

        <li>
            {{ Form::label('history', 'History:') }}
            {{ Form::textarea('history') }}
        </li>

        <li>
            {{ Form::label('time_keepers', 'Time_keepers:') }}
            {{ Form::text('time_keepers') }}
        </li>

        <li>
            {{ Form::label('referees', 'Referees:') }}
            {{ Form::text('referees') }}
        </li>

        <li>
            {{ Form::label('medics', 'Medics:') }}
            {{ Form::text('medics') }}
        </li>

        <li>
            {{ Form::label('founded', 'Founded:') }}
            {{ Form::text('founded') }}
        </li>

        <li>
            {{ Form::label('disbanded', 'Disbanded:') }}
            {{ Form::text('disbanded') }}
        </li>

		<li>
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


