<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class dashboardcontroller extends Controller
{
    public function index()
    {
        $properties = Property::all(); // Fetch all properties
        return view('dashboard', compact('properties')); // Pass $properties to the view
    }
}
