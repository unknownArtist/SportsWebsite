@extends('layouts.admin')
@section('content')
	{{ Form::open(array('admin.config.index','Post', 'files' => true))  }}
    {{ Form::token() }}
     {{ Form::label('tittle', 'Tittle:', array('class'=>'form-control formz')) }}
    {{ Form::text('tittle','') }}
    {{ Form::label('schedule_link', 'Schedule Link:', array('class'=>'form-control formz')) }}
    {{ Form::textarea('schedule_link','') }}
    {{ Form::submit('Submit', array('class'=>'btn btn-primary span12 formz')) }}

   

	 <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered" id="companies">
    <thead>

        <tr>
        	<th>Tittle</th>
            <th>Linkd</th>
            <th>Activation</th>
            <th>Actions</th>
             <th>Publish</th>
        </tr>
    </thead>
    <tbody>
   
        <tr class="odd gradeX">
        @foreach($schedules as $schedule)
            
            <td>{{ $schedule->tittle }}</td>
			 <td>{{ $schedule->schedule_sheet_link }}</td>
			  <td>{{ $schedule->active }}</td>
             <td>
                <div class="btn-group">
                    <a href="{{URL::to('admin/config/'.$schedule->id.'/edit')}}" class="btn btn-mini" alt="Edit">
                        <i class="icon-edit"></i> Edit
                    </a>

                    <a href="{{URL::to('admin/config/'.$schedule->id.'/delete')}}" class="btn btn-mini" alt="Delete" onclick="return confirm('Are you sure?')">
                        <i class="icon-remove"></i> Delete
                    </a>
                </div>
            </td>
            <td>
                <div class="btn-group">
                    <a href="{{URL::to('admin/config/'.$schedule->id.'/1')}}">
                      Publish
                    </a>

                    <a href="{{URL::to('admin/config/'.$schedule->id.'/0')}}">
                         Unpublish
                    </a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>
@stop