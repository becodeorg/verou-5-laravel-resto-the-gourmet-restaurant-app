<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;
use App\Models\Table;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index ()
    {

    }

    public function create()
    {
        $tables = Table::all();
        return view("guest.reserve", ["tables" => $tables]);
    }

    public function store(ReservationRequest $request)
    {
        $name = $request->reservationName;
        $email = $request->reservationEmail;
        $date = $request->reservationDate;
        $time = $request->reservationTime;
        $table = $request->reservationTable;
        $notes = $request->reservationNotes;

        $dateTime = $date . ' ' . $time;
        $carbonDateTime = Carbon::parse($dateTime);
        $timestamp = $carbonDateTime;

        Reservation::create([
            'name' => $name,
            'email' => $email,
            'timestamp' => $timestamp,
            'table_id' => $table,
            'notes' => $notes
        ]);

        return redirect()->route("homeGuest");
    }
}
