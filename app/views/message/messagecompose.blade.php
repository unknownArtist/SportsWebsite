@extends('layouts.main')
@section('content')

<div id="main-content" class="container-fluid">

<div id="page-content" class="page-content">
<div class="row-fluid margin-top20">
<div class="col-xs-9 grider">
<div class="widget widget-simple padding-bottom15">

    
  <div class="col-xs-12 widget-header">
  <h4>Compose Message</h4>
</div>
   {{ Form::open(array('url'=>'user/message/compose','POST','files'=>true))}}
    <div class="col-xs-12 margin-top15">
  	{{ Form::label('send_to', 'Send To') }}
    <div class="controls">
  	{{Form::select('to',$teams, '', array('class'=>''));}}
    </div>
  </div>	
    <div class="col-xs-12">
   	{{ Form::label('m_subject', 'Message Subject') }}
   	{{ Form::text('subject','',array('class'=>'form-control txtboxheight')) }}
   </div>	

<div class="col-xs-12">
	{{ Form::label('msg', 'Message') }}
   	{{ Form::textarea('body','',array('class'=>'form-control')) }}


   	{{ HTML::link('user/messages','Return to inbox',array('class'=>'btn btn-success '))}}
                {{ Form::submit('Send Message',array('class'=>'btn btn-primary pull-right'))}}
                {{ Form::close() }}
                  </div>
              </div>
              </div>
              
              <div class="col-xs-3 statistic-box widget widget-simple padding-left10 padding-right10">
  
 <div class="widget-header col-xs-12 margin-bottom15">
 <h4 style="text-align:center; float:none;">Upcoming Events</h4>
 
 </div>
 <div id='calendar' class="well well-black"></div>
@foreach($events as $event)

@endforeach
 
 </div>
              
              </div>
              </div>
              </div>
              
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
@stop