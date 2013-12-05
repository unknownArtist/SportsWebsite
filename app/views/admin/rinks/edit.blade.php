@extends('layouts.admin')
@section('content')

<div class="row-fluid">
    <div class="span8 grider">
      <div class="widget widget-simple">
        <div class="widget-header">
     <div class=""> 
    @if ($errors->any())
    <ul style="color:red;">
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
    </div>
@endif
    

   <div class="row-fluid">
        <div class="span12 form-dark">
            <ul class="form-list label-left list-bordered">
 
         {{ Form::open(array('url'=>'admin/rinks/'.$rinks['id'].'/edit','POST','files' => true,'class'=>'form-horizontal'))}}
              {{ Form::token() }}
          <?php $id= Request::segment(3);
              $adresses = RinksAddress::where('rink_id','=',$id)->get();
              $a = array();
              foreach($adresses as $key => $address )
              {
                $a[] = $address->rink_addresse;
              }

              $d = implode(',',$a);
              $homes = RinksHome::where('rink_id','=',$id)->get();
              $hom = array();
              foreach($homes as $key => $home)
              {
                $hom[] = $home->home_team;
              }

              $ho = implode(',',$hom);

              $images = RinksImage::where('rink_id','=',$id)->get();
              foreach($images as $key => $image)
              {
                $img = $image->rink_image;
                
              }
            ?>
             
             <li class="control-group"> 
            {{ Form::label('rink_addresse', 'Addresses:','',array('class'=>'span6','placeholder'=>'Address')) }}
            <div class="controls">
            {{ Form::text('rink_addresse', $d ,array('class'=>'span6')) }}
            </div>
            </li>
          
            <li class="control-group">
            {{ Form::label('rink_seating_capacity', 'Seating Capacity:', 'Seating Capacity', '', array('class'=>'control-label'))}}
            <div class="controls">
            {{ Form::text('rink_seating_capacity',$rinks['rink_seating_capacity'],array('class'=>'span6')) }}
            </div>
            </li>
         	
            <li class="control-group">
            {{ Form::label('rink_change_rooms', 'No. of Change Rooms:','',array('class'=>'span6','id'=>'rink_change_rooms')) }}
            <div class="controls">
            {{ Form::text('rink_change_rooms',$rinks['rink_change_rooms'],array('class'=>'span6')) }}
            </div>
            </li>
        	
            <li class="control-group">
            {{ Form::label('rink_boardType', 'Board Type:','',array('class'=>'span6','id'=>'rink_boardType')) }}
            <div class="controls">
            {{ Form::text('rink_boardType',$rinks['rink_boardType'],array('class'=>'span6')) }}
            </div>
            </li>
         	
            <li class="control-group">
            {{ Form::label('rink_other', 'Other:', 'Other:', '', array('class'=>'control-label')) }}
            <div class="controls">
            {{ Form::text('rink_other',$rinks['rink_other'],array('class'=>'span6')) }}
            </div>
            </li>
                     	
            <li class="control-group">
            {{ Form::label('rink_homeTeams', 'Home Teams:','',array('class'=>'span6','placeholder'=>'Name')) }}
            <div class="controls">
            {{ Form::text('rink_homeTeams',$ho,array('class'=>'span6')) }}
         	  </div>
            </li>
            <li class="control-group">
            {{ Form::label('rink_highlights', 'Highlights:', 'Highlights', '', array('class'=>'control-label')) }}
            <div class="controls">
            {{ Form::text('rink_highlights',$rinks['rink_highlights'],array('class'=>'span6')) }}
         	  </div>
            </li>
            <li class="control-group">
            {{ Form::label('rink_history', 'History:', 'History', '', array('class'=>'control-label')) }}
            <div class="controls">
            {{ Form::text('rink_history',$rinks['rink_history'],array('class'=>'span6')) }}
         	  </div>
            </li>
            <li class="control-group">
            {{ Form::label('rink_opened_date', 'Opened:(date)', 'Opened(date)', '', array('class'=>'control-label'))}}
            <div class="controls">
            {{ Form::text('rink_opened_date',$rinks['rink_history'],array('class'=>'span6')) }}
          	</div>
            </li>
            <li class="control-group">
            {{ Form::label('rink_closed_date', 'Closed:(date)', 'Closed(date)', '', array('class'=>'control-label')) }}
            <div class="controls">
            {{ Form::text('rink_closed_date',$rinks['rink_closed_date'],array('class'=>'span6')) }}
          	</div>
            </li>
            <li class="control-group">
            {{ Form::label('rink_description', 'Information:')}}
            <div class="controls">
            {{ Form::textarea('rink_description',$rinks['rink_description'],array('class'=>'span6')) }}
         	  </div>
            </li>
            <li class="control-group">
            {{ Form::label('rink_layout_image', 'Layout Image:', 'Layout Image', '', array('class'=>'control-label')) }}
            <div class="controls">
            {{ Form::file('rink_layout_image', array('title' => 'rink_layout_image','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4)) }}
            {{Form::image('uploads/rinks_images/'.$img);}}
          	</div>
            </li>

                   {{ HTML::link('admin/teams','Back',array('class'=>'btn btn-success pull-right backbtn'))}}
            		

                  {{ Form::submit('Update', array('class'=>'btn btn-primary pull-right')) }}
                  </div>
                </ul>

  {{ Form::close() }}
  </div>
  </div>
  </div>
 
@stop
