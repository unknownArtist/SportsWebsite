@extends('layouts.main')
@section('content')
<div class="container">
    <div style="color:red">
        {{ Session::get('errors') }}
    </div>
    @if(!$profiles)
        {{ HTML::link('profile/create','Add Profile',array('class' => 'btn btn-success')) }}
    @endif

    
    @foreach($profiles as $profile)

    
	 <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered" id="companies">
    <thead>

        <tr>
        	<th>Name</th>
            <th>Player Nickname</th>
            <th>Age</th>
            <th>Weight</th>
            <th>Height</th>
            <th>Position</th>
            <th>Shoots</th>
            <th>Statistic</th>
            <th>Achievements</th>
            
            
        </tr>
    </thead>
    <tbody>
        
        <tr class="odd gradeX">
            <td>{{ $profile->name }}</td>
            <td>{{ $profile->player_nickname }}</td>
            <td>{{ $profile->age }}</td>
            <td>{{ $profile->weight }}</td>
            <td>{{ $profile->height }}</td>
            <td>{{ $profile->position }}</td>
            <td>{{ $profile->shoots }}</td>
            <td>{{ $profile->statistic }}</td>
            <td>{{ $profile->achievements }}</td>
            
            <td>
                <div class="btn-group">
                    <a href="{{URL::to('profile/'.$profile->id.'/edit')}}" class="btn btn-mini" alt="Edit">
                        <i class="icon-edit"></i> Edit
                    </a>

                    <a href="{{URL::to('profile/'.$profile->id.'/delete')}}" class="btn btn-mini" alt="Delete" onclick="return confirm('Are you sure?')">
                        <i class="icon-remove"></i> Delete
                    </a>
                </div>
            </td>
        </tr>

    @endforeach
 
 
    </tbody>
    </table>
    
    </div>	

@stop	
