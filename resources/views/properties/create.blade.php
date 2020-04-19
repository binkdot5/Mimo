@extends('layouts.app')

@section('title', 'Register your Property')
@section('content')
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            <h2>Register your Property</h2>
        </div>
        <div class="card-body">
            <h5 class="card-title">Property Registeration Form</h5>
            {!! Form::open(['action' => 'PropertyController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Choose a title')}}
                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Use a title that makes your place stand out!'])}}
                </div>
                <div class="form-group">
                    {{Form::label('description', 'Describe your place')}}
                    {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Write few lines that describes your place.'])}}
                </div>
                <div class="form-group">
                    {{Form::label('address', 'Address')}}
                    {{Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Mention your property address.'])}}
                </div>
                <div class="form-check">
                    {{Form::label('active', 'Publish your listing?', ['class' => 'form-check-label'])}}
                    {{Form::checkbox('active', '1', ['class' => 'form-check-input'])}}
                </div>
                <div class="form-group">
                    {{Form::label('category', 'Category')}}
                    <div class="form-check">
                        {{Form::radio('category', 'House', true, ['class' => 'form-check-input'])}}
                        {{Form::label('category', 'House', ['class' => 'form-check-label'])}}
                    </div>
                    <div class="form-check">
                    {{Form::radio('category', 'Apartment', false, ['class' => 'form-check-input'])}}
                    {{Form::label('category', 'Apartment', ['class' => 'form-check-label'])}}
                    </div>
                    <div class="form-check">
                    {{Form::radio('category', 'Other', false, ['class' => 'form-check-input'])}}
                    {{Form::label('category', 'Other', ['class' => 'form-check-label'])}}
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                    {{Form::label('bed_room', 'No. of Bed Rooms')}}
                    {{Form::number('bed_room', '1', ['class' => 'form-control'])}}
                    </div>
                    <div class="col">
                        {{Form::label('bath_room', 'No. of Bath Rooms')}}
                        {{Form::number('bath_room', '1', ['class' => 'form-control'])}}
                    </div>
                </div>
                <div class="form-group">
                    {{Form::label('gallery', 'Gallery')}}
                    {{Form::text('gallery', '', ['class' => 'form-control', 'placeholder' => 'apartment.jpg'])}}
                </div>
                <h5>Basic Amenities</h5>
                <div class="form-row">
                    <div class="col">
                        <div class="form-check">
                            {{Form::radio('utility_heating', '', true, ['class' => 'form-check-input'])}}
                            {{Form::label('utility_heating', 'Heating', ['class' => 'form-check-label'])}}
                        </div>
                        <div class="form-check">
                            {{Form::radio('utility_wifi', '', false, ['class' => 'form-check-input'])}}
                            {{Form::label('utility_wifi', 'Wifi', ['class' => 'form-check-label'])}}
                        </div>
                        <div class="form-check">
                            {{Form::radio('utility_patio', '', false, ['class' => 'form-check-input'])}}
                            {{Form::label('utility_patio', 'Outdoor Access', ['class' => 'form-check-label'])}}
                        </div>
                    </div>
                </div>
                <h5 class="mt-2">Kitchen</h5>
                <div class="form-row">
                    <div class="col">
                        <div class="form-check">
                            {{Form::radio('kitchen_fridge', '', true, ['class' => 'form-check-input'])}}
                            {{Form::label('kitchen_fridge', 'Fridge', ['class' => 'form-check-label'])}}
                        </div>
                        <div class="form-check">
                            {{Form::radio('kitchen_freezer', '', true, ['class' => 'form-check-input'])}}
                            {{Form::label('kitchen_freezer', 'Freezer', ['class' => 'form-check-label'])}}
                        </div>
                        <div class="form-check">
                            {{Form::radio('kitchen_oven', '', false, ['class' => 'form-check-input'])}}
                            {{Form::label('kitchen_oven', 'Oven', ['class' => 'form-check-label'])}}
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            {{Form::radio('kitchen_stove', '', true, ['class' => 'form-check-input'])}}
                            {{Form::label('kitchen_stove', 'Stove/Burner', ['class' => 'form-check-label'])}}
                        </div>
                        <div class="form-check">
                            {{Form::radio('kitchen_potspans', '', false, ['class' => 'form-check-input'])}}
                            {{Form::label('kitchen_potspans', 'Pots & Pans', ['class' => 'form-check-label'])}}
                        </div>
                        <div class="form-check">
                            {{Form::radio('kitchen_microwave', '', true, ['class' => 'form-check-input'])}}
                            {{Form::label('kitchen_microwave', 'Microwave', ['class' => 'form-check-label'])}}
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            {{Form::radio('kitchen_dishwasher', '', false, ['class' => 'form-check-input'])}}
                            {{Form::label('kitchen_dishwasher', 'Dishwasher', ['class' => 'form-check-label'])}}
                        </div>
                    </div>
                </div>
                <h5 class="mt-2">Bathroom</h5>
                <div class="form-row">
                    <div class="col">
                        <div class="form-check">
                            {{Form::radio('bathroom_shower', '', true, ['class' => 'form-check-input'])}}
                            {{Form::label('bathroom_shower', 'Shower', ['class' => 'form-check-label'])}}
                        </div>
                        <div class="form-check">
                            {{Form::radio('bathroom_sink', '', true, ['class' => 'form-check-input'])}}
                            {{Form::label('bathroom_sink', 'Sink', ['class' => 'form-check-label'])}}
                        </div>
                        <div class="form-check">
                            {{Form::radio('bathroom_toilet', '', true, ['class' => 'form-check-input'])}}
                            {{Form::label('bathroom_toilet', 'Toilet/WC', ['class' => 'form-check-label'])}}
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            {{Form::radio('bathroom_bathtub', '', false, ['class' => 'form-check-input'])}}
                            {{Form::label('bathroom_bathtub', 'Bath', ['class' => 'form-check-label'])}}
                        </div>
                        <div class="form-check">
                            {{Form::radio('bathroom_window', '', false, ['class' => 'form-check-input'])}}
                            {{Form::label('bathroom_window', 'Window(s)', ['class' => 'form-check-label'])}}
                        </div>
                    </div>
                </div>
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection