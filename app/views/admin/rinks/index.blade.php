@extends('layouts.admin')
@section('content')
	<div id="main-content" class="container-fluid">

<div id="page-content" class="page-content">
<div class="row-fluid margin-top20">
<div class="col-xs-12 grider">
<div class="widget widget-simple">
    <div class="col-xs-12 widget-header">

    <div class="">
        {{ HTML::link('admin/rinks/create','Add Rink',array('class' => 'btn btn-success margin-bottom10')) }}
    </div>
    </div>
    
     <div class="widget-header margin-bottom15">

	 <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered margin-top15 margin-bottom15" id="companies">
    <thead>

        <tr>
            <th>Adresses</th>
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
            <th>Actions</th>
            
        </tr>
    </thead>
    <tbody>
    @foreach($rinks as $rink)
        <tr class="odd gradeX">
            <td>{{ $rink->getAddress($rink->id) }}</td>
            <td>{{ $rink->rink_seating_capacity }}</td>
            <td>{{ $rink->rink_change_rooms }}</td>
             <td>{{ $rink->rink_boardType }}</td>
             <td>{{ $rink->rink_other }}</td>
            <td>{{ $rink->getHome($rink->id) }}</td>
            <td>{{ $rink->rink_highlights }}</td>
            <td>{{ $rink->rink_history }}</td>
            <td>{{ $rink->rink_opened_date }}</td>
            <td>{{ $rink->rink_closed_date }}</td>
            <td>{{ $rink->rink_description }}</td>
            <td>{{Form::image('uploads/rinks_images/'.$rink->getImage($rink->id));}}</td>
            
            
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
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
@stop		