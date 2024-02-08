@extends('layout.guest.layout')

@section('title')
    {{ env('APP_NAME') . ' - Reserve' }}
@endsection

@section('scripts')

@endsection

@section('content')
    <main class='reservationWrapper'>
        <form class='reservationForm' action="{{ route('reservations.store') }}" method="POST">
            @csrf
            <label for="reservationName">Name:</label><br>
            <input type="text" name="reservationName" id="reservationName" class="reservationHalfWidth"><br>
            <label for="reservationEmail">Email:</label><br>
            <input type="email" name="reservationEmail" id="reservationEmail" class="reservationHalfWidth"><br>
            <label for="reservationDate">Date:</label><br>
            <input type="date" name="reservationDate" id="reservationDate" min="{{ date('Y-m-d') }}" value="{{ date('Y-m-d') }}"><br>
            <label for="reservationTime">Hour:</label><br>
            <select name="reservationTime" id="reservationTime">
                <option value="18:00">18:00</option>
                <option value="18:30">18:30</option>  
                <option value="19:00">19:00</option>  
                <option value="19:30">19:30</option>  
                <option value="20:00">20:00</option>  
                <option value="20:30">20:30</option>  
                <option value="21:00">21:00</option>  
                <option value="21:30">21:30</option>  
                <option value="22:00">22:00</option>  
            </select><br>
            <label for="reservationTable">Table:</label><br>
            <select name="reservationTable" id="reservationTable">
            </select><br>
            <label for="reservationNotes">Notes:</label><br>
            <textarea name="reservationNotes" id="reservationNotes" cols="30" rows="10" placeholder="Add some notes if you have some.."></textarea><br>
            <input class="button" type="submit" value="Make Reservation">
        </form>
    </main>
    <script defer>
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
    </script>
@endsection