<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index () 
    {
        return view ('guest.index');
    }

    public function menu () 
    {
        return view ('guest.menu');
    }

    public function reserve () 
    {
        return view ('guest.reserve');
    }
}
