@extends('layouts.admin')
@section('content')
    <div class="container">
    <div class="col-xs-12">
        {{ HTML::link('admin/team/create','Add Team',array('class' => 'btn btn-success')) }}
    </div>

	<!-- <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered" id="companies">
    <thead>

        <tr>
        	<th>Team Logo</th>
            <th>Team Name</th>
            <th>Current Jersey</th>
            <th>Previous Jerseys</th>
            <th>President Name</th>
            <th>Head Coach</th>
            <th>Assistant Coach</th>
            <th>Time Keepers</th>
            <th>Medics</th>
            <th>Referees</th>
            <th>History</th>
            <th>Founded</th>
            <th>Disbanded</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
   
        <tr class="odd gradeX">
        @foreach($teams as $team)
            <td>{{Form::image('uploads/teamImages/'.$team->team_logo )}}</td>
            <td>{{ $team->team_name }}</td>


            <td>{{ $team->current_jersey }}</td>


            <td>{{ ($team->getPrevJerseys($team->id)); }}</td>
            <td>{{ $team->president_name }}</td>
            <td>{{ $team->head_coach }}</td>
            <td>{{ $team->assistant_coach }}</td>

            <td>{{ ($team->getTimeKeeper($team->id)); }}</td>


            <td>{{($team->getMedics($team->id));}}</td>


            <td>{{ ($team->getReferees($team->id));}}</td>

            <td>{{ $team->history }}</td>
            <td>{{ $team->founded }}</td>
            <td>{{ $team->disbanded }}</td>
            <td>
                <div class="btn-group">
                    <a href="{{URL::to('admin/team/'.$team->id.'/edit')}}" class="btn btn-mini" alt="Edit">
                        <i class="icon-edit"></i> Edit
                    </a>

                    <a href="{{URL::to('admin/team/'.$team->id.'/delete')}}" class="btn btn-mini" alt="Delete" onclick="return confirm('Are you sure?')">
                        <i class="icon-remove"></i> Delete
                    </a>
                </div>
            </td>
        </tr>-->
        
        <div class="col-xs-2 labellineheight txtalign">
        
        {{Form::image('uploads/teamImages/'.$team->team_logo, '',array('class'=>'profileimage') )}}
        <h4>Founded: <br /><span class="spancolor">{{ $team->founded }}</span></h4>
                 <h4>Disbanded: <br /><span class="spancolor">{{ $team->disbanded }}</span></h4>

        <div class="btn-group">
                    <a href="{{URL::to('admin/team/'.$team->id.'/edit')}}" class="btn btn-mini" alt="Edit">
                        <i class="icon-edit"></i> Edit
                    </a>

                    <a href="{{URL::to('admin/team/'.$team->id.'/delete')}}" class="btn btn-mini" alt="Delete" onclick="return confirm('Are you sure?')">
                        <i class="icon-remove"></i> Delete
                    </a>
                </div>

        </div>
        
         <div class="col-xs-10">
        <div class="col-xs-10 labellineheight">
        <h1>{{ $team->team_name }}</h1>
        </div>
        
         <div class="col-xs-10 colorh3">
                
                <h4>President Name:<span class="spancolor"> {{ $team->president_name }}</span></h4>
                
                </div>  
                
                <div class="col-xs-10 colorh3">
                
                <h4>Head Coach:<span class="spancolor"> {{ $team->head_coach }}</span></h4>
                
                </div>  
                
                 <div class="col-xs-10 colorh3">
                
                <h4>Assisstant Coach:<span class="spancolor"> {{ $team->assistant_coach }}</span></h4>
                
                </div> 
        
        <div class="col-xs-10 colorh3">
                
                <h4>Current Jersey:<span class="spancolor"> {{ $team->current_jersey }}</span></h4>
                
                </div>  
                
                <div class="col-xs-10 colorh3">
                
                <h4>Previous Jerseys:<span class="spancolor"> {{ ($team->getPrevJerseys($team->id)); }}</span></h4>
                
                </div>  
                
                <div class="col-xs-10 colorh3">
                
                <h4>Time Keepers:<span class="spancolor"> {{ ($team->getTimeKeeper($team->id)); }}</span></h4>
                
                </div>  
                
                 <div class="col-xs-10 colorh3">
                
                <h4>Team Medics:<span class="spancolor"> {{($team->getMedics($team->id));}}</span></h4>
                
                </div>  
                
                <div class="col-xs-10 colorh3">
                
                <h4>Referees:<span class="spancolor">{{ ($team->getReferees($team->id));}}</span></h4>
                
                </div>  
                
                 <div class="col-xs-6 colorh3">
                
                <h4 class="achievejustify">History:<br /><span class="spancolor spanfontsize"> {{ $team->history }}</span></h4>
                
                </div>  
                </div> 
                
        
    @endforeach
    
    </div>
@stop