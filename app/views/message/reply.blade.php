@extends('layouts.main')
@section('content')

<div id="main-content" class="container-fluid">

<div id="page-content" class="page-content">
<div class="row-fluid margin-top20">
<div class="col-xs-9 grider">
<div class="widget widget-simple padding-bottom15 mesageboxheight">


   {{ Form::open(array('url'=>'user/messages/{id}/reply','POST','files'=>true))}}
   
  	
  	{{ Form::hidden('to',Request::segment(3))}}

<div class="col-xs-12 padding-top15">
	{{ Form::label('msg', 'Message') }}
   	{{ Form::textarea('body','',array('class'=>'form-control txtareaheight2')) }}


   	{{ HTML::link('user/messages','Return to inbox',array('class'=>'btn btn-success '))}}
                {{ Form::submit('Send Message',array('class'=>'btn btn-primary pull-right'))}}
                {{ Form::close() }}
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