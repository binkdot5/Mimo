@extends('layouts.app')

@section('title', 'Reservations')
@section('content')
<div class="container mt-5">
    <h2 class="neo">Your Reservations</h2>
    @foreach ($reservations as $reservation)
    <div class="card mt-5">
        <div class="card-body">
            <div class="row m-2">
                <div class="col">
                    <h3 class="neo">{{ $reservation->property['title'] }}</h3>
                </div>
                <div class="col-md-2 mt-2">
                    <h6>Category: <b>{{ $reservation->property['category'] }}</b></h6>
                </div>
            </div>
            <div class="row m-2 pt-2">
                <div class="col">
                    <h6>Arrival</h6>
                    <h4>{{ $reservation->arrival }}</h4>
                </div>
                <div class="col">
                    <h6>Departure</h6>
                    <h4>{{ $reservation->departure }}</h4>
                </div>
            </div>
            <div class="row m-2 pt-2">
                <div class="col">
                    <h6>Total</h6>
                    <h4>${{ $reservation->price }}</h4>
                </div>
                <div class="col">
                    <a href="/dashboard/reservations/{{ $reservation->id }}/edit" class="btn btn-success mt-2">Edit</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    @if(!empty(Session::get('success')))
        <div class="alert alert-success"> {{ Session::get('success') }}</div>
    @endif
    @if(!empty(Session::get('error')))
        <div class="alert alert-danger"> {{ Session::get('error') }}</div>
    @endif
</div>
@endsection