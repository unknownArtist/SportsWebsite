<!DOCTYPE html>
<html lang="en">
  <head>

    <!--/Favicon and Touch Icons -->
    {{ HTML::style('assets/css/bootstrap.css') }}
    {{ HTML::style('assets/css/sb-admin.css') }}
    {{ HTML::style('assets/font-awesome/css/font-awesome.min.css') }} 

    
    {{ HTML::script('assets/js/jquery.js') }} 
    {{ HTML::script('assets/js/bootstrap.js') }} 

     {{ HTML::script('assets/js/morris/chart-data-morris.js') }}
     {{ HTML::script('assets/js/tablesorter/jquery.tablesorter.js') }}
     {{ HTML::script('assets/js/tablesorter/tables.js') }}



  </head>
  <body>   <!-- Docs master nav -->
    <header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="../" class="navbar-brand">Sports Website Admin</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
     
    </nav>
  </div>


</header>
<div style="margin-left:50px;margin-right:50px;">
    @yield('content')
</div>
  	
  </body>
  
</html>