@extends('layouts.logout')
@section('content')

<div id="main-content" class="container-fluid">

<div id="page-content" class="page-content">
<div class="row-fluid margin-top20">
<div class="col-xs-9 grider">
<div class="widget widget-simple">

    <div style="color:red" class="">
        {{ Session::get('errors') }}
    </div>


	<div class="col-xs-12 widget-header">
    
   
  {{ HTML::link('profile/create','Add Profile',array('class' => 'btn btn-success')) }}
       
   
    
    </div>


 				
 				<div class="col-xs-3 labellineheight txtalign">
                
                <a href="/assets/img/img-1.jpg" ><img src="/assets/img/img-1.jpg" height="200px" width="200px"></a>

                <div class="statistic-box well well-black padding-bottom15 margin-top15">
                <div class="section-title">
                 <h4>Name<br /><span class="spancolor margin-left0"> </span></h4>
                 </div>
                  <div class="section-title">
                 <h4>Seating Capacity <br /><span class="spancolor margin-left0"></span></h4>
                  </div>
                  
                  <div class="btn-group updatebtnwidth">
                    <a href="{{URL::to('rinks/list')}}" class="btn btn-mini" alt="Edit">
                        <i class="icon-edit"></i> Back
                    </a>

                </div>
                </div>
                
                </div>
                
               <div class="col-xs-9 statistic-box well well-black">
                <div class="col-xs-12 ">
                <h1 ></h1> 
                <h3></h3><hr>              
                </div>

                <div class="col-xs-12 colorh3 statistic-box well well-black padding-bottom15 margin-top15">
                
                <h4 style="margin-left:30px;">Highlights:<br /><span class="spancolor"></span></h4>
                </div>   
                
                <div class="col-xs-12 colorh3 statistic-box well well-black padding-bottom15 margin-top15">
                
                <h4 style="margin-left:30px;">Other Teams:<h4><br/><span class="spancolor"> </span>
                
                </div>    
                
                <div class="col-xs-12 colorh3 statistic-box well well-black padding-bottom15 margin-top15">
                
                <h4 style="margin-left:30px;">Open date from:<h4><br/><span class="spancolor"> </span>
                
                </div>  
                
                 <div class="col-xs-12 colorh3 statistic-box well well-black padding-bottom15 margin-top15">
                
                <h4 style="margin-left:30px;">Open date to:<h4><br/><span class="spancolor"> </span>
                
                </div> 

                <div class="col-xs-12 colorh3 statistic-box well well-black padding-bottom15 margin-top15">
                
                <h4 style="margin-left:30px;">Open date from:<h4><br/><span class="spancolor"> </span>
                
                </div>  
                
                 <div class="col-xs-12 colorh3 statistic-box well well-black padding-bottom15 margin-top15">
                
                <h4 style="margin-left:30px;">Open date to:<h4><br/><span class="spancolor"> </span>
                
                </div> 

                <div class="col-xs-12 colorh3 statistic-box well well-black padding-bottom15 margin-top15">
                
                <h4 style="margin-left:30px;">Description:<h4><br/><span class="spancolor"> </span>
                
                </div> 
                      <div class="col-xs-12">
                            <ul class="enlarge" style="text-align:center;">
                                  <li>
                                    <h4>Image1</h4>
                                      <a href="/assets/img/img-1.jpg" data-lightbox="roadtrip"><img src="/assets/img/img-1.jpg" height="200px" width="200px"></a>
                                  </li>
                                  <li>
                                    <h4>Image2</h4>
                                      <a href="/assets/img/img-2.jpg" data-lightbox="roadtrip"><img src="/assets/img/img-2.jpg" height="200px" width="200px"></a>
                                  </li>
                                  <li>
                                    <h4>Image3</h4>
                                      <a href="/assets/img/img-3.jpg" data-lightbox="roadtrip"><img src="/assets/img/img-3.jpg" height="200px" width="200px"></a>
                                  </li>
                            </ul>
                        </div>
                </div>         

   
    
    </div>  
    </div>
 
 </div>
    
    </div>
    </div>
    </div>
    

@stop	
