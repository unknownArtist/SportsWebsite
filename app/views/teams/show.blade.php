@extends('layouts.scaffold')

@section('main')

<h1>Show Team</h1>

<p>{{ link_to_route('teams.index', 'Return to all teams') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Team_name</th>
				<th>Team_logo</th>
				<th>Current_jersey</th>
				<th>Jersey_image</th>
				<th>Previouse_jersey</th>
				<th>President_name</th>
				<th>Head_coach</th>
				<th>Assistant_coach</th>
				<th>History</th>
				<th>Time_keepers</th>
				<th>Referees</th>
				<th>Medics</th>
				<th>Founded</th>
				<th>Disbanded</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $team->team_name }}}</td>
					<td>{{{ $team->team_logo }}}</td>
					<td>{{{ $team->current_jersey }}}</td>
					<td>{{{ $team->jersey_image }}}</td>
					<td>{{{ $team->previouse_jersey }}}</td>
					<td>{{{ $team->president_name }}}</td>
					<td>{{{ $team->head_coach }}}</td>
					<td>{{{ $team->assistant_coach }}}</td>
					<td>{{{ $team->history }}}</td>
					<td>{{{ $team->time_keepers }}}</td>
					<td>{{{ $team->referees }}}</td>
					<td>{{{ $team->medics }}}</td>
					<td>{{{ $team->founded }}}</td>
					<td>{{{ $team->disbanded }}}</td>
                    <td>{{ link_to_route('teams.edit', 'Edit', array($team->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('teams.destroy', $team->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
