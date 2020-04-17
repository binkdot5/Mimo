<?php

namespace App\Http\Controllers;
use App\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Show the user dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $properties = Property::all();

        return view ('properties')->with('properties', $properties);
    }
}
