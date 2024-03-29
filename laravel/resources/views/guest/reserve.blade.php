@extends('layout.guest.layout')

@section('title')
    {{ env('APP_NAME') . ' - Reserve' }}
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let dateInput = document.getElementById('reservationDate');
        dateInput.addEventListener('change', function () {
            getFreeTables();
        });

        let hourInput = document.getElementById('reservationTime');
        hourInput.addEventListener('change', function () {
            getFreeTables();
        });

        const generateOptions = (freeTables) => {
            console.log(freeTables);
            let selectInput = document.getElementById('reservationTable');

            selectInput.innerHTML = "";
            freeTables.forEach(table => {
                let option = document.createElement('option');
                option.value = table.id;
                option.textContent = "Table " + table.id + ": " + table.seats + " seats";

                selectInput.appendChild(option);
            });
        }

        const getFreeTables = () => {
                
            let dateInput = document.getElementById('reservationDate');
            let hourInput = document.getElementById('reservationTime');

            let reservations = @json($reservations);
            let tables =  @json($tables);
            console.log(reservations);
            console.log(tables);

            const reservationDate = dateInput.value;
            const reservationTime = hourInput.value;
            const reservationTableSelect = document.getElementById('reservationTable');
                
            let bookedTables = [];
            reservations.forEach(reservation => {
                let date = new Date(reservation.timestamp);
                let today = new Date(reservationDate);

                if (date.toISOString().split('T')[0] == today.toISOString().split('T')[0]) {
                    let date = new Date(reservation.timestamp);
                    let hours = date.getHours();
                    let minutes = date.getMinutes();

                    let formattedTime = hours.toString().padStart(2, '0') + ':' + minutes.toString().padStart(2, '0');

                    if (formattedTime == reservationTime)
                        bookedTables.push(reservation.table);
                }
            });

            let freeTables = tables.filter(table => !bookedTables.some(bookedTable => bookedTable.id === table.id));

            generateOptions(freeTables)
        }

        getFreeTables();
    });
</script>
@endsection

@section('content')
    <main class='reservationWrapper'>
        <form class='reservationForm' action="{{ route('reservations.store') }}" method="POST">
            @csrf
            <label for="reservationName">Name:</label><br>
            <input type="text" name="reservationName" class="reservation-form-fields reservationHalfWidth" id="reservationName" class="reservationHalfWidth" value="{{ old('reservationName') }}"><br>
            @if($errors->has('reservationName'))
                <p>{{ $errors->first('reservationName') }}</p>
            @endif
            <label for="reservationEmail">Email:</label><br>
            <input type="email" name="reservationEmail" class="reservation-form-fields reservationHalfWidth" id="reservationEmail" class="reservationHalfWidth" value="{{ old('reservationEmail') }}"><br>
            @if($errors->has('reservationEmail'))
                <p>{{ $errors->first('reservationEmail') }}</p>
            @endif
            <label for="reservationDate">Date:</label><br>
            <input type="date" name="reservationDate" class="reservation-form-fields" id="reservationDate" min="{{ date('Y-m-d') }}" value="{{ date('Y-m-d') }}"><br>
            @if($errors->has('reservationDate'))
                <p>{{ $errors->first('reservationDate') }}</p>
            @endif
            <label for="reservationTime">Hour:</label><br>
            <select name="reservationTime" class="reservation-form-fields" id="reservationTime">
                <option value="18:00" {{ old('reservationTime') == "18:00" ? 'selected' : '' }}>18:00</option>
                <option value="19:30" {{ old('reservationTime') == "19:30" ? 'selected' : '' }}>19:30</option>   
                <option value="21:00" {{ old('reservationTime') == "21:00" ? 'selected' : '' }}>21:00</option> 
            </select><br>
            @if($errors->has('reservationTime'))
                <p>{{ $errors->first('reservationTime') }}</p>
            @endif
            <label for="reservationTable">Table:</label><br>
            <select name="reservationTable" class="reservation-form-fields" id="reservationTable">
            </select><br>
            @if($errors->has('reservationTable'))
                <p>{{ $errors->first('reservationTable') }}</p>
            @endif
            <label for="reservationNotes">Notes:</label><br>
            <textarea name="reservationNotes" class="reservation-form-fields" id="reservationNotes" cols="30" rows="10" placeholder="Add some notes if you have some..">{{ old('reservationNotes') }}</textarea><br>
            @if($errors->has('reservationNotes'))
                <p>{{ $errors->first('reservationNotes') }}</p>
            @endif
            <input class="button" type="submit" value="Make Reservation">
        </form>
    </main>
@endsection