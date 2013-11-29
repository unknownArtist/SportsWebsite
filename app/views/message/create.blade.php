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

<div class="col-xs-4 comingmessages">

<h4>No Message</h4>
</div>
<div class="col-xs-8">

 
{{ HTML::link('user/message/compose','Create new',array('class'=>'btn btn-success pull-right'))}}

</div>
@stop
