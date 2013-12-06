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
    <a href="#" class="thumbnail">
      <img data-src="holder.js/100%x180" alt="...">
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

 <div class="col-xs-3 statistic-box well well-black padding-bottom15">
    <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;
showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=160&amp;wkst=1&amp;bgcolor=%23ffffff&amp;
src=cqml7cl9kd652bpbubck7dg3v0%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=Etc%2FGMT"
 style=" border-width:0; margin:40px; " width="240" height="160" align="" frameborder="0" scrolling="no"></iframe>
 </div>

</div>
</div>
</div>

@stop