@extends('layout.employee.layout')

@section('title')
    {{ env('APP_NAME') . ' - Home' }}
@endsection

@section('scripts')
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js'></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        eventTimeFormat: {
            hour: '2-digit',
            minute: '2-digit',
            omitZeroMinutes: 'false',
            hour12: false
        },
        conteintHeight: "auto",
        eventClick: function(info) {
            let locationString = '{{ route("reservations.edit", ":reservationId") }}';
            locationString = locationString.replace(":reservationId", info.event.id);
            window.location.href = locationString;
        },
        events: @json($events)
    });
    calendar.render();
  });

</script>
@endsection

@section('content')
    <main>
        <div id='calendar'></div>
    </main>
@endsection