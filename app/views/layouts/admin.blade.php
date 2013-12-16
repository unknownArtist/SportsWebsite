<!DOCTYPE html>
<html lang="en">
  <head>
    <script type="text/javascript">
setTimeout(function(){
   window.location.reload(1);
}, 300000)
</script>

    <!--/Favicon and Touch Icons -->
    {{ HTML::style('assets/css/bootstrap.css') }}
    {{ HTML::style('assets/css/sb-admin.css') }}
    {{ HTML::style('assets/font-awesome/css/font-awesome.min.css') }} 
   
   
     <!--<link href="assets/css/lib/bootstrap.css" rel="stylesheet">-->
     {{ HTML::style('assets/css/lib/bootstrap.css') }} 
     {{ HTML::style('assets/css/extension.css') }} 
      {{ HTML::style('assets/css/boo.css') }} 
       {{ HTML::style('assets/css/style.css') }} 
        {{ HTML::style('assets/css/boo-coloring.css') }} 
         {{ HTML::style('assets/css/boo-utility.css') }} 
          {{ HTML::style('assets/css/lib/bootstrap-responsive.css') }} 
          {{ HTML::style('assets/plugins/select2/select-theme.css') }} 
     
     
   <!-- <link href="assets/css/lib/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/extension.css" rel="stylesheet">
    <link href="assets/css/boo.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/boo-coloring.css" rel="stylesheet">
    <link href="assets/css/boo-utility.css" rel="stylesheet">-->
     {{ HTML::style('assets/css/fullcalendar.css') }}
    {{ HTML::style('assets/css/fullcalendar.print.css') }}
    
    {{ HTML::script('assets/js/jquery.js') }} 
    {{ HTML::script('assets/js/bootstrap.js') }}     
     <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.min.css" />

     <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
     <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
     {{ HTML::script('assets/js/morris/chart-data-morris.js') }}
     {{ HTML::script('assets/js/tablesorter/jquery.tablesorter.js') }}
     {{ HTML::script('assets/js/tablesorter/tables.js') }}
     
     {{ HTML::script('assets/js/jquery.min.js') }} 
    {{ HTML::script('assets/js/jquery-ui.custom.min.js') }} 
    {{ HTML::script('assets/js/fullcalendar.min.js') }} 

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
case 'loginhome':
 $('#li_home').addClass('active') ;
 break;
case 'profile':
 $('#li_profile').addClass('active') ;
 break;
case 'members':
 $('#li_member').addClass('active') ;
 break;
 case 'events':
 $('#li_events').addClass('active') ;
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
    
    <style type="text/css">
.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);
filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;
border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}
</style> 
  </head>
  <body>   <!-- Docs master nav -->
    <nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Sports Website Admin</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Link</a></li>
      <li><a href="#">Link</a></li>
      
    </ul>
    
    
  </div><!-- /.navbar-collapse -->
</nav>

    @yield('content')
</div> 	
  </body>
  
</html>