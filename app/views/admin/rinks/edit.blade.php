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
         {{ Form::open(array('url'=>'admin/rinks/'.$rinks['id'].'/edit','POST','files' => true))}}
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
             <tr class="odd gradeX">
            <tr>
            <td>
              
            {{ Form::label('rink_addresse', 'Addresses:') }}
            {{ Form::text('rink_addresse', $d ,array('class'=>'form-control')) }}
            </td>   
            <td>
            {{ Form::label('rink_seating_capacity', 'Seating Capacity:')}}
            {{ Form::text('rink_seating_capacity',$rinks['rink_seating_capacity'],array('class'=>'form-control')) }}
          </td>   
          </tr>
          
        <tr>
          <td>
            {{ Form::label('rink_change_rooms', 'No. of Change Rooms:') }}
            {{ Form::text('rink_change_rooms',$rinks['rink_change_rooms'],array('class'=>'form-control')) }}
          </td>
          <td>
            {{ Form::label('rink_boardType', 'Board Type:') }}
            {{ Form::text('rink_boardType',$rinks['rink_boardType'],array('class'=>'form-control')) }}
          </td>      
        </tr>
        
        <tr>
          <td>
            {{ Form::label('rink_other', 'Other:') }}
            {{ Form::text('rink_other',$rinks['rink_other'],array('class'=>'form-control')) }}
          </td>
          <td>
            {{ Form::label('rink_homeTeams', 'Home Teams:') }}
            {{ Form::text('rink_homeTeams',$ho,array('class'=>'form-control')) }}
          </td> 
        </tr>
        
        <tr>
          <td>
            {{ Form::label('rink_highlights', 'Highlights:') }}
            {{ Form::text('rink_highlights',$rinks['rink_highlights'],array('class'=>'form-control')) }}
          </td>
          <td>
            {{ Form::label('rink_history', 'History:') }}
            {{ Form::text('rink_history',$rinks['rink_history'],array('class'=>'form-control')) }}
          </td> 
        </tr>
        
        <tr>
          <td>
            {{ Form::label('rink_opened_date', 'Opened:(date)')}}
            {{ Form::text('rink_opened_date',$rinks['rink_history'],array('class'=>'form-control')) }}
          </td>
          <td>
            {{ Form::label('rink_closed_date', 'Closed:(date)') }}
            {{ Form::text('rink_closed_date',$rinks['rink_closed_date'],array('class'=>'form-control')) }}
          </td>
        </tr>
        
        <tr>
          <td>
            {{ Form::label('rink_description', 'Information:')}}
            {{ Form::textarea('rink_description',$rinks['rink_description'],array('class'=>'form-control')) }}
          </td>
          <td>
            {{ Form::label('rink_layout_image', 'Layout Image:') }}
            {{ Form::file('rink_layout_image', array('title' => 'rink_layout_image','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4)) }}
            {{Form::image('uploads/rinks_images/'.$img);}}
          </td>
        </tr>  
            <td>
                  {{ Form::submit('Update', array('class'=>'btn btn-primary span12 formz')) }}
            </td>
        </tr>

  {{ Form::close() }}
 </tbody>
    </table>
@stop
