@extends('layouts.admin')
@section('content')
{{ HTML::script('/assets/datepicker/js/bootstrap-datepicker.js') }} 
{{ HTML::script('/assets/datepicker/css/datepicker.css') }}  
<div id="main-content" class="container-fluid">

<div id="page-content" class="page-content">
<div class="row-fluid margin-top20">
<div class="col-xs-9 grider">
<div class="widget widget-simple">
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
              <li class="section-form">
            <h4>Add New Rink</h4>
            </li>
 
                   {{ Form::open(array('rink.create','Post', 'files' => true,'class'=>'form-horizontal'))  }}
                   {{ Form::token() }}
                   <li class="control-group">
                    {{ Form::label('title', 'Title', '', array('class'=>'control-label'))}}
                    <div class="controls">
                    {{ Form::text('title','',array('class'=>'span6','placeholder'=>'Rink title')) }}
                    </div>
                    </li>
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
                    <div class="fileupload fileupload-new pull-left" data-provides="fileupload" style="margin-bottom:0px;">
                                <div class="fileupload-new thumbnail" style="width: 50px; height: 50px;"> <img src="http://www.placehold.it/50x50/EFEFEF/AAAAAA" /> </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="width: 50px; height: 50px;"></div>
                                <span class="btn btn-file" style="vertical-align:top"> <span class="fileupload-new">Select image</span> <span class="fileupload-exists">Change</span>
                             {{ Form::file('rink_layout_image',array('title' => 'rink_layout_image','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4,'class'=>''))}}
                                </span> <a href="#" class="btn btn-red fileupload-exists" data-dismiss="fileupload" style="vertical-align:top">Remove</a> </div>
                         
                     </div>
                    </li>
                    <li class="control-group">
                    {{ Form::label('rink_opened_date', 'Open from', '', array('class'=>'control-label')) }}
                    <div class="controls">
                    {{ Form::text('rink_open_date_from','',array('class'=>'span6 datepicker')) }}
                     </div>
                    </li>

                    <li class="control-group">
                    {{ Form::label('rink_opened_date', 'Open till', '', array('class'=>'control-label')) }}
                    <div class="controls">
                    {{ Form::text('rink_open_date_to','',array('class'=>'span6 datepicker')) }}
                     </div>
                    </li>


                    <li class="control-group">
                    {{ Form::label('rink_closed_date', 'Closed from', '', array('class'=>'control-label')) }}
                    <div class="controls">
                    {{ Form::text('rink_close_date_from','',array('class'=>'span6 datepicker')) }}
                     </div>
                    </li>

                    <li class="control-group">
                    {{ Form::label('rink_closed_date', 'Closed till', '', array('class'=>'control-label')) }}
                    <div class="controls">
                    {{ Form::text('rink_close_date_to','',array('class'=>'span6 datepicker')) }}
                     </div>
                    </li>
                     <li class="span8 margin-bottom15">               
                  

                  {{ Form::submit('Submit', array('class'=>'btn btn-primary pull-right addbtnmargin')) }}   
                   {{ HTML::link('admin/rinks','Back',array('class'=>'btn btn-success pull-right backbtn'))}}
                         </li>       
                  {{ Form::close() }}
                 
                </ul>
           </div>  
         </div>
         </div>
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


