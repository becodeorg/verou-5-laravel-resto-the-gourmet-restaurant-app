<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index ()
    {
        $reservations = Reservation::all();

        $events = [];

        foreach ($reservations as $reservation) {
            $event = [
                'title' => $reservation->name,
                'start' => $reservation->timestamp,
                'id' => $reservation->id,
                'notes' => $reservation->notes
            ];

            $events[] = $event;
        }
        return view('employee')->with('events', $events);
    }
    public function login (Request $request) 
    {
        $employeeName = $request->employeeName;
        $password = $request->employeePass;
        
        if (auth()->attempt(['name' => $employeeName, 'password' => $password])) {
            return redirect()->route('homeEmployee');
        } else {
            return back()->withErrors(['employeePass' => 'Invalid username or password.'])->withInput();
        }
    }

    public function logout () 
    {
        if (auth()->check()) auth()->logout();

        return redirect()->route('home');
    }
}