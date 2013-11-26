
@foreach ($schedules as $schedule)
<iframe width='100%' height='100%' frameborder='0' src={{$schedule->schedule_sheet_link}}></iframe>


@endforeach
 