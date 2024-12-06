<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log; // Import the Log facade
use App\Models\Property;


class AddpropertiesController extends Controller
{
    // Fetch all properties
    public function getAllProperties()
    {
        try {
            $properties = Property::all(); // Fetch all properties using Eloquent
            return response()->json(['properties' => $properties], 200);
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Error fetching properties: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred while fetching properties.'], 500);
        }
    }

    // Search properties based on user input
    public function search(Request $request)
    {
        try {
            $query = $request->input('search');

            // Query the database
            $properties = Property::where('address', 'LIKE', "%{$query}%")
                ->orWhere('neighborhood', 'LIKE', "%{$query}%")
                ->orWhere('city', 'LIKE', "%{$query}%")
                ->orWhere('zip_code', 'LIKE', "%{$query}%")
                ->get();

            return view('search-results', compact('properties'));
        } catch (\Exception $e) {
            Log::error('Error in search: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred during the search.'], 500);
        }
    }

    // Display all properties on the properties page
    public function index()
    {
        try {
            $properties = Property::paginate(10); // Fetch all properties
            return view('properties', compact('properties'));
        } catch (\Exception $e) {
            Log::error('Error loading properties page: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred while loading the properties page.'], 500);
        }
    }
}

