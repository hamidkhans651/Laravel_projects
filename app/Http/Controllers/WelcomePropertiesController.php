<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class WelcomePropertiesController extends Controller
{
    public function index()
    {
        $properties = Property::all(); // Fetch all properties
        return view('welcome', compact('properties')); // Pass $properties to the view
    }

    function search(Request $request ){
        $propertiesdata= Property::where('name','like',"%$request->search%")->get();
        return $propertiesdata;

    }


}
