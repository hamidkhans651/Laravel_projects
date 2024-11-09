<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Property;

class WelcomePropertiesController extends Controller
{

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
        // Fetch properties for the welcome page
        $welproperties = Property::all(); // Limit to 3 properties if desired

        // Debugging line to confirm if properties are fetched
        // dd($properties); // This will dump the properties and stop execution

        return view('welcome', compact('properties'));
        // Pass properties to the 'welcome' view
        return view('welcome', compact('properties'));
    }
}
