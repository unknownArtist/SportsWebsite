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
    	{{ Form::open(array('url'=>'members/'.$users->user_id.'/update','POST','files'=>true))}}
        
        <tr class="odd gradeX">
        	<tr>
        		<td>
        			{{ Form::label('name','Name')}}
        			{{ Form::text('name',$users->name,array('class'=>'form-control','id'=>'myId'))}}

        		</td>

        		<td>
        			{{ Form::label('pname','Nick Name')}}
        			{{ Form::text('player_nickname',$users->player_nickname,array('class'=>'form-control'))}}
        		</td>


        	</tr>
        	<tr>
        		<td>
        			{{ Form::label('age','age')}}
        			{{ Form::text('age',$users->age,array('class'=>'form-control'))}}
        		</td>
        		<td>
        			{{ Form::label('weight','weight')}}
        			{{ Form::text('weight',$users->weight,array('class'=>'form-control'))}}
        		</td>
        	</tr>
        	<tr>
        		<td>
        			{{ Form::label('height','height')}}
        			{{ Form::text('height',$users->height,array('class'=>'form-control'))}}
        		</td>
        		<td>
        			{{ Form::label('position','position')}}
        			{{ Form::text('position',$users->position,array('class'=>'form-control'))}}
        		</td>
        	</tr>
        	<tr>
        		<td>
        			{{ Form::label('shoots','shoots')}}
        			{{ Form::text('shoots',$users->shoots,array('class'=>'form-control'))}}
        		</td>
        		<td>
        			{{ Form::label('statistic','statistic')}}
        			{{ Form::text('statistic',$users->statistic,array('class'=>'form-control'))}}
        		</td>
        	</tr>
        	<tr>
        		<td>
        			{{ Form::label('achievements','achievements')}}
        			{{ Form::text('achievements',$users->achievements,array('class'=>'form-control'))}}
        		</td>
            <td>
                {{ Form::submit('Update',array('class'=>'btn btn-primary','style'=>'margin-top:25px;'))}}
                {{ Form::hidden('id',Request::segment(3))}}
                {{ HTML::link('members','Back',array('class'=>'btn btn-success','style'=>'margin-top:25px;'))}}
            </td>

        </tr>

        {{ Form::close() }}
    </tbody>
    </table>

@stop