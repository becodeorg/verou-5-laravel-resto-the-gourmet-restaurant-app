<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index ()
    {
        return view('employee');
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