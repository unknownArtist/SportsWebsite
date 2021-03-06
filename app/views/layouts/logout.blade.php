<!DOCTYPE html>
<html lang="en">
  <head>

    <!--/Favicon and Touch Icons -->
   
    {{ HTML::style('assets/css/sb-admin.css') }}
    {{ HTML::style('assets/css/bootstrap.css') }}
    {{ HTML::style('assets/font-awesome/css/font-awesome.min.css') }} 
    
     {{ HTML::style('assets/css/lib/bootstrap.css') }} 
     {{ HTML::style('assets/css/extension.css') }} 
      {{ HTML::style('assets/css/boo.css') }} 
       {{ HTML::style('assets/css/style.css') }} 
        {{ HTML::style('assets/css/boo-coloring.css') }} 
         {{ HTML::style('assets/css/boo-utility.css') }} 
          {{ HTML::style('assets/css/lib/bootstrap-responsive.css') }} 
          {{ HTML::style('assets/plugins/select2/select-theme.css') }} 
  <!--  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.min.css" />
    <link href="assets/css/lib/bootstrap.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/extension.css" rel="stylesheet">
    <link href="assets/css/boo.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/boo-coloring.css" rel="stylesheet">
    <link href="assets/css/boo-utility.css" rel="stylesheet">-->
     {{ HTML::style('assets/css/fullcalendar.css') }}
    {{ HTML::style('assets/css/fullcalendar.print.css') }}
    {{ HTML::style('assets/css/lightbox.css') }}
    
    {{ HTML::script('assets/js/jquery.js') }} 
    {{ HTML::script('assets/js/bootstrap.js') }} 

     <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
     <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
     {{ HTML::script('assets/js/morris/chart-data-morris.js') }}
     {{ HTML::script('assets/js/tablesorter/jquery.tablesorter.js') }}
     {{ HTML::script('assets/js/tablesorter/tables.js') }}
     
     {{ HTML::script('assets/js/jquery.min.js') }} 
    {{ HTML::script('assets/js/jquery-ui.custom.min.js') }} 
    {{ HTML::script('assets/js/fullcalendar.min.js') }}
    {{ HTML::script('assets/js/jquery-1.10.2.min.js') }} 
    {{ HTML::script('assets/js/lightbox-2.6.min.js') }} 

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
case 'register':
 $('#li_register').addClass('active') ;
 break;
case 'login':
 $('#li_login').addClass('active') ;
 break;
 case 'events':
 $('#li_events').addClass('active') ;
 break;
 case 'schedule':
 $('#li_schedule').addClass('active') ;
 break;
 $('#li_rinks').addClass('active') ;
 break;
 $('#li_teams').addClass('active') ;
 break;
 case 'messages':
 $('#li_messages').addClass('active') ;
 break;


}

});

$(function(){
    $('.carousel').carousel({
      interval: 5000
    });
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
  <body class="sidebar-left panel-side">
<div class="page-container">
    <div id="header-container">
        <div id="header">
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container-fluid">
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a class="brand" href="{{URL::to('/')}}">iSkate</a>
                        
                        <div class="nav-collapse collapse">
                            
                            <ul class="nav">
                                <li id="li_home"> <a href="{{URL::to('/')}}">Home</a> </li>

                                  <li id="li_teams">{{ HTML::link('teams/list','Teams') }}</li>

                                  <li id="li_rinks">{{ HTML::link('rinks/list','Rinks') }}</li>                              
                                
                            </ul>
                             <ul class="nav pull-right">
      <li id="li_register"><a href="{{URL::to('user/register')}}">Sign up</a></li>  
      <li id="li_login"><a href="{{URL::to('login')}}">Sign in</a></li> 
	</ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // navbar -->
            
            <div class="header-drawer">
                <div class="mobile-nav text-center visible-phone"> <a href="javascript:void(0);" class="mobile-btn" data-toggle="collapse" data-target=".sidebar"><i class="aweso-icon-chevron-down"></i> Components</a> </div>
                <!-- // Resposive navigation -->
                
                <!-- // breadcrumbs --> 
            </div>
            <!-- // drawer --> 
        </div>
    </div>
    <!-- // header-container -->
  

  	@yield('content')
    
    </div>   
    
    <!-- // page-container  --> 

<!-- Le javascript --> 
<!-- Placed at the end of the document so the pages load faster --> 

 {{ HTML::script('assets/plugins/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.min.js') }}    
{{ HTML::script('assets/js/lib/jquery.js') }}    
{{ HTML::script('assets/js/lib/jquery-ui.js') }}    
{{ HTML::script('assets/js/lib/bootstrap.js') }}    
{{ HTML::script('assets/js/lib/jquery.cookie.js') }}    

<!-- Plugins Bootstrap --> 

{{ HTML::script('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}    
{{ HTML::script('assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js') }}    
{{ HTML::script('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}    
{{ HTML::script('assets/plugins/bootstrap-daterangepicker/js/date.js') }}    
{{ HTML::script('assets/plugins/bootstrap-daterangepicker/js/bootstrap-daterangepicker.js') }}    

{{ HTML::script('assets/plugins/bootstrap-fileupload/js/bootstrap-fileupload.js') }}    
{{ HTML::script('assets/plugins/bootstrap-rowlink/js/bootstrap-rowlink.js') }}    
{{ HTML::script('assets/plugins/bootstrap-progressbar/js/bootstrap-progressbar.js') }}    
{{ HTML::script('assets/plugins/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js') }}    
{{ HTML::script('assets/plugins/bootstrap-select/bootstrap-select.js') }}    

{{ HTML::script('assets/plugins/bootstrap-bootbox/bootbox.min.js') }}    
{{ HTML::script('assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js') }}    
{{ HTML::script('assets/plugins/bootstrap-modal/js/bootstrap-modal.js') }}    
{{ HTML::script('assets/plugins/bootstrap-wizard/js/bootstrap-wizard.js') }}    
{{ HTML::script('assets/plugins/bootstrap-toggle-buttons/js/bootstrap-toggle-buttons.js') }}    

<!-- Plugins Custom --> 
{{ HTML::script('assets/plugins/google-code-prettify/prettify.js') }} 
{{ HTML::script('assets/plugins/nicescroll/jquery.nicescroll.min.js') }}       
{{ HTML::script('assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js') }}    
{{ HTML::script('assets/plugins/list/js/list.min.js') }}    
{{ HTML::script('assets/plugins/list/plugins/list.paging.min.js') }}    
{{ HTML::script('assets/plugins/fullcalendar/fullcalendar.js') }}   

<!-- Plugins Forms --> 
{{ HTML::script('assets/plugins/uniform/jquery.uniform.js') }} 
{{ HTML::script('assets/plugins/select2/select2.min.js') }}       
{{ HTML::script('assets/plugins/counter/jquery.counter.js') }}    
{{ HTML::script('assets/plugins/elastic/jquery.elastic.js') }}    
{{ HTML::script('assets/plugins/inputmask/jquery.inputmask.js') }}    
{{ HTML::script('assets/plugins/inputmask/jquery.inputmask.extensions.js') }}   
{{ HTML::script('assets/plugins/validate/js/jquery.validate.min.js') }}    
{{ HTML::script('assets/plugins/xbreadcrumbs/xbreadcrumbs.js') }}   


<!-- Charts --> 
{{ HTML::script('assets/plugins/sparkline/jquery.sparkline.js') }} 
{{ HTML::script('assets/plugins/flot/jquery.flot.js') }}       
{{ HTML::script('assets/plugins/flot/jquery.flot.categories.js') }}    
{{ HTML::script('assets/plugins/flot/jquery.flot.grow.js') }}    
{{ HTML::script('assets/plugins/flot/jquery.flot.orderBars.js') }}    
{{ HTML::script('assets/plugins/flot/jquery.flot.pie.js') }}   
{{ HTML::script('assets/plugins/flot/jquery.flot.resize.js') }}    
{{ HTML::script('assets/plugins/flot/jquery.flot.selection.js') }}   
{{ HTML::script('assets/plugins/flot/jquery.flot.stack.js') }}   
{{ HTML::script('assets/plugins/flot/jquery.flot.stackpercent.js') }}    
{{ HTML::script('assets/plugins/flot/jquery.flot.time.js') }}   


<!-- Plugins Tables --> 

{{ HTML::script('assets/plugins/datatables/media/js/jquery.dataTables.js') }}   
{{ HTML::script('assets/plugins/datatables/plugin/jquery.dataTables.plugins.js') }}    
{{ HTML::script('assets/plugins/datatables/plugin/jquery.dataTables.columnFilter.js') }}   

<!-- main js -->

{{ HTML::script('assets/js/application.js') }}   

<!-- Only This Demo Page --> 
{{ HTML::script('assets/js/demo/demo-form.js') }}    
{{ HTML::script('assets/js/demo/demo-wisyhtml5.js') }}  

{{ HTML::script('assets/js/respond.min.js') }}  
    


	<!-- Holder renders image placeholders entirely on the client side (http://imsky.github.io/holder/) -->
	
	<!-- Your javascript file -->
	
    
  </body>
  
  
</html>