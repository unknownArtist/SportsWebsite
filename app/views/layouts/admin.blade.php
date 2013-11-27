<!DOCTYPE html>
<html lang="en">
  <head>

    <!--/Favicon and Touch Icons -->
    {{ HTML::style('assets/css/bootstrap.css') }}
    {{ HTML::style('assets/css/sb-admin.css') }}
    {{ HTML::style('assets/font-awesome/css/font-awesome.min.css') }} 
    {{ HTML::style('assets/datepicker/css/datepicker.css') }}
    {{ HTML::style('assets/css/fullcalendar.css') }}
    {{ HTML::style('assets/css/fullcalendar.print.css') }}

    
    {{ HTML::script('assets/js/jquery.js') }} 
    {{ HTML::script('assets/js/bootstrap.js') }} 
    {{ HTML::script('assets/datepicker/js/bootstrap-datepicker.js')}}
    
    {{ HTML::script('assets/js/jquery.min.js') }} 
    {{ HTML::script('assets/js/jquery-ui.custom.min.js') }} 
    {{ HTML::script('assets/js/fullcalendar.min.js') }} 



  </head>
  <body>   <!-- Docs master nav -->
  <div class="container" style="border:0; padding:0;">
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