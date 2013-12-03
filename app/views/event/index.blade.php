@extends('layouts.main')
@section('content')

<div class="container">
<div id='calendar'></div>
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
@stop