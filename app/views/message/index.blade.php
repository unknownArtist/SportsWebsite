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
<h4>Messages</h4>
<hr class="hrheight" />

<div class="">

<div class="userchat">
<div class="col-sm-1 col-md-1">
    <a href="#" class="thumbnail">
      <img data-src="holder.js/100%x180" alt="...">
    </a>
    <h6>username</h6>
  </div>
  
  <div class="col-sm-10 comingevents">
  <p>Message Text</p>
  </div> 
  
  <div class="col-sm-1">
  {{ HTML::link('#','Reply',array('class'=>'','style'=>'margin-top:;'))}}
   {{ HTML::link('#','Delete',array('class'=>'','style'=>'margin-top:;'))}}
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
  
  <div class="col-sm-10 comingevents">
  <p>Message Text</p>
  </div> 
  
  <div class="col-sm-1">
  {{ HTML::link('#','Reply',array('class'=>'','style'=>'margin-top:;'))}}
   {{ HTML::link('#','Delete',array('class'=>'','style'=>'margin-top:;'))}}
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
  
  <div class="col-sm-10 comingevents">
  <p>Message Text</p>
  </div> 
  
  <div class="col-sm-1">
  {{ HTML::link('#','Reply',array('class'=>'','style'=>'margin-top:;'))}}
   {{ HTML::link('#','Delete',array('class'=>'','style'=>'margin-top:;'))}}
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
  
  <div class="col-sm-10 comingevents">
  <p>Message Text</p>
  </div> 
  
  <div class="col-sm-1">
  {{ HTML::link('#','Reply',array('class'=>'','style'=>'margin-top:;'))}}
   {{ HTML::link('#','Delete',array('class'=>'','style'=>'margin-top:;'))}}
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
  
  <div class="col-sm-10 comingevents">
  <p>Message Text</p>
  </div> 
  
  <div class="col-sm-1">
  {{ HTML::link('#','Reply',array('class'=>'','style'=>'margin-top:;'))}}
   {{ HTML::link('#','Delete',array('class'=>'','style'=>'margin-top:;'))}}
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
  
  <div class="col-sm-10 comingevents">
  <p>Message Text</p>
  </div> 
  
  <div class="col-sm-1">
  {{ HTML::link('#','Reply',array('class'=>'','style'=>'margin-top:;'))}}
   {{ HTML::link('#','Delete',array('class'=>'','style'=>'margin-top:;'))}}
  </div> 
  
  <hr class="userchathr" />
   
</div>

</div>

<hr class="hrheight" />

</div>
</div>


@stop