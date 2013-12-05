<!DOCTYPE html>
<html lang="en">
  <head>

    <!--/Favicon and Touch Icons -->
    {{ HTML::style('assets/css/bootstrap.css') }}
    {{ HTML::style('assets/css/sb-admin.css') }}
    {{ HTML::style('assets/font-awesome/css/font-awesome.min.css') }} 
    {{ HTML::style('assets/datepicker/css/datepicker.css') }}
   

    <!--<link href="assets/css/lib/bootstrap.css" rel="stylesheet">-->
    {{ HTML::script('assets/js/jquery.js') }} 
    {{ HTML::script('assets/js/bootstrap.js') }} 
    {{ HTML::script('assets/datepicker/js/bootstrap-datepicker.js')}}

    <!--css-->
    {{ HTML::style('assets/css/lib/bootstrap.css') }} 
     {{ HTML::style('assets/css/extension.css') }} 
      {{ HTML::style('assets/css/boo.css') }} 
       {{ HTML::style('assets/css/style.css') }} 
        {{ HTML::style('assets/css/boo-coloring.css') }} 
         {{ HTML::style('assets/css/boo-utility.css') }} 
          {{ HTML::style('assets/css/lib/bootstrap-responsive.css') }} 
          {{ HTML::style('assets/plugins/select2/select-theme.css') }} 
    
    



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