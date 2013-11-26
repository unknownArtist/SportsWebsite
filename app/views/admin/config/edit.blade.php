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
    	{{ Form::open(array('url'=>'admin/config/update','POST','files'=>true))}}
        
        <tr class="odd gradeX">
        	<tr>
        		<td>
        			{{ Form::label('tittle','Tittle')}}
        			{{ Form::text('tittle',$schedules['tittle'],array('class'=>'form-control','id'=>'myId'))}}

        		</td>
        		<td>
        			{{ Form::label('name','Link')}}
        			{{ Form::textarea('schedule_link',$schedules['schedule_sheet_link'],array('class'=>'form-control','id'=>'myId'))}}
        		</td>


        	</tr>
        		
        	</tr>  
            <td>
                {{ Form::submit('Update',array('class'=>'btn btn-primary','style'=>'margin-top:25px;'))}}
                {{ Form::hidden('id',Request::segment(3))}}
                {{ HTML::link('admin/config','Back',array('class'=>'btn btn-success','style'=>'margin-top:25px;'))}}
            </td>

        </tr>

        {{ Form::close() }}
    </tbody>
    </table>
@stop