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
 
                   {{ Form::open(array('rink.create','Post', 'files' => true,'class'=>'form-horizontal'))  }}
                   {{ Form::token() }}
                   
                   <li class="control-group">
                    {{ Form::label('rink_addresse', 'Addresses', '', array('class'=>'control-label'))}}
                    <div class="controls">
                    {{ Form::text('rink_addresse','',array('class'=>'span6','placeholder'=>'Address')) }}
                    </div>
                    </li>
            
                    <li class="control-group">
                    {{ Form::label('rink_seating_capacity', 'Seating Capacity', '', array('class'=>'control-label')) }}
                    <div class="controls">
                    {{ Form::text('rink_seating_capacity','',array('class'=>'span6','id'=>'rink_seating_capacity')) }}
                     </div>
                    </li>

                      

                    <li class="control-group">
                    {{ Form::label('rink_change_rooms', 'No. of Change Rooms', '', array('class'=>'control-label')) }}
                    <div class="controls">
                    {{ Form::text('rink_change_rooms','',array('class'=>'span6','id'=>'rink_change_rooms')) }}
                     </div>
                    </li>
                     <li class="control-group">
                    {{ Form::label('rink_boardType', 'Board Type:', '', array('class'=>'control-label')) }}
                    <div class="controls">
                    {{ Form::text('rink_boardType','',array('class'=>'span6','id'=>'rink_boardType')) }}
                     </div>
                    </li>
                     <li class="control-group">
                    {{ Form::label('rink_homeTeams', 'Home Teams', '', array('class'=>'control-label')) }}
                    <div class="controls">
                    {{ Form::text('rink_homeTeams','',array('class'=>'span6','placeholder'=>'Name')) }}
                     </div>
                    </li>
                    <li class="control-group">
                    {{ Form::label('rink_other', 'Other:', '', array('class'=>'control-label')) }}
                    <div class="controls">
                    {{ Form::text('rink_other','',array('class'=>'span6','id'=>'rink_other')) }}
                     </div>
                    </li>
                    <li class="control-group">
                    {{ Form::label('rink_description', 'Information', '', array('class'=>'control-label')) }}
                    <div class="controls">
                    {{ Form::textarea('rink_description','',array('class'=>'span6','id'=>'rink_description')) }}
                     </div>
                    </li>
                    <li class="control-group">
                    {{ Form::label('rink_history', 'History', '', array('class'=>'control-label')) }}
                    <div class="controls">
                    {{ Form::textarea('rink_history','',array('class'=>'span6','id'=>'rink_history')) }}
                     </div>
                    </li>
                    <li class="control-group">
                    {{ Form::label('rink_highlights', 'Highlights', '', array('class'=>'control-label')) }}
                    <div class="controls">
                    {{ Form::text('rink_highlights','',array('class'=>'span6','id'=>'rink_highlights')) }}
                     </div>
                    </li>
                    <li class="control-group">
                    {{ Form::label('rink_layout_image', 'Layout Image', '', array('class'=>'control-label')) }}
                    <div class="controls">
                    {{ Form::file('rink_layout_image',array('title' => 'rink_layout_image','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4,'class'=>'span6'))}}
                     </div>
                    </li>
                    <li class="control-group">
                    {{ Form::label('rink_opened_date', 'Opened(date)', '', array('class'=>'control-label')) }}
                    <div class="controls">
                    {{ Form::text('rink_opened_date','',array('class'=>'span6 datepicker')) }}
                     </div>
                    </li>
                    <li class="control-group">
                    {{ Form::label('rink_closed_date', 'Closed(date)', '', array('class'=>'control-label')) }}
                    <div class="controls">
                    {{ Form::text('rink_closed_date','',array('class'=>'span6 datepicker')) }}
                     </div>
                    </li>
                     <li class="control-group">
                  {{ HTML::link('admin/rinks/create','Back',array('class'=>'btn btn-success'))}}
                  

                  {{ Form::submit('Submit', array('class'=>'btn btn-primary pull-right')) }}                
                  {{ Form::close() }}
                </ul>
           </div>  
         </div>
         </div>
         </div>
         
     <script >
         $('.datepicker').datepicker({

            'format': 'yyyy-mm-dd'
         })
  </script>
@stop


