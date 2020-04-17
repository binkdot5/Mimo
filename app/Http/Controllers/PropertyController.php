<?php

namespace App\Http\Controllers;
use App\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Show the view that diplays all properties.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $properties = Property::all();

        return view ('properties')->with('properties', $properties);
    }

    /**
     * Display the specified property.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Properties $properties)
    {
        $properties = Property::get()->find($property->id);
        $property_id = $property->id;
        
        return view('landlord.propertiesSingle', compact('property'));
    }
}
