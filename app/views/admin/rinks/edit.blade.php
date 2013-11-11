@extends('layouts.main')
@section('content')
	
	<h1>Index</h1>
	<style>
    #adminText {
      margin-left: 500px;
    }
    #loginForm {
      margin-left: 500px;
    }
    .formz {
      margin-top: 4px;
    }
		.well {
		  
		}
    .form-control {
      width: 250px;
    }
	</style>
<h2 id="adminText">Rinks Edit</h2>
   <div class="well" >
        <div id="loginForm">
         {{ Form::open(array('url'=>'admin/rinks/',$rinks['id'],'/edit','POST','files' => true))}}
              {{ Form::token() }}

            {{ Form::label('rink_addresse', 'Addresses:', array('class'=>'form-control formz','placeholder' => 'rink_addresse')) }}
            {{ Form::text('rink_addresse',$rinks['rink_addresse']) }}

            {{ Form::label('rink_seating_capacity', 'Seating Capacity:', array('class'=>'form-control formz','placeholder' => 'rink_seating_capacity')) }}
            {{ Form::text('rink_seating_capacity',$rinks['rink_seating_capacity']) }}

            {{ Form::label('rink_change_rooms', 'No. of Change Rooms:', array('class'=>'form-control formz','placeholder' => 'rink_change_rooms')) }}
            {{ Form::text('rink_change_rooms',$rinks['rink_change_rooms']) }}

            {{ Form::label('rink_boardType', 'Board Type:', array('class'=>'form-control formz','placeholder' => 'rink_boardType')) }}
            {{ Form::text('rink_boardType',$rinks['rink_boardType']) }}

            {{ Form::label('rink_other', 'Other:', array('class'=>'form-control formz','placeholder' => 'rink_other')) }}
            {{ Form::text('rink_other',$rinks['rink_other']) }}

            {{ Form::label('rink_homeTeams', 'Home Teams:', array('class'=>'form-control formz','placeholder' => 'rink_homeTeams')) }}
            {{ Form::text('rink_homeTeams',$rinks['rink_homeTeams']) }}

            {{ Form::label('rink_highlights', 'Highlights:', array('class'=>'form-control formz','placeholder' => 'rink_highlights')) }}
            {{ Form::text('rink_highlights',$rinks['rink_highlights']) }}

            {{ Form::label('rink_history', 'History:', array('class'=>'form-control formz','placeholder' => 'rink_history')) }}
            {{ Form::text('rink_history',$rinks['rink_history']) }}

            {{ Form::label('rink_opened_date', 'Opened:(date)', array('class'=>'form-control formz','placeholder' => 'rink_opened_date')) }}
            {{ Form::text('rink_opened_date',$rinks['rink_history']) }}

            {{ Form::label('rink_closed_date', 'Closed:(date)', array('class'=>'form-control formz','placeholder' => 'rink_closed_date')) }}
            {{ Form::text('rink_closed_date',$rinks['rink_closed_date']) }}

            {{ Form::label('rink_description', 'Information:', array('class'=>'form-control formz','placeholder' => 'rink_description')) }}
            {{ Form::textarea('rink_description',$rinks['rink_description']) }}

            {{ Form::label('rink_layout_image', 'Layout Image:', array('class'=>'form-control formz','placeholder' => 'rink_layout_image')) }}
            {{ Form::file('rink_layout_image', array('title' => 'rink_layout_image','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4)) }}

                  {{ Form::submit('Submit', array('class'=>'btn btn-primary span12 formz')) }}

        </div>

  </div>

  {{ Form::close() }}

@stop
