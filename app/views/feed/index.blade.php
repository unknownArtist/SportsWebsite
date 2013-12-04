@extends('layouts.main')
@section('content')

<div class="container">

<div class="col-xs-3 comingevents">
<h4>Upcoming Events</h4>
<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;
showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=160&amp;wkst=1&amp;bgcolor=%23ffffff&amp;
src=cqml7cl9kd652bpbubck7dg3v0%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=Etc%2FGMT"
 style=" border-width:0 " width="240" height="160" frameborder="0" scrolling="no"></iframe>
</div>

<div class="col-xs-9 comingmessages">
<h4>News Feed</h4>
<hr class="hrheight" />



<div class="userchatheight">
  <div class="col-sm-11">
   {{ Form::open(array('url'=>'feeds','POST','files' => true))}}
{{ Form::textarea('stream','',array('class'=>'userchattxt','id'=>'myId','placeholder'=>'Start Typing...')) }}
{{ Form::submit('Send', array('class'=>'btn btn-primary clearfix pull-right submitbtn')) }}
{{ Form::close() }}

</div>
<div class="userchat">
  @foreach($streams as $stream)
<div class="col-sm-1 col-md-1">
    <a href="#" class="thumbnail">
      <img data-src="holder.js/100%x180" alt="...">
    </a>

    <h6>{{ $stream->getUserName($stream->user_id, $stream->team_id) }}</h6>
  </div>
   
  <div class="col-sm-11">
  <p>{{$stream->getDateFrm($stream->created_at).'<br> '.$stream->stream }} </p>
  </div> 
  
  <hr class="userchathr" />
   
</div>
@endforeach

</div> 





@stop	
