@extends('layouts.main')
@section('content')
<script type="text/javascript">
setTimeout(function(){
   window.location.reload(1);
}, 100000)
</script>

<div id="main-content" class="container-fluid">

<div id="page-content" class="page-content">
<div class="row-fluid margin-top20">
<div class="col-xs-9 grider">
<div class="widget widget-simple">



<div class="col-xs-12">

<div class="col-xs-4 comingmessages padding-bottom15">  

<h4>Messages</h4>
</div>

<div class="col-xs-8 padding-bottom15">

 
{{ HTML::link('user/message/compose','Create new',array('class'=>'btn btn-success pull-right'))}}

</div>

<hr class="hrheight" />

<div class="">
<div class="userchatinbox">

@foreach($inboxs as $inbox)


<div class="col-sm-1 col-md-1">
  
    <a href="#" class="thumbnail">
      <img data-src="holder.js/100%x180" alt="...">
    </a>
    
    <h6>{{$email}}</h6>

    
  </div>
  
  <div class="col-sm-10 comingevents">
  <div class="col-sm-1">
  <p>Subject:</p>
  </div>
  <div class="col-sm-10">
    @if($inbox->notification == 0)
    
    <p>{{HTML::link('user/messages/'.$inbox->id.'/readmsg',$inbox->subject)}}</p>
    
     @else
     <p style="font-weight:bold; color:green;">{{HTML::link('user/messages/'.$inbox->id.'/readmsg',$inbox->subject)}}</p>
     @endif
     
     </div>
  
  </div> 
  
  <div class="col-sm-1">
  {{ HTML::link('user/messages/'.$inbox->from_user.'/'.$inbox->id.'/reply','Reply',array('class'=>'','style'=>'margin-top:;'))}}
   {{ HTML::link('user/messages/'.$inbox->id.'/delete','Delete',array('class'=>'','style'=>'margin-top:;'))}}
  </div> 
 
  <hr class="userchathr" />
    @endforeach
    
    
</div>

<hr class="hrheight hrpadding" />

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