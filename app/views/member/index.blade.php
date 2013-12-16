@extends('layouts.main')
@section('content')


<div id="main-content" class="container-fluid">

<div style="color:red" class="">
        {{ Session::get('errors') }}
    </div>
<div id="page-content" class="page-content">
<div class="row-fluid margin-top20">
<div class="col-xs-9 grider">
<div class="widget widget-simple">

<!--<div class="col-xs-3 comingevents">
<h4>Upcoming Events</h4>
<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;
showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=160&amp;wkst=1&amp;bgcolor=%23ffffff&amp;
src=cqml7cl9kd652bpbubck7dg3v0%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=Etc%2FGMT"
 style=" border-width:0 " width="240" height="160" frameborder="0" scrolling="no"></iframe>
</div>-->

<div class="col-xs-12 comingmessages">
<h4>Members</h4>
<hr class="hrheight" />

<div class="memberheight">
   @foreach($users as $user)
<div class="userchat">
<div class="col-sm-1">

   

    <a href="#" class="">
    	<?php $img =  DB::table('player_profile')
		->where('user_id','=',$user->id)
		->join('player_profile_photos as ppp','ppp.player_profile_id','=','player_profile.id')
		->select('player_profile_videos')
		->get();
 ?>

    {{Form::image('uploads/profiles_images/'.$img[0]->player_profile_videos,'',array('class'=>'memberimage'));}}

    </a>
  </div>
  
  <div class="col-sm-8">
  <h5>{{$user->email}}</h5>
  </div> 
  
  <div class="col-sm-11 clearfix">
  {{ HTML::link('members/view/'.$user->id,'View Profile...',array('class'=>'pull-right','style'=>'margin-top:;'))}}
  </div>
  
  <hr class="userchathr" />
   
</div>
 @endforeach
<hr class="hrheight" />
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