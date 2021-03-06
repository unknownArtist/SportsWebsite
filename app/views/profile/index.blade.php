@extends('layouts.main')
@section('content')

<div id="main-content" class="container-fluid">

<div id="page-content" class="page-content">
<div class="row-fluid margin-top20">
<div class="col-xs-9 grider">
<div class="widget widget-simple">

    <div style="color:red" class="">
        {{ Session::get('errors') }}
    </div>


	<div class="col-xs-12 widget-header">
    @if($profiles)
   
  {{ HTML::link('profile/create','Add Profile',array('class' => 'btn btn-success')) }}
       
    @endif
    
    </div>
@foreach($profiles as $profile)

 				
 				<div class="col-xs-3 labellineheight txtalign">
                
                {{Form::image('uploads/profiles_images/'.$profile->getImage($profile->id),'',array('class'=>'profileimage'));}}
                <div class="statistic-box well well-black padding-bottom15 margin-top15">
                <div class="section-title">
                 <h4 class="">D.O.B: <br /><span class="spancolor margin-left0">{{ $profile->age}}</span></h4>
                 </div>
                  <div class="section-title">
                 <h4>Weight: <br /><span class="spancolor margin-left0">{{ $profile->weight}}</span></h4>
                  </div>
                   <div class="section-title">
                  <h4>Height: <br /><span class="spancolor margin-left0">{{ $profile->height}}</span></h4>
                  </div>
                  
                  <div class="btn-group updatebtnwidth">
                    <a href="{{URL::to('profile/'.$profile->id.'/edit')}}" class="btn btn-mini" alt="Edit">
                        <i class="icon-edit"></i> Update
                    </a>

                   <!-- <a href="{{URL::to('profile/'.$profile->id.'/delete')}}" class="btn btn-mini" alt="Delete" onclick="return confirm('Are you sure?')">
                        <i class="icon-remove"></i> Delete
                    </a>-->
                </div>
                </div>
                
                </div>
                
                <div class="col-xs-9 statistic-box well well-black">
                <div class="col-xs-12">
                <h1 >{{ $profile->name }}</h1>
                <h3>( {{ $profile->player_nickname }} )</h3><hr>
                             
                </div>
                
              
                
                <div class="col-xs-12 colorh3 statistic-box well well-black padding-bottom15 margin-top15">
                
                <img src="assets/img/icon-ach.png"><br/><span class="spancolor"> {{ $profile->position }}</span>
                
                </div>   
                
                <div class="col-xs-12 colorh3 statistic-box well well-black padding-bottom15 margin-top15">
                
               <img src="assets/img/icon-ach.png"><br/><span class="spancolor"> {{ $profile->statistic }}</span>
                
                </div>    
                
                <div class="col-xs-12 colorh3 statistic-box well well-black padding-bottom15 margin-top15">
                
                <img src="assets/img/icon-ach.png"><br/><span class="spancolor"> {{ $profile->shoots }}</span>
                
                </div>  
                
                 <div class="col-xs-12 colorh3 statistic-box well well-black padding-bottom15 margin-top15">
                
                <img src="assets/img/icon-ach.png"><br/><span class="spancolor spanfontsize"> {{ $profile->achievements }}</span>
                
                </div> 
                        <div class="col-xs-12">
                            <ul class="enlarge">
                                  <li>
                                      <a href="assets/img/img-1.jpg" data-lightbox="roadtrip"><img src="assets/img/img-1.jpg" height="200px" width="200px"></a>
                                  </li>
                                  <li>
                                      <a href="assets/img/img-2.jpg" data-lightbox="roadtrip"><img src="assets/img/img-2.jpg" height="200px" width="200px"></a>
                                  </li>
                                  <li>
                                      <a href="assets/img/img-3.jpg" data-lightbox="roadtrip"><img src="assets/img/img-3.jpg" height="200px" width="200px"></a>
                                  </li>
                            </ul>
                        </div>
                </div>         

    @endforeach
    
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
