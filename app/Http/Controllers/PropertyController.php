<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    // Method to show all properties
    public function index()
    {
        $properties = Property::all(); // Fetch all properties
        return view('properties', compact('properties'));
    }

    // Method to show a single property by ID
    public function show($id)
    {
        $property = Property::findOrFail($id); // Fetch property by ID
        return view('property-details', compact('property'));
    }
}
