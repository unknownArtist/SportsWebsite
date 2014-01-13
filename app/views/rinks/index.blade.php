@extends('layouts.logout')
@section('content')
	<div id="main-content" class="container-fluid">

<div id="page-content" class="page-content">
<div class="row-fluid margin-top20">
<div class="col-xs-12 grider">
<div class="widget widget-simple">
    

    @foreach($rinks as $rink)
       <div class="col-xs-2 grider margin-top20 widget widget-simple" style="
    width: 240px; margin-right:30px; margin-left:30px;">
        <ul class="thumbnails margin-top20">

            <li style="margin-left:0px;">
                {{Form::image('uploads/rinks_images/'.$rink->getImage($rink->id, array('class'=>' img-polaroid')));}}
            </li>
            <li>
                <h4>Name</h4>
                {{ $rink->title }}
            </li>
            
            <li>
                <h4>Capacity</h4>
                {{ $rink->rink_seating_capacity }}
            </li>
           
                <li>
                    {{ HTML::link("rink/{$rink->id}/detail",'Details',array('class'=>'btn btn-success')) }}
                </li>
         </ul>
     </div>
    @endforeach
   
    {{ $rinks->links() }}
    </div>
    </div>
    </div>
    </div>

    </div>
    
@stop		