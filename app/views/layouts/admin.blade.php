<!DOCTYPE html>
<html lang="en">
  <head>

    <!--/Favicon and Touch Icons -->
    {{ HTML::style('assets/css/bootstrap.css') }}
    {{ HTML::style('assets/css/sb-admin.css') }}
    {{ HTML::style('assets/font-awesome/css/font-awesome.min.css') }} 

    
    {{ HTML::script('assets/js/jquery.js') }} 
    {{ HTML::script('assets/js/bootstrap.js') }} 

     <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
     <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
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

   <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">

            <li><a href="bootstrap-grid.html"><i class="icon-wrench"></i> Bootstrap Grid</a></li>

            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-collapse"></i> Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Dropdown Item</a></li>
                <li><a href="#">Another Item</a></li>
                <li><a href="#">Third Item</a></li>
                <li><a href="#">Last Item</a></li>
              </ul>
            </li> -->
          </ul>
    </div>
</header>
  	@yield('content')
  </body>
  
</html>