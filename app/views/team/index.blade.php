@extends('layouts.logout')
@section('content')
   <div id="main-content" class="container-fluid">

<div id="page-content" class="page-content">
<div class="row-fluid margin-top20">
<div class="col-xs-12 grider">
<div class="widget widget-simple">

           <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered margin-top15" id="companies" style="margin-bottom:15px;">
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
            <td>{{Form::image('uploads/teamImages/'.$team->team_logo, '', array('class'=>'imagewidth') )}}</td>
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
                <button class="btn">Details</button>
            </td>
        </tr>               
        
    @endforeach
    
    </tbody>
    </table>  

    {{ $teams->links() }}
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
@stop