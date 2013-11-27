@extends('layouts.admin')
@section('content')

<div class="well">
    @if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif
    </div>

  <div class="col-xs-7" style="float:none; margin:0 auto;">
    <div class="labellineheight">

         {{ Form::open(array('rink.create','Post', 'files' => true))  }}
              {{ Form::token() }}
            <div class="col-xs-6">
                    {{ Form::label('rink_addresse', 'Addresses') }}
                    {{ Form::text('rink_addresse','',array('class'=>'form-control','placeholder'=>'Address1, Address2')) }}
            </div>
            <div class="col-xs-6">
                    {{ Form::label('rink_seating_capacity', 'Seating Capacity') }}
                    {{ Form::text('rink_seating_capacity','',array('class'=>'form-control','id'=>'myId')) }}
             </div>
            
            
           

            <div class="col-xs-6">
                    {{ Form::label('rink_change_rooms', 'No. of Change Rooms') }}
                    {{ Form::text('rink_change_rooms','',array('class'=>'form-control','id'=>'myId')) }}
            </div>
            <div class="col-xs-6">
                    {{ Form::label('rink_boardType', 'Board Type:') }}
                    {{ Form::text('rink_boardType','',array('class'=>'form-control','id'=>'myId')) }}
             </div>
            
            <div class="col-xs-6">
                    {{ Form::label('rink_homeTeams', 'Home Teams') }}
                    {{ Form::text('rink_homeTeams','',array('class'=>'form-control','placeholder'=>'name1, name2')) }}
            </div>
            <div class="col-xs-6">
                    {{ Form::label('rink_other', 'Other:') }}
                    {{ Form::text('rink_other','',array('class'=>'form-control','id'=>'myId')) }}
            </div>
           

              <div class="col-xs-6">
                    {{ Form::label('rink_description', 'Information') }}
                    {{ Form::textarea('rink_description','',array('class'=>'form-control','id'=>'myId')) }}
            </div>
             <div class="col-xs-6">
                    {{ Form::label('rink_history', 'History') }}
                    {{ Form::textarea('rink_history','',array('class'=>'form-control','id'=>'myId')) }}
             </div>

            <div class="col-xs-6">
                    {{ Form::label('rink_highlights', 'Highlights') }}
                    {{ Form::text('rink_highlights','',array('class'=>'form-control','id'=>'myId')) }}
            </div>

            <div class="col-xs-6">
                    {{ Form::label('rink_opened_date', 'Opened(date)') }}
                    {{ Form::text('rink_opened_date','',array('class'=>'form-control datepicker')) }}
            </div>
            <div class="col-xs-6">
                    {{ Form::label('rink_closed_date', 'Closed(date)') }}
                    {{ Form::text('rink_closed_date','',array('class'=>'form-control datepicker')) }}
              </div>
            
            <div class="col-xs-6">
                    {{ Form::label('rink_layout_image', 'Layout Image') }}
                    {{ Form::file('rink_layout_image',array('title' => 'rink_layout_image','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4,'class'=>'form-control'))}}
            </div> 
            <div class="col-xs-6">
                  {{ HTML::link('admin/rinks/create','Back',array('class'=>'btn btn-success'))}}
                  {{ Form::submit('Submit', array('class'=>'btn btn-primary span12 formz')) }}
                  
                  {{ Form::close() }}
           </div>
         </div>
     <script >
         $('.datepicker').datepicker({

            'format': 'yyyy-mm-dd'
         })
  </script>
@stop


