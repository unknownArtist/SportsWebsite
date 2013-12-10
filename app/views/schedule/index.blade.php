@extends('layouts.main')
@section('content')

<div id="page-content" class="page-content">
<div class="row-fluid margin-top20">
<div class="col-xs-12 grider">
<div class="widget widget-simple">


@if($schedules->isEmpty())
<div style="padding:200px 0 280px 0;">
<h3 style="text-align:center;">No schedule added yet</h3>
</div>
@else
@foreach ($schedules as $schedule)
 <iframe width='100%' height='550' frameborder='0' src={{$schedule->schedule_sheet_link}}></iframe>
@endforeach
 @endif

</div>
</div>
</div>
</div>




 
@stop



