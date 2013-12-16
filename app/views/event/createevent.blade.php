@extends('layouts.admin')
@section('content')

<div id="main-content" class="container-fluid">

<div id="page-content" class="page-content">
<div class="row-fluid margin-top20">
<div class="col-xs-9 grider">
<div class="widget widget-simple">
<div>
    @if ($errors->any())
    <ul style="color:red;">
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
     </div>
@endif
   

    <div class="row-fluid">
        <div class="span12 form-dark">
            <ul class="form-list label-left list-bordered">
            
            <li class="section-form">
            <h4>Add New Event</h4>
            </li>

        {{ Form::open(array('url'=>'events/createevent','POST','files'=>true,'class'=>'form-horizontal'))}}
     
                    <li class="control-group">
                    {{ Form::label('ev_name','Event Name', '', array('class'=>'control-label'))}}
                    <div class="controls">
                    {{ Form::text('ev_name','',array('class'=>'span6','id'=>'ev_name'))}}
                    </div>
                    </li>

                    <li class="control-group">
                    {{ Form::label('ev_time','Event Date & Time', '', array('class'=>'control-label'))}}
                    <div class="controls">
                    {{ Form::text('ev_time','',array('class'=>'span6 datepicker input-medium margin-00', 'id'=>'datePicker'))}}
                     <p class="help-inline">Format: 99-99-9999 99:99:99</p>
                    </div>
                    </li>
                    
                    <li class="control-group">
                    {{ Form::label('ev_place','Event Place', '', array('class'=>'control-label'))}}
                    <div class="controls">
                    {{ Form::text('ev_place','',array('class'=>'span6'))}}
                    </div>
                    </li>
           
                <li class="span8 margin-bottom15">
                
                {{ Form::submit('Add',array('class'=>'btn btn-primary pull-right addbtnmargin'))}}
                {{ HTML::link('events','Back',array('class'=>'btn btn-success backbtn pull-right'))}}
                
                </li>
         

        {{ Form::close() }}
            </ul>
              </div>
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

<div id='calendar'></div>
</div>
</div>
</div>
</div>
</div>
@foreach($events as $event)

@endforeach

<script>

	$(document).ready(function() {
	
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		$('#calendar').fullCalendar({
			editable: true,
			events: [

			<?php foreach($events as $event): ?>

				{
					
				title:'<?php echo " ".$event->ev_name." "."at"." ".$event->ev_place ?>',
					start: '<?php echo $event->ev_time  ?>',
					
					allDay: false
					
					
				},

			<?php endforeach; ?>
				
			]
		});
		
	});

</script>
<style>

	#calendar {
		width: 900px;
		margin: 20px auto 20px auto;
		}

</style>
                    
                     <script >
         $('.datepicker').datepicker({

            'format': 'yyyy-mm-dd'
         })
  </script>
@stop