@extends('layout.guest.layout')

@section('title')
    {{ env('APP_NAME') . ' - Reserve' }}
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
            <input type="date" name="reservationDate" id="reservationDate"><br>
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
                @foreach ($tables as $table)
                    <option value="{{ $table->id }}">{{ $table->id }}: {{ $table->seats }} seats</option>
                @endforeach
            </select><br>
            <label for="reservationNotes">Notes:</label><br>
            <textarea name="reservationNotes" id="reservationNotes" cols="30" rows="10" placeholder="Add some notes if you have some.."></textarea><br>
            <input class="button" type="submit" value="Make Reservation">
        </form>
    </main>
@endsection