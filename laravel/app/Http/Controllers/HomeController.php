<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::where('email', "kelsey@thegourmet.com")->first();

        if (!$user) {
            User::create([
                'name' => 'Kelsey',
                'email' => 'kelsey@thegourmet.com',
                'password' => Hash::make('opensesame')
            ]);
        } 
        return view('welcome');
    }
}
