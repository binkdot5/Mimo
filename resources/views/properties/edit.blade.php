@extends('layouts.app')

@section('title', 'Edit Property')
@section('content')
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            <h2>Edit Reservation</h2>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            {!! Form::open(['action' => ['PropertyController@edit', $property->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('Arrival', 'Update Arrival Date')}}
                    {{Form::date('Arrival', $property->arrival), ['class' => 'form-control', 'placeholder' => '03/21/2020', 'value' => $reservation->arrival]}}
                </div>
                <div class="form-group">
                    {{Form::label('Departure', 'Update Departure Date')}}
                    {{Form::date('Departure', $property->departure), ['class' => 'form-control', 'placeholder' => '03/23/2020', 'value' => $property->departure]}}
                </div>
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
            <form action="{{ route('property.destroy', $reservation->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <p class="text-right">
                <button type="submit" class="btn btn-sm text-danger">Delete property</button>
            </p>
            </form>
        </div>
    </div>
</div>
@endsection