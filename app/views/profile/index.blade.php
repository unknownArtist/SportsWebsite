@extends('layouts.main')
@section('content')
<div class="container">
    <div style="color:red" class="labellineheight">
        {{ Session::get('errors') }}
    </div>


	<div class="col-xs-12">
    @if($profiles)
   
  {{ HTML::link('profile/create','Add Profile',array('class' => 'btn btn-success')) }}
       
    @endif
    
    </div>
@foreach($profiles as $profile)

 
 				<div class="col-xs-2 labellineheight txtalign">
                
                {{Form::image('uploads/profiles_images/'.$profile->getImage($profile->id),'',array('class'=>'profileimage'));}}
                 <h4>Age: <br /><span class="spancolor">{{ $profile->age}}</span></h4>
                 <h4>Weight: <br /><span class="spancolor">{{ $profile->weight}}</span></h4>
                  <h4>Height: <br /><span class="spancolor">{{ $profile->height}}</span></h4>
                  <div class="btn-group">
                    <a href="{{URL::to('profile/'.$profile->id.'/edit')}}" class="btn btn-mini" alt="Edit">
                        <i class="icon-edit"></i> Edit
                    </a>

                    <a href="{{URL::to('profile/'.$profile->id.'/delete')}}" class="btn btn-mini" alt="Delete" onclick="return confirm('Are you sure?')">
                        <i class="icon-remove"></i> Delete
                    </a>
                </div>
                
                </div>
                
                <div class="col-xs-6 labellineheight">
                <h1>{{ $profile->name }}</h1> 
                <h3> {{ $profile->player_nickname }}</h3>              
                </div>
                
              
                
                <div class="col-xs-10 colorh3">
                
                <h4>Position:<span class="spancolor"> {{ $profile->position }}</span></h4>
                
                </div>   
                
                <div class="col-xs-10 colorh3">
                
                <h4>Statistics:<span class="spancolor"> {{ $profile->statistic }}</span></h4>
                
                </div>    
                
                <div class="col-xs-10 colorh3">
                
                <h4>Shoots:<span class="spancolor"> {{ $profile->shoots }}</span></h4>
                
                </div>  
                
                 <div class="col-xs-6 colorh3">
                
                <h4 class="achievejustify">Achievements:<br /><span class="spancolor spanfontsize"> {{ $profile->achievements }}</span></h4>
                
                </div>          

    @endforeach
    
    </div>	

@stop	
