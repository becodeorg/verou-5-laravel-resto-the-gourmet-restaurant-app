<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Table;
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

    public function store()
    {
        return redirect()->route("homeGuest");
    }
}
