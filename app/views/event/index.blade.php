@extends('layouts.main')
@section('content')

<div id="main-content" class="container-fluid">

<div id="page-content" class="page-content">
<div class="row-fluid margin-top20">
<div class="col-xs-12 grider">
<div class="widget widget-simple">

<div id='calendar'></div>
<div id="eventCalendarDefault"></div>
				
			
				
			</div>
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
<script>  
					$(document).ready(function() {  
						$("#eventCalendarDefault").eventCalendar({
							eventsjson: 'json/events.json.php' // link to events json
						});  
					});  
				</script>
<style>

	#calendar {
		width: 900px;
		margin: 20px auto 20px auto;
		}

</style>
@stop