@extends('layouts.main')
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
    @if($profiles)
   
  {{ HTML::link('profile/create','Add Profile',array('class' => 'btn btn-success')) }}
       
    @endif
    
    </div>
@foreach($profiles as $profile)

 				
 				<div class="col-xs-3 labellineheight txtalign">
                
                {{Form::image('uploads/profiles_images/'.$profile->getImage($profile->id),'',array('class'=>'profileimage'));}}
                <div class="statistic-box well well-black padding-bottom15 margin-top15">
                <div class="section-title">
                 <h4 class="">D O B: <br /><span class="spancolor margin-left0">{{ $profile->age}}</span></h4>
                 </div>
                  <div class="section-title">
                 <h4>Weight: <br /><span class="spancolor margin-left0">{{ $profile->weight}}</span></h4>
                  </div>
                   <div class="section-title">
                  <h4>Height: <br /><span class="spancolor margin-left0">{{ $profile->height}}</span></h4>
                  </div>
                  
                  <div class="btn-group updatebtnwidth">
                    <a href="{{URL::to('profile/'.$profile->id.'/edit')}}" class="btn btn-mini" alt="Edit">
                        <i class="icon-edit"></i> Update
                    </a>

                    <!--<a href="{{URL::to('profile/'.$profile->id.'/delete')}}" class="btn btn-mini" alt="Delete" onclick="return confirm('Are you sure?')">
                        <i class="icon-remove"></i> Delete
                    </a>-->
                </div>
                </div>
                
                </div>
                
                <div class="col-xs-9 padding-bottom15">
                <div class="col-xs-12 labellineheight">
                <h1 >{{ $profile->name }}</h1> 
                <h3> {{ $profile->player_nickname }}</h3>              
                </div>
                
              
                
                <div class="col-xs-12 colorh3">
                
                <h4>Position:<span class="spancolor"> {{ $profile->position }}</span></h4>
                
                </div>   
                
                <div class="col-xs-12 colorh3">
                
                <h4>Statistics:<span class="spancolor"> {{ $profile->statistic }}</span></h4>
                
                </div>    
                
                <div class="col-xs-12 colorh3">
                
                <h4>Shoots:<span class="spancolor"> {{ $profile->shoots }}</span></h4>
                
                </div>  
                
                 <div class="col-xs-12 colorh3">
                
                <h4 class="achievejustify">Achievements:<br /><span class="spancolor spanfontsize"> {{ $profile->achievements }}</span></h4>
                
                </div> 
                </div>         

    @endforeach
    
    </div>	
    </div>
    
     <div class="col-xs-3 statistic-box well well-black padding-bottom15">
    <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;
showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=160&amp;wkst=1&amp;bgcolor=%23ffffff&amp;
src=cqml7cl9kd652bpbubck7dg3v0%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=Etc%2FGMT"
 style=" border-width:0; margin:40px; " width="240" height="160" align="" frameborder="0" scrolling="no"></iframe>
 </div>
    
    </div>
    </div>
    </div>
    

@stop	
