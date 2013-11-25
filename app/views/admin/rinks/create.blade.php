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
      <tr>
            <tr>

            <td>
            {{ Form::label('rink_addresse', 'Addresses:', array('class'=>'form-control formz')) }}
            {{ Form::text('rink_addresse','',array('class'=>'form-control','placeholder'=>'Address1, Address2')) }}
            </td>   
            <td>
            {{ Form::label('rink_seating_capacity', 'Seating Capacity:', array('class'=>'form-control formz','placeholder' => 'rink_seating_capacity')) }}
            {{ Form::text('rink_seating_capacity') }}
          </td>

                <td>
                    {{ Form::label('rink_addresse', 'Addresses:', array('class'=>'form-control formz','placeholder' => 'rink_addresse')) }}
                    {{ Form::text('rink_addresse','',array('class'=>'form-control','id'=>'myId')) }}
                </td>
            </tr>
            <tr>  
                <td>
                    {{ Form::label('rink_seating_capacity', 'Seating Capacity:', array('class'=>'form-control formz','placeholder' => 'rink_seating_capacity')) }}
                    {{ Form::text('rink_seating_capacity','',array('class'=>'form-control','id'=>'myId')) }}
                </td>

          
            </tr>

            <tr>
                <td>
                    {{ Form::label('rink_change_rooms', 'No. of Change Rooms:', array('class'=>'form-control formz','placeholder' => 'rink_change_rooms')) }}
                    {{ Form::text('rink_change_rooms','',array('class'=>'form-control','id'=>'myId')) }}
                </td>
            </tr>
            <tr>   
                <td>
                    {{ Form::label('rink_boardType', 'Board Type:', array('class'=>'form-control formz','placeholder' => 'rink_boardType')) }}
                    {{ Form::text('rink_boardType','',array('class'=>'form-control','id'=>'myId')) }}
                </td>
            </tr>


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
            {{ Form::text('rink_homeTeams','',array('class'=>'form-control','placeholder'=>'name1, name2')) }}
          </td>

            <tr>
                <td>
                    {{ Form::label('rink_other', 'Other:', array('class'=>'form-control formz','placeholder' => 'rink_other')) }}
                    {{ Form::text('rink_other','',array('class'=>'form-control','id'=>'myId')) }}
                </td>
            </tr>
            <tr>   
                <td>
                    {{ Form::label('rink_homeTeams', 'Home Teams:', array('class'=>'form-control formz','placeholder' => 'rink_homeTeams')) }}
                    {{ Form::text('rink_homeTeams','',array('class'=>'form-control','id'=>'myId')) }}
                </td>

          
            </tr>

            <tr>
                <td>
                    {{ Form::label('rink_highlights', 'Highlights:', array('class'=>'form-control formz','placeholder' => 'rink_highlights')) }}
                    {{ Form::text('rink_highlights','',array('class'=>'form-control','id'=>'myId')) }}
                </td>
            </tr>
            <tr>   
                <td>
                    {{ Form::label('rink_history', 'History:', array('class'=>'form-control formz','placeholder' => 'rink_history')) }}
                    {{ Form::text('rink_history','',array('class'=>'form-control','id'=>'myId')) }}
                </td>
          
            </tr>

            <tr>
                <td>
                    {{ Form::label('rink_opened_date', 'Opened:(date)', array('class'=>'form-control formz','placeholder' => 'rink_opened_date')) }}
                    {{ Form::text('rink_opened_date','',array('class'=>'form-control','id'=>'myId')) }}
                </td>
            </tr>
            <tr>   
                <td>
                    {{ Form::label('rink_closed_date', 'Closed:(date)', array('class'=>'form-control formz','placeholder' => 'rink_closed_date')) }}
                    {{ Form::text('rink_closed_date','',array('class'=>'form-control','id'=>'myId')) }}
                </td>
          
            </tr>

            <tr>
                <td>
                    {{ Form::label('rink_description', 'Information:', array('class'=>'form-control formz','placeholder' => 'rink_description')) }}
                    {{ Form::textarea('rink_description','',array('class'=>'form-control','id'=>'myId')) }}
                </td>
            </tr>
            <tr>  
                <td>
                    {{ Form::label('rink_layout_image', 'Layout Image:', array('class'=>'form-control formz','placeholder' => 'rink_layout_image')) }}
                    {{ Form::file('rink_layout_image', array('title' => 'rink_layout_image','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4)) }}
                </td>
            </tr>  
                <td>
                  {{ Form::submit('Submit', array('class'=>'btn btn-primary span12 formz')) }}
                  {{ HTML::link('admin/rinks/create','Back',array('class'=>'btn btn-success','style'=>'margin-top:;'))}}

                </td>
        </tr>

  {{ Form::close() }}
 </tbody>
    </table>
@stop

