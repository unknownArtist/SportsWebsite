@extends('layouts.admin')
@section('content')


<div id="page-content" class="page-content">
<div class="row-fluid margin-top20">
<div class="col-xs-9 grider">
<div class="widget widget-simple">

<div class="row-fluid">
        <div class="span12 form-dark">
            <ul class="form-list label-left list-bordered">
              <li class="section-form">
            <h4>Add New Schedule</h4>
            </li>
	{{ Form::open(array('admin.config.index','Post', 'files' => true,'class'=>'form-horizontal'))  }}
    {{ Form::token() }}
     <li class="control-group">
     {{ Form::label('tittle', 'Title:', array('class'=>'control-label')) }}
     <div class="controls">
    {{ Form::text('tittle','', array('class' => 'span6')) }}
    </div>
    </li>
    
    <li class="control-group">

    {{ Form::label('schedule_link', 'Schedule Link:', array('class'=>'control-label')) }}
    <div class="controls">
    {{ Form::textarea('schedule_link','', array('class' => 'span6')) }}
    </div>
   </li> 
   
    <li class="span8 margin-bottom15">  
    {{ Form::submit('Submit', array('class'=>'btn btn-primary pull-right addbtnmargin')) }}
    </li>
	</ul>
   </div>
   </div>
   </div>
   </div>
   </div>
   </div>
   
   
   <div id="main-content" class="container-fluid">

<div id="page-content" class="page-content">
<div class="row-fluid">
<div class="col-xs-12 grider">
<div class="widget widget-simple">
    <div class="col-xs-12 widget-header">

	 <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered margin-top15 margin-bottom15" id="companies">
    <thead>

        <tr>
        	<th>Title</th>
            <th>Linked</th>
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
                    <a href="{{URL::to('admin/config/'.$schedule->id.'/edit')}}" class="btn btn-mini" alt="Edit" style="margin-top:0px; margin-left:15px;">
                        <i class="icon-edit"></i> Edit
                    </a>

                    <a href="{{URL::to('admin/config/'.$schedule->id.'/delete')}}" class="btn btn-mini" style="margin-top:0px; margin-left:15px;" alt="Delete" onclick="return confirm('Are you sure?')">
                        <i class="icon-remove"></i> Delete
                    </a>
                </div>
            </td>
            <td>
                <div class="btn-group">
                    <a href="{{URL::to('admin/config/'.$schedule->id.'/1')}}" class="btn btn-mini" style="margin-top:0px; margin-left:15px;">
                      Publish
                    </a>

                    <a href="{{URL::to('admin/config/'.$schedule->id.'/0')}}" class="btn btn-mini" style="margin-top:0px; margin-left:15px;">
                         Unpublish
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