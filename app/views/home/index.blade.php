@extends('layouts.logout')
@section('content')

<div id="carousel" class="carousel slide">
		<!-- Indicators -->
		<!--<ol class="carousel-indicators">
			<li data-target="#carousel" data-slide-to="0" class="active"></li>
			<li data-target="#carousel" data-slide-to="1"></li>
			<li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>
            <li data-target="#carousel" data-slide-to="4"></li>
            
		</ol>-->

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="assets/images/slide2.png" alt="" />
				
			</div>

			<div class="item">
				<img src="assets/images/slide3.png" alt="" />
				<!--<div class="carousel-caption">
					<h1>Made with Bootstrap 3</h1>
				</div>-->
			</div>

			<div class="item">
				<img src="assets/images/slide11.png" alt="" />
				
			</div>
            
            <div class="item">
				<img src="assets/images/slide13.png" alt="" />
				
			</div>
            
            <div class="item">
				<img src="assets/images/slide15.png" alt="" />
				
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel" data-slide="prev">
			<span class="icon-prev"></span>
		</a>
		<a class="right carousel-control" href="#carousel" data-slide="next">
			<span class="icon-next"></span>
		</a>
	</div>

<div id="main-content" class="container-fluid">



<div id="page-content" class="page-content">
<div class="row-fluid margin-top20">



<div class="col-xs-8 grider">

<div class="widget widget-simple">

<!-- Carousel -->
	
	<!-- /Carousel -->

<!--<div class="col-xs-12 comingmessages">
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
</div>-->

<div class="span12">

<h3>Welcome to iSkate, home of all things Ice Hockey in South Africa.</h3>
<h5 class="greencolor"><a href="user/register"> Sign up</a> to get all the news and keep updates with leagues and events.</h5>

</div>


</div>
</div>

<!--<div class="col-xs-3 statistic-box well well-black padding-bottom15">
    <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;
showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=160&amp;wkst=1&amp;bgcolor=%23ffffff&amp;
src=cqml7cl9kd652bpbubck7dg3v0%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=Etc%2FGMT"
 style=" border-width:0; margin:40px; " width="240" height="160" align="" frameborder="0" scrolling="no"></iframe>
 </div>
-->

<div class="col-xs-4">

<div class="widget widget-simple">

<div class="col-xs-10 statistic-box well well-black padding-bottom15 loginformmargin margin-top15">
	<h2 id="" class="padding-left10">Upcoming Events</h2>
    <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;
showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=160&amp;wkst=1&amp;bgcolor=%23ffffff&amp;
src=cqml7cl9kd652bpbubck7dg3v0%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=Etc%2FGMT"
 style=" border-width:0; margin:0 40px 0 40px; " width="240" height="160" align="" frameborder="0" scrolling="no"></iframe>
 </div>

<div class="col-xs-10 loginformmargin">
<h2 id="adminText">User Login</h2>
   <div class="" >
      <div id="errors">
        @if (Session::get('errors'))
          {{ Session::get('errors') }}
        @endif
      </div>
      <div id="success">
        @if (Session::get('success'))
          {{ Session::get('success') }}
        @endif

      </div>
        <div id="loginForm">
         {{ Form::open(array('login','POST'))  }}
              {{ Form::token() }}
      
                  {{ Form::text('email','', array('class'=>'form-control formz span12','placeholder' => 'Email address', 'id'=>'logininput')) }}
                  {{ Form::password('password' , array('class'=>'form-control formz span12','placeholder' => 'Password','AUTOCOMPLETE' => 'OFF')) }}  
                  {{ Form::submit('Login', array('class'=>'btn btn-primary pull-right margin-bottom15 margin-top5')) }}
        </div>

  </div>
{{ Form::close() }}
</div>
</div>

</div>

</div>
</div>
</div>

 

@stop	


