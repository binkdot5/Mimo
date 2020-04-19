<?php

namespace App\Http\Controllers;
use App\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::all();

        return view ('properties.index')->with('properties', $properties);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('properties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $property = new Property;
        $property->title = $request->input('title');
        $property->description = $request->input('description');
        $property->address = $request->input('address');
        $property->category = $request->input('category');
        $property->bed_room = $request->input('bed_room');
        $property->bath_room = $request->input('bath_room');
        $property->active = $request->input('active');
        $property->utility_heating = $request->input('utility_heating');
        $property->utility_patio = $request->input('utility_patio');
        $property->kitchen_fridge = $request->input('kitchen_fridge');
        $property->kitchen_freezer = $request->input('kitchen_freezer');
        $property->kitchen_oven = $request->input('kitchen_oven');
        $property->kitchen_stove = $request->input('kitchen_stove');
        $property->kitchen_potspans = $request->input('kitchen_potspans');
        $property->kitchen_microwave = $request->input('kitchen_microwave');
        $property->kitchen_dishwasher = $request->input('kitchen_dishwasher');
        $property->bathroom_shower = $request->input('bathroom_shower');
        $property->bathroom_sink = $request->input('bathroom_sink');
        $property->bathroom_bathtub = $request->input('bathroom_bathtub');
        $property->bathroom_window = $request->input('bathroom_window');
        $property->user_id = auth()->user()->id;
        $property->save();

        return redirect('/properties')->with('success', 'Property successfully registered!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::find($id);
        
        return view('properties.show')->with('property', $property);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = Property::find($id);

        return view('properties.edit')->with('property', $property);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $property = Property::find($id);
        $property->title = $request->input('title');
        $property->description = $request->input('description');
        $property->address = $request->input('address');
        $property->category = $request->input('category');
        $property->bed_room = $request->input('bed_room');
        $property->bath_room = $request->input('bath_room');
        $property->active = $request->input('active');
        $property->utility_heating = $request->input('utility_heating');
        $property->utility_patio = $request->input('utility_patio');
        $property->kitchen_fridge = $request->input('kitchen_fridge');
        $property->kitchen_freezer = $request->input('kitchen_freezer');
        $property->kitchen_oven = $request->input('kitchen_oven');
        $property->kitchen_stove = $request->input('kitchen_stove');
        $property->kitchen_potspans = $request->input('kitchen_potspans');
        $property->kitchen_microwave = $request->input('kitchen_microwave');
        $property->kitchen_dishwasher = $request->input('kitchen_dishwasher');
        $property->bathroom_shower = $request->input('bathroom_shower');
        $property->bathroom_sink = $request->input('bathroom_sink');
        $property->bathroom_bathtub = $request->input('bathroom_bathtub');
        $property->bathroom_window = $request->input('bathroom_window');
        $property->save();

        return redirect ('/properties')->with('success', 'Property updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = Property::find($id);
        $property->delete();

        return redirect ('/properties')->with('success', 'Property deleted.');
    }

    /**
     * Show user-auth properties in dashboard.
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function userproperties($id)
    {    
        $properties = Property::find($id);
        $user = $properties->auth()->user()->get();

        return View::make('dashboard.properties')->with(array("user" => $user, "properties" => $properties));
    }
}
