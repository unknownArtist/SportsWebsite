@extends('layouts.main')
@section('content')

<div id="main-content" class="container-fluid">

<div id="page-content" class="page-content">
<div class="row-fluid margin-top20">
<div class="col-xs-9 grider">
<div class="widget widget-simple">

<div class="col-xs-12 comingmessages">
<h4>News Feed</h4>
<hr class="hrheight" />

<div class="userchatheight">
<div class="userchat">

<div class="col-xs-12">
 @foreach($streams as $stream)
 
 <div class="col-xs-12">
<div class="col-sm-1 emailname">
    <a href="#" class="thumbnail">

<?php $img =  DB::table('player_profile')
		->where('user_id','=',$stream->user_id)
		->join('player_profile_photos as ppp','ppp.player_profile_id','=','player_profile.id')
		->select('player_profile_videos')
		->get();
 ?>
 	
     {{Form::image('uploads/profiles_images/'.$img[0]->player_profile_videos,'',array('class'=>'profileimage'));}}
    </a>

    <h6>{{ $stream->getUserName($stream->user_id, $stream->team_id) }}</h6>
  </div>
  


  <div class="col-sm-10">
  <p>{{ $stream->stream }} </p>
  </div> 

  <div class="col-sm-12">
 	<p class="pull-right timecolor">{{ $stream->getDateFrm($stream->created_at) }} ago</p>

  </div>

  </div>
  <hr class="userchathr" />
   @endforeach
   </div>
  </div>
  </div>
 
  
  <hr class="hrheight" />

  <div class="col-sm-11">
   {{ Form::open(array('url'=>'feeds','POST','files' => true))}}
{{ Form::textarea('stream','',array('class'=>'userchattxt','id'=>'myId','placeholder'=>'Start Typing...')) }}
</div>
<div class="col-sm-7">
{{ Form::submit('Send', array('class'=>'btn btn-primary pull-right submitbtn margin-bottom15')) }}
{{ Form::close() }}

</div>



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
