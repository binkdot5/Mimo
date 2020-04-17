@extends('layouts.app')

@section('title', 'Edit Reservation')
@section('content')
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            <h2>Edit Reservation</h2>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">Yes</p>
            {!! Form::open(['action' => ['ReservationController@update', $reservation->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('Arrival', 'Update Arrival Date')}}
                    {{Form::date('Arrival', $reservation->arrival), ['class' => 'form-control', 'placeholder' => '03/21/2020', 'value' => $reservation->arrival]}}
                </div>
                <div class="form-group">
                    {{Form::label('Departure', 'Update Departure Date')}}
                    {{Form::date('Departure', $reservation->departure), ['class' => 'form-control', 'placeholder' => '03/23/2020', 'value' => $reservation->departure]}}
                </div>
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
            <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <p class="text-right">
                <button type="submit" class="btn btn-sm text-danger">Delete reservation</button>
            </p>
            </form>
        </div>
    </div>
</div>
@endsection