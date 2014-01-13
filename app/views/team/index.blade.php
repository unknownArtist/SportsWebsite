@extends('layouts.logout')
@section('content')
   <div id="main-content" class="container-fluid">

<div id="page-content" class="page-content">


        

@foreach($teams as $team)
   <div class="col-xs-2 grider margin-top20 widget widget-simple" style="
    width: 240px; margin-right:30px; margin-left:30px;">
        <ul class="thumbnails margin-top20">
        
            <li style="margin-left:30px;">
                {{Form::image('uploads/teamImages/'.$team->team_logo, '', array('class'=>' img-polaroid') )}}
            </li>
            <li>
                <h4>Team</h4>
                {{ $team->team_name }}
            </li>
            <li>  
                <h4>Rink</h4>  
                {{ $team->team_rink }}
            </li> 
            <li>
                <h4>Founded</h4>
                {{ $team->founded }}
                
           
            </li>
            <li>
                {{ HTML::link("team/{$team->id}/detail", "Details", array('class'=>'btn btn-success') )}}
            </li>
        </ul>
    </div>
      

    
        
    @endforeach
    
   

    {{ $teams->links() }}
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
@stop