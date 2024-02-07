@extends('layout.employee.layout')

@section('title')
    {{ env('APP_NAME') . ' - Edit Reservation' }}
@endsection

@section('content')
    <main class="reservationWrapper">
        <form class='reservationForm' action="{{ route('reservations.update', $reservation->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="reservationName">Name:</label><br>
            <input type="text" name="reservationName" id="reservationName" value="{{ $reservation->name }}"><br>
            <label for="reservationEmail">Email:</label><br>
            <input type="email" name="reservationEmail" id="reservationEmail" value="{{ $reservation->email }}"><br>
            <label for="reservationDate">Date:</label><br>
            <input type="date" name="reservationDate" id="reservationDate" value="{{ $date }}"><br>
            <label for="reservationTime">Hour:</label><br>
            <select name="reservationTime" id="reservationTime">
                <option value="18:00" {{ $time == "18:00" ? 'selected' : '' }}>18:00</option>
                <option value="18:30" {{ $time == "18:30" ? 'selected' : '' }}>18:30</option>  
                <option value="19:00" {{ $time == "19:00" ? 'selected' : '' }}>19:00</option>  
                <option value="19:30" {{ $time == "19:30" ? 'selected' : '' }}>19:30</option>  
                <option value="20:00" {{ $time == "20:00" ? 'selected' : '' }}>20:00</option>  
                <option value="20:30" {{ $time == "20:30" ? 'selected' : '' }}>20:30</option>  
                <option value="21:00" {{ $time == "21:00" ? 'selected' : '' }}>21:00</option>  
                <option value="21:30" {{ $time == "21:30" ? 'selected' : '' }}>21:30</option>  
                <option value="22:00" {{ $time == "22:00" ? 'selected' : '' }}>22:00</option>  
            </select><br>
            <label for="reservationTable">Table:</label><br>
            <select name="reservationTable" id="reservationTable">
                @foreach ($tables as $table)
                    <option value="{{ $table->id }}" {{ $reservation->table_id === $table->id ? 'selected' : '' }}>Table {{ $table->id }}: {{ $table->seats }} seats</option>
                @endforeach
            </select><br>
            <label for="reservationNotes">Notes:</label><br>
            <textarea name="reservationNotes" id="reservationNotes" cols="30" rows="10" placeholder="Add some notes if you have some..">{{ $reservation->notes }}</textarea><br>
            <input class="button" type="submit" value="Edit Reservation">
        </form>
        <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input class="button" type="submit" value="Cancel Reservation">
        </form>
    </main>
@endsection