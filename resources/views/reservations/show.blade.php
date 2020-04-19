@extends('layouts.app')

@section('title', 'Edit Reservation')
@section('content')
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            <h2>You're booked for the {{ $property->name }} in {{ $property->address }}!</h2>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{ $hotelInfo->image }}" class="img-fluid" alt="Front of hotel">
                    </div>
                    <div class="col-sm-6">
                        <h3 class="card-title">
                            {{ $property->title }} - <small>{{ $property->address }}</small>
                        </h3>
                        <p class="card-text">{{ $property->description }}</p>
                        <p class="card-text"><strong>Arrival: </strong>{{ $reservation->arrival }}</p>
                        <p class="card-text"><strong>Departure: </strong>{{ $reservation->departure }}</p>
                        <p class="card-text"><strong>Room: </strong>{{ $reservation->property['category'] }}</p>
                        <p class="card-text"><strong>Price: </strong>{{ $reservation->price }}</p>
                        <p class="card-text"><strong>Total: </strong>${{ $reservation->total_price }}</p>
                    </div>                  
                </div>
                <div class="text-center mt-3">
                    <a href="/dashboard/reservations/{{ $reservation->id }}/edit" class="btn btn-lg btn-success">Edit this reservation</a>
                    <a href="/dashboard/reservations/{{ $reservation->id }}/delete" class="btn btn-lg btn-danger">Delete</a>
                </div>
            </div>          
        </div>
    </div>
</div>
@endsectio