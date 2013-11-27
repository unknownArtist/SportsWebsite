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

<div class="col-xs-9">
<h4>Members</h4>
<hr class="hrheight" />

<div class="memberheight">
   @foreach($users as $user)
<div class="userchat">
<div class="col-sm-1">
    <a href="#" class="thumbnail">
      <img data-src="holder.js/100%x180" alt="...">
    </a>
  </div>
  
  <div class="col-sm-8">
  <h5>{{$user->email}}</h5>
  </div> 
  
  <div class="col-sm-11 clearfix">
  {{ HTML::link('members/'.$user->id.'/profile','View Profile...',array('class'=>'pull-right','style'=>'margin-top:;'))}}
  </div>
  
  <hr class="userchathr" />
   
</div>
 @endforeach
<hr class="hrheight" />
</div>
</div>

@stop