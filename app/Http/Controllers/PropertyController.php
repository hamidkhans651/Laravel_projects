<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Category;

class PropertyController extends Controller
{
    public function index()
    {
        // Load the main view for properties, could be 'properties.index' Blade view
        return view('properties.index');
    }

    public function getCities()
    {
        // Fetch all cities from the database
        $cities = City::all();
        return response()->json($cities);
    }

    public function getCategories()
    {
        // Fetch all categories from the database
        $categories = Category::all();
        return response()->json($categories);
    }
}
