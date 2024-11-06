<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Property;


class PropertyController extends Controller
{
    // Method to show all properties
    // public function index()
    // {
    //     $properties = Property::all(); // Fetch all properties
    //     return view('properties', compact('properties'));
    // }

    // // Method to show a single property by ID
    // public function show($id)
    // {
    //     $property = Property::findOrFail($id); // Fetch property by ID
    //     return view('property-details', compact('property'));
    // }

    function Property()
    {
        return DB::select('select * from Properties');
    }



    function search(Request $request)
    {
        // Example search logic based on user input
        $query = $request->input('search'); // Retrieve the search query from the form
        $properties = DB::table('Properties')
            ->where('address', 'LIKE', "%{$query}%")
            ->orWhere('neighborhood', 'LIKE', "%{$query}%")
            ->orWhere('city', 'LIKE', "%{$query}%")
            ->orWhere('zip_code', 'LIKE', "%{$query}%")
            ->get();

        // Return a view with the search results
        return view('search-results', compact('properties'));
    }

    public function index()
    {
        $properties = Property::all(); // Fetch all properties
        return view('properties', compact('properties')); // Use 'properties' instead of 'properties.index'
    }
}    
