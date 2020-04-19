@extends('layouts.app')

@section('title', 'Properties')
@section('content')
<div class="container my-5">
    <div class="row">
        @foreach ($properties as $property)
        <div class="col-sm-4">
            <div class="card mb-3">
                <div style="background-image:url(' {{ asset("images/{$property->gallery}") }} ');height:400px;background-size:cover;" class="img-fluid" alt="Front of hotel"></div>
                <div class="card-body">
                    <h5 class="card-title"><a href="/properties/{{$property->id}}">{{ $property->title }}</a></h5>
                    <small class="text-muted">{{ $property->address }}</small>
                    <div class="row pt-3">
                        <div class="d-inline-flex col justify-content-center mb-3">
                            <h6>Type: <b>{{$property->category}}</b></h6>
                        </div>
                        <div class="d-inline-flex col justify-content-center mb-3">
                            <img src="{{ asset('icons/mimo-badge.svg') }}" alt="mimo badge">
                        </div>
                    </div>  
                    <div class="row mb-3">
                        <div class="d-inline-flex col justify-content-center">
                            <img src="{{ asset('icons/bedroom.svg') }}" alt="number of bathrooms icon" class="iconsD">
                            <p><b>{{$property->bed_room}}</b> Bedroom</p>
                        </div>
                        <div class="d-inline-flex col justify-content-center">
                            <img src="{{ asset('icons/bathroom.svg') }}" alt="number of bedrooms icon" class="iconsD">
                            <p><b>{{$property->bath_room}}</b> Bathroom</p>
                        </div>
                    </div>
                    <a href="/properties/{{$property->id}}" class="btn btn-secondary">View</a>
                    <a href="/dashboard/reservations/create/{id}" class="btn btn-primary">Reserve Now</a>
                </div>
            </div>  
        </div>
        @endforeach
    </div>
</div>
@endsection