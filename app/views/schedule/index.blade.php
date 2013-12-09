
@extends('layouts.main')
@section('content')

<div id="page-content" class="page-content">
<div class="row-fluid margin-top20">
<div class="col-xs-12 grider">
<div class="widget widget-simple">
@foreach ($schedules as $schedule)
<iframe width='100%' height='550' frameborder='0' src={{$schedule->schedule_sheet_link}}></iframe>


@endforeach
</div>
</div>
</div>
</div>


 
@stop

@if($schedules->isEmpty())
{{ "No schedule added yet" }}
@else
@foreach ($schedules as $schedule)
 <iframe width='100%' height='100%' frameborder='0' src={{$schedule->schedule_sheet_link}}></iframe>
@endforeach
 @endif

