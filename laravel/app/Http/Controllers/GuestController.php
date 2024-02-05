<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index () 
    {
        return view ('guest.index');
    }

    public function menu () 
    {
        $products = Product::all();

        return view ('guest.menu', ["products" => $products]);
    }

    public function reserve () 
    {
        return view ('guest.reserve');
    }
}
