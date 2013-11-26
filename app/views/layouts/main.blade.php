<!DOCTYPE html>
<html lang="en">
  <head>

    <!--/Favicon and Touch Icons -->
    {{ HTML::style('assets/css/bootstrap.css') }}
    {{ HTML::style('assets/css/sb-admin.css') }}
    {{ HTML::style('assets/font-awesome/css/font-awesome.min.css') }} 
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.min.css" />
    
    {{ HTML::script('assets/js/jquery.js') }} 
    {{ HTML::script('assets/js/bootstrap.js') }} 

     <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
     <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
     {{ HTML::script('assets/js/morris/chart-data-morris.js') }}
     {{ HTML::script('assets/js/tablesorter/jquery.tablesorter.js') }}
     {{ HTML::script('assets/js/tablesorter/tables.js') }}
<<<<<<< HEAD
    
     
     
=======
     <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.min.js"></script>
     <script type="text/javascript">
function GetCurrentPageName() { 
//method to get Current page name from url. 
var PageURL = document.location.href; 
var PageName = PageURL.substring(PageURL.lastIndexOf('/') + 1); 
 
return PageName.toLowerCase() ;
}
 
$(document).ready(function(){
var CurrPage = GetCurrentPageName();
 
switch(CurrPage){
case '':
 $('#li_home').addClass('active') ;
 break;
case 'profile':
 $('#li_profile').addClass('active') ;
 break;
case 'members':
 $('#li_member').addClass('active') ;
 break;
 case 'schedule':
 $('#li_schedule').addClass('active') ;
 break;
 case 'messages':
 $('#li_messages').addClass('active') ;
 break;


}
});
</script> 
>>>>>>> d09430be8887b7b97c9b11f566cd5d38218d42b6
    
     
  </head>
  <body>   <!-- Docs master nav -->
  <div class="container">
    <nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Sports Website</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li id="li_home"><a href="{{URL::to('/')}}">Home</a></li>
      <li id="li_profile"><a href="{{URL::to('profile')}}">My Profile</a></li>
      <li id="li_member"><a href="{{URL::to('members')}}">Members</a></li>
      <li id="li_schedule"><a href="{{URL::to('schedule')}}">Schedule</a></li>
         
    </ul>
    <ul class="nav navbar-nav navbar-right">
       <li id="li_messages"><a href="{{URL::to('user/messages')}}">Inbox</a></li>
      <li><a href="user/logout">Logout</a></li> 
	</ul>
    
  </div><!-- /.navbar-collapse -->
</nav>
</div>
  	@yield('content')
    
  </body>
  
  
</html>