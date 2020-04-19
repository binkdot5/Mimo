@extends('layouts.app')

@section('title', 'Properties')
@section('content')
<div class="container my-5">
    <div class="row">
        @foreach ($properties as $property)
        <div class="col-sm-4">
            <div class="card mb-3">
                <div style="background-image:url('{{ $property->gallery }}');height:300px;background-size:cover;" class="img-fluid" alt="Front of hotel"></div>
                <div class="card-body">
                    <h5 class="card-title">{{ $property->title }}</h5>
                    <small class="text-muted">{{ $property->address }}</small>
                    <p class="card-text">{{ $property->description }}</p>
                    <a href="/properties/{{$property->id}}" class="btn btn-secondary">View</a>
                    <a href="/dashboard/reservations/create/{id}" class="btn btn-primary">Reserve Now</a>
                </div>
            </div>  
        </div>
        @endforeach
    </div>
</div>
@endsection