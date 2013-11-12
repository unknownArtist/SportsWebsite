@extends('layouts.admin')
@section('content')

<div class="well">
    @if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif
    </div>

   <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered" id="companies">
    <thead>
    <tbody>
         {{ Form::open(array('rink.create','Post', 'files' => true))  }}
              {{ Form::token() }}
        <tr class="odd gradeX">
            <tr>
            <td>
            {{ Form::label('rink_addresse', 'Addresses:', array('class'=>'form-control formz','placeholder' => 'rink_addresse')) }}
            {{ Form::text('rink_addresse') }}
            </td>   
            <td>
            {{ Form::label('rink_seating_capacity', 'Seating Capacity:', array('class'=>'form-control formz','placeholder' => 'rink_seating_capacity')) }}
            {{ Form::text('rink_seating_capacity') }}
          </td>
          
          </tr>
          <tr>

          <td>

            {{ Form::label('rink_change_rooms', 'No. of Change Rooms:', array('class'=>'form-control formz','placeholder' => 'rink_change_rooms')) }}
            {{ Form::text('rink_change_rooms') }}
          </td>
          <td>
            {{ Form::label('rink_boardType', 'Board Type:', array('class'=>'form-control formz','placeholder' => 'rink_boardType')) }}
            {{ Form::text('rink_boardType') }}
          </td>
          
          </tr>
          <tr>
          <td>
            {{ Form::label('rink_other', 'Other:', array('class'=>'form-control formz','placeholder' => 'rink_other')) }}
            {{ Form::text('rink_other') }}
          </td>
          <td>
            {{ Form::label('rink_homeTeams', 'Home Teams:', array('class'=>'form-control formz','placeholder' => 'rink_homeTeams')) }}
            {{ Form::text('rink_homeTeams') }}
          </td>
          
          </tr>
          <tr>
          <td>
            {{ Form::label('rink_highlights', 'Highlights:', array('class'=>'form-control formz','placeholder' => 'rink_highlights')) }}
            {{ Form::text('rink_highlights') }}
          </td>
          <td>
            {{ Form::label('rink_history', 'History:', array('class'=>'form-control formz','placeholder' => 'rink_history')) }}
            {{ Form::text('rink_history') }}
          </td>
          
          </tr>
          <tr>
          <td>
            {{ Form::label('rink_opened_date', 'Opened:(date)', array('class'=>'form-control formz','placeholder' => 'rink_opened_date')) }}
            {{ Form::text('rink_opened_date') }}
          </td>
          <td>
            {{ Form::label('rink_closed_date', 'Closed:(date)', array('class'=>'form-control formz','placeholder' => 'rink_closed_date')) }}
            {{ Form::text('rink_closed_date') }}
          </td>
          
          </tr>
          <tr>
          <td>
            {{ Form::label('rink_description', 'Information:', array('class'=>'form-control formz','placeholder' => 'rink_description')) }}
            {{ Form::textarea('rink_description') }}
          </td>
          <td>
            {{ Form::label('rink_layout_image', 'Layout Image:', array('class'=>'form-control formz','placeholder' => 'rink_layout_image')) }}
            {{ Form::file('rink_layout_image', array('title' => 'rink_layout_image','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4)) }}
          </td>
              </tr>  
            <td>
                  {{ Form::submit('Submit', array('class'=>'btn btn-primary span12 formz')) }}

        </td>
        </tr>

  {{ Form::close() }}
 </tbody>
    </table>
@stop

