@extends('layouts.main')
@section('content')
<div class="container">
<div class="labellineheight">
    @if ($errors->any())
    <ul style="color:red;">
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif
    </div>

   
        <div class="col-xs-7" style="float:none; margin:0 auto;">
    <div class="labellineheight">
         {{ Form::open(array('url'=>'profile/'.$profiles['id'].'/edit','POST','files' => true))}}
        
  				 <div class="col-xs-6">
              {{ Form::label('team', 'Teams') }}
              {{Form::select('team' , $teams, '', array('class'=>'form-control'))}}
         		</div>
			 <div class="col-xs-6">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name',$profiles['name'],array('class'=>'form-control')) }}
           </div>
            <div class="col-xs-6">
            {{ Form::label('player_nickname', 'NickName:') }}
            {{ Form::text('player_nickname',$profiles['player_nickname'],array('class'=>'form-control')) }}
         	</div>
             <div class="col-xs-6">
            {{ Form::label('age', 'Age:') }}
            {{ Form::text('age',$profiles['age'],array('class'=>'form-control')) }}
         	</div>
             <div class="col-xs-6">
            {{ Form::label('weight', 'Weight:')}}
            {{ Form::text('weight',$profiles['weight'],array('class'=>'form-control')) }}
        	</div>
             <div class="col-xs-6">
            {{ Form::label('height', 'Height' )}}
            {{ Form::text('height',$profiles['height'],array('class'=>'form-control')) }}
         	</div>
             <div class="col-xs-6">
            {{ Form::label('position', 'Position')}}
            {{ Form::text('position',$profiles['position'],array('class'=>'form-control')) }}
         	</div>
             <div class="col-xs-6">
            {{ Form::label('shoots', 'Shoots')}}
            {{ Form::text('shoots',$profiles['shoots'],array('class'=>'form-control')) }}
       		</div>
            <div class="col-xs-6">
            {{ Form::label('achievements', 'Achievements') }}
            {{ Form::textarea('achievements',$profiles['achievements'],array('class'=>'form-control txtareaheight')) }}
         	</div>
             <div class="col-xs-6">
            {{ Form::label('statistic', 'Statistics')}}
            {{ Form::text('statistic',$profiles['statistic'],array('class'=>'form-control')) }}
        	</div>
             <div class="col-xs-6">
            {{ Form::label('current_teams', 'Current teams')}}
            {{ Form::text('current_teams',$profiles['current_teams'],array('class'=>'form-control')) }}
         	</div>
             <div class="col-xs-6">
            {{ Form::label('previous_teams', 'Previous Teams')}}
            {{ Form::text('previous_teams',$profiles['previous_teams'],array('class'=>'form-control')) }}
         	</div>
             
             <div class="col-xs-6">
             {{ Form::label('userprofileimage', 'Choose Your Picture') }}
            {{ Form::file('player_profile_photos', array('title' => 'player_profile_photos','type' => 'image','naming' => 'random','length' => 20, 'size_limit' => 4, 'class'=>'form-control')) }}
         	</div>
            
                   <div class="col-xs-6">
                  {{ HTML::link('profile',"Back",array('class'=>'btn btn-success'))}}
       				</div>
                     <div class="col-xs-6">
                  {{ Form::submit('Update', array('class'=>'btn btn-primary span12 formz pull-right')) }}
                  </div>
  {{ Form::close() }}
  
  </div>
  </div>
  </div>
    
@stop