<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Property;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::with('property')
        -> orderBy('arrival', 'asc')
        -> get();

        return view('dashboard.reservations')->with('reservations', $reservations);
    }

    public function create($property_id)
    {
        $propertyInfo = Property::get()->find($property_id);

        return view('dashboard.reservationCreate', compact('propertyInfo'));
    }

    public function store(Request $request)
    {   
        $request->request->add(['user_id' => 1]);
        Reservation::create($request->all());

        return redirect('dashboard/reservations')->with('success', 'Reservation created!');
    }

    public function show(Reservation $reservation)
    {
        $reservation = Reservation::with('property')->get()->find($reservation->id);        
        $property_id = $reservation->property_id;
        $propertyInfo = Property::get()->find($property_id);

        return view('dashboard.reservationSingle', compact('reservation', 'propertyInfo'));
    }

    public function edit(Reservation $reservation)
    {
        $reservation = Reservation::with('property')->get()->find($reservation->id);
        $property_id = $reservation->property_id;
        $propertyInfo = Property::get()->find($property_id);

        return view('dashboard.reservationEdit', compact('reservation', 'propertyInfo'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        $reservation->user_id = 1;

        $reservation->save();
        return redirect('dashboard/reservations')->with('success', 'Successfully updated reservation.');
    }

    public function destroy()
    {
        $reservation = Reservation::find($reservation->id);
        $reservation->delete();

        return redirect('dashboard/reservations')->with('success', 'Reservation deleted!');
    }
}
