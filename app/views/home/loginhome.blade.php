@extends('layouts.main')
@section('content')

<div id="main-content" class="container-fluid">

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
<h4>News Feed</h4>
<hr class="hrheight" />


<div class="userchatheight">
<div class="userchat">
<div class="col-sm-1 col-md-1">
    <a href="#" class="thumbnail">
      <img data-src="holder.js/100%x180" alt="...">
    </a>
    <h6>username</h6>
  </div>
  
  <div class="col-sm-11">
  <p>21/10/13 – message that the person has written</p>
  </div> 
  
  <hr class="userchathr" />
   
</div>

<div class="userchat">
<div class="col-sm-1 col-md-1">
    <a href="#" class="thumbnail">
      <img data-src="holder.js/100%x180" alt="...">
    </a>
    <h6>username</h6>
  </div>
  
  <div class="col-sm-11">
  <p>21/10/13 – message that the person has written</p>
  </div> 
  
  <hr class="userchathr" />
   
</div>

<div class="userchat">
<div class="col-sm-1 col-md-1">
    <a href="#" class="thumbnail">
      <img data-src="holder.js/100%x180" alt="...">
    </a>
    <h6>username</h6>
  </div>
  
  <div class="col-sm-11">
  <p>21/10/13 – message that the person has written</p>
  </div> 
  
  <hr class="userchathr" />
   
</div>

</div>

<hr class="hrheight" />

<div class="col-sm-1 col-md-1">
    <a href="#" class="thumbnail">
      <img data-src="holder.js/100%x180" alt="...">
    </a>
    <h6>username</h6>
  </div>
<div class="col-sm-11">
{{ Form::textarea('user_chat','',array('class'=>'userchattxt','id'=>'myId','placeholder'=>'Start Typing...')) }}

</div>
<div class="col-sm-8">
{{ Form::submit('Send', array('class'=>'btn btn-primary clearfix pull-right submitbtn margin-bottom15')) }}
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
