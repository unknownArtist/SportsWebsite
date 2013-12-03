<!DOCTYPE html>
<html lang="en">
  <head>

    <!--/Favicon and Touch Icons -->
   
    {{ HTML::style('assets/css/sb-admin.css') }}
    {{ HTML::style('assets/css/bootstrap.css') }}
    {{ HTML::style('assets/font-awesome/css/font-awesome.min.css') }} 
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.min.css" />
    <link href="assets/css/lib/bootstrap.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/extension.css" rel="stylesheet">
    <link href="assets/css/boo.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/boo-coloring.css" rel="stylesheet">
    <link href="assets/css/boo-utility.css" rel="stylesheet">
     {{ HTML::style('assets/css/fullcalendar.css') }}
    {{ HTML::style('assets/css/fullcalendar.print.css') }}
    
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
                                <li class="active"> <a href="{{URL::to('/')}}">Home</a> </li>                              
                                
                            </ul>
                             <ul class="nav pull-right">
       
      <li><a href="login">Login</a></li> 
	</ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // navbar -->
            
            <div class="header-drawer">
                <div class="mobile-nav text-center visible-phone"> <a href="javascript:void(0);" class="mobile-btn" data-toggle="collapse" data-target=".sidebar"><i class="aweso-icon-chevron-down"></i> Components</a> </div>
                <!-- // Resposive navigation -->
                <div class="breadcrumbs-nav hidden-phone">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="javascript:void(0);"><i class="fontello-icon-home f12"></i> Dashboard</a> <span class="divider">/</span></li>
                        <li class="dropdown"><a href="javascript:void(0);">Table </a> <span class="divider">/</span>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0);">Table</a></li>
                                <li><a href="javascript:void(0);">Elements</a></li>
                                <li><a href="javascript:void(0);">Elements</a></li>
                                <li><a href="javascript:void(0);">Elements</a></li>
                            </ul>
                        </li>
                        <li class="active">Boo Admin </li>
                    </ul>
                </div>
                <!-- // breadcrumbs --> 
            </div>
            <!-- // drawer --> 
        </div>
    </div>
    <!-- // header-container -->
  

  	@yield('content')
    
    
    <!-- // page-container  --> 

<!-- Le javascript --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="assets/plugins/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.min.js"></script> 
<script src="assets/js/lib/jquery.js"></script> 
<script src="assets/js/lib/jquery-ui.js"></script> 
<script src="assets/js/lib/bootstrap.js"></script> 
<script src="assets/js/lib/jquery.cookie.js"></script> 

<!-- Plugins Bootstrap --> 
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> 
<script src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script> 
<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script> 
<script src="assets/plugins/bootstrap-daterangepicker/js/date.js"></script> 
<script src="assets/plugins/bootstrap-daterangepicker/js/bootstrap-daterangepicker.js"></script> 
<script src="assets/plugins/bootstrap-fileupload/js/bootstrap-fileupload.js"></script> 
<script src="assets/plugins/bootstrap-rowlink/js/bootstrap-rowlink.js"></script> 
<script src="assets/plugins/bootstrap-progressbar/js/bootstrap-progressbar.js"></script> 
<script src="assets/plugins/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script> 
<script src="assets/plugins/bootstrap-select/bootstrap-select.js"></script> 
<script src="assets/plugins/bootstrap-bootbox/bootbox.min.js"></script> 
<script src="assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script> 
<script src="assets/plugins/bootstrap-modal/js/bootstrap-modal.js"></script> 
<script src="assets/plugins/bootstrap-wizard/js/bootstrap-wizard.js"></script> 
<script src="assets/plugins/bootstrap-toggle-buttons/js/bootstrap-toggle-buttons.js"></script> 

<!-- Plugins Custom --> 
<script src="assets/plugins/google-code-prettify/prettify.js"></script> 
<script src="assets/plugins/nicescroll/jquery.nicescroll.min.js"></script> 
<script src="assets/plugins/qtip2/dist/jquery.qtip.min.js"></script> 
<script src="assets/plugins/list/js/list.min.js"></script> 
<script src="assets/plugins/list/plugins/list.paging.min.js"></script> 
<script src="assets/plugins/fullcalendar/fullcalendar.js"></script> 

<!-- Plugins Forms --> 
<script src="assets/plugins/uniform/jquery.uniform.js"></script> 
<script src="assets/plugins/select2/select2.min.js"></script> 
<script src="assets/plugins/counter/jquery.counter.js"></script> 
<script src="assets/plugins/elastic/jquery.elastic.js"></script> 
<script src="assets/plugins/inputmask/jquery.inputmask.js"></script> 
<script src="assets/plugins/inputmask/jquery.inputmask.extensions.js"></script> 
<script src="assets/plugins/validate/js/jquery.validate.min.js"></script> 
<script src="assets/plugins/xbreadcrumbs/xbreadcrumbs.js"></script> 

<!-- Charts --> 
<script src="assets/plugins/sparkline/jquery.sparkline.js"></script> 
<script src="assets/plugins/flot/jquery.flot.js"></script> 
<script src="assets/plugins/flot/jquery.flot.categories.js"></script> 
<script src="assets/plugins/flot/jquery.flot.grow.js"></script> 
<script src="assets/plugins/flot/jquery.flot.orderBars.js"></script> 
<script src="assets/plugins/flot/jquery.flot.pie.js"></script> 
<script src="assets/plugins/flot/jquery.flot.resize.js"></script> 
<script src="assets/plugins/flot/jquery.flot.selection.js"></script> 
<script src="assets/plugins/flot/jquery.flot.stack.js"></script> 
<script src="assets/plugins/flot/jquery.flot.stackpercent.js"></script> 
<script src="assets/plugins/flot/jquery.flot.time.js"></script> 

<!-- Plugins Tables --> 
<script src="assets/plugins/datatables/media/js/jquery.dataTables.js"></script> 
<script src="assets/plugins/datatables/plugin/jquery.dataTables.plugins.js"></script> 
<script src="assets/plugins/datatables/plugin/jquery.dataTables.columnFilter.js"></script> 

<!-- main js -->
<script src="assets/js/application.js"></script> 

<!-- Only This Demo Page --> 
<script src="assets/js/demo/demo-form.js"></script>
<script src="assets/js/demo/demo-wisyhtml5.js"></script> 
    
  </body>
  
  
</html>