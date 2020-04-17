@extends('layouts.app')

@section('title', 'Create Reservation')
@section('content')
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            <h2>Create Reservation</h2>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">Yes</p>
            {!! Form::open(['action' => 'ReservationController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('Arrival', 'Set Arrival Date')}}
                    {{Form::date('Arrival', ''), ['class' => 'form-control', 'placeholder' => '01/30/2020']}}
                </div>
                <div class="form-group">
                    {{Form::label('Departure', 'Set Departure Date')}}
                    {{Form::date('Departure', ''), ['class' => 'form-control', 'placeholder' => '01/31/2020',]}}
                </div>
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection