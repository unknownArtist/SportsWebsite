@extends('layouts.admin')
@section('content')
    <div class="well">
        {{ HTML::link('admin/team/create','Add Team',array('class' => 'btn btn-success')) }}
    </div>

	 <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered" id="companies">
    <thead>

        <tr>
        	<th>Team Logo</th>
            <th>Team Name</th>
            <th>Current Jersey</th>
            <th>Previous Jerseys</th>
            <th>President Name</th>
            <th>Head Coach</th>
            <th>Assistant Coach</th>
            <th>Time Keepers</th>
            <th>Referees</th>
            <th>Medics</th>
            <th>History</th>
            <th>Founded</th>
            <th>Disbanded</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($teams as $team)
        <tr class="odd gradeX">
            <td>{{Form::image('uploads/teamImages/'.$team->team_logo )}}</td>
            <td>{{ $team->team_name }}</td>
            <td>{{ $team->current_jersey }}</td>
            <td>{{ $team->previous_jerseys }}</td>
            <td>{{ $team->president_name }}</td>
            <td>{{ $team->head_coach }}</td>
            <td>{{ $team->assistant_coach }}</td>
            <td>{{ $team->time_keepers }}</td>
            <td>{{ $team->referees }}</td>
            <td>{{ $team->medics }}</td>
            <td>{{ $team->history }}</td>
            <td>{{ $team->founded }}</td>
            <td>{{ $team->disbanded }}</td>
            <td>
                <div class="btn-group">
                    <a href="{{URL::to('admin/team/'.$team->id.'/edit')}}" class="btn btn-mini" alt="Edit">
                        <i class="icon-edit"></i> Edit
                    </a>

                    <a href="{{URL::to('admin/team/'.$team->id.'/delete')}}" class="btn btn-mini" alt="Delete" onclick="return confirm('Are you sure?')">
                        <i class="icon-remove"></i> Delete
                    </a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>
@stop