@extends('layouts.admin')
@section('content')
	

    <div class="well">
        {{ HTML::link('admin/rinks/create','Add Rink',array('class' => 'btn btn-success')) }}
    </div>

	 <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered" id="companies">
    <thead>

        <tr>
        	<th>Seating Capacity</th>
            <th>No. of Change Rooms</th>
            <th>Board Type</th>
            <th>Other</th>
            <th>Home Teams</th>
            <th>Highlights</th>
            <th>History</th>
            <th>Opened date</th>
            <th>Closed date</th>
            <th>Description</th>
            <th>Layout Image</th>
            
        </tr>
    </thead>
    <tbody>
    @foreach($rinks as $rink)
        <tr class="odd gradeX">
            <td>{{ $rink->rink_seating_capacity }}</td>
            <td>{{ $rink->rink_change_rooms }}</td>
            <td>{{ $rink->rink_boardType }}</td>
            <td>{{ $rink->rink_other }}</td>
            <td>{{ $rink->rink_homeTeams }}</td>
            <td>{{ $rink->rink_highlights }}</td>
            <td>{{ $rink->rink_history }}</td>
            <td>{{ $rink->rink_opened_date }}</td>
            <td>{{ $rink->rink_closed_date }}</td>
            <td>{{ $rink->rink_description }}</td>
            <td>{{ $rink->rink_layout_image }}</td>
            
            <td>
                <div class="btn-group">
                    <a href="{{URL::to('admin/rinks/'.$rink->id.'/edit')}}" class="btn btn-mini" alt="Edit">
                        <i class="icon-edit"></i> Edit
                    </a>

                    <a href="{{URL::to('admin/rinks/'.$rink->id.'/delete')}}" class="btn btn-mini" alt="Delete" onclick="return confirm('Are you sure?')">
                        <i class="icon-remove"></i> Delete
                    </a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>
@stop		