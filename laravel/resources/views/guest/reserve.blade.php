@extends('layout.guest.layout')

@section('title')
    {{ env('APP_NAME') . ' - Reserve' }}
@endsection

@section('content')
    <main>
        <form action="{{ route('reservations.store') }}">
            <label for="reservationName">Name:</label><br>
            <input type="text" name="reservationName" id="reservationName"><br>
            <label for="reservationEmail">Email:</label><br>
            <input type="email" name="reservationEmail" id="reservationEmail"><br>
            <label for="reservationDate">Date:</label><br>
            <input type="date" name="reservationDate" id="reservationDate"><br>
            <label for="reservationHour">Hour:</label><br>
            <input type="time" name="reservationHour" id="reservationHour"><br>
            <label for="reservationTable">Table:</label><br>
            <select name="reservationTable" id="reservationTable">
                @foreach ($tables as $table)
                    <option value="{{ $table->id }}">Table: {{ $table->seats }} seats</option>
                @endforeach
            </select>
            <label for="reservationNotes">Notes:</label><br>
            <textarea name="reservationNotes" id="reservationNotes" cols="30" rows="10" placeholder="Add some notes if you have some.."></textarea><br>
            <input type="submit" value="Make Reservation">
        </form>
    </main>
@endsection