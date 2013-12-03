@extends('layouts.logout')
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
{{ Form::submit('Send', array('class'=>'btn btn-primary clearfix pull-right submitbtn')) }}
</div>
</div>


</div>




@stop	
