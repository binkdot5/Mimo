@extends('layouts.app')

@section('title', 'Register your Property')
@section('content')
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            <h2>Register Property</h2>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">Yes</p>
            {!! Form::open(['action' => 'PropertyController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Choose a title')}}
                    {{Form::text('Title', 'Use a title that makes your place stand out!'), ['class' => 'form-control', 'placeholder' => 'Do not mention the occupany in the titles.']}}
                </div>
                <div class="form-group">
                    {{Form::label('description', 'Describe your place')}}
                    {{Form::textarea('Description', 'Be short and precise!'), ['class' => 'form-control', 'placeholder' => 'Write few lines that describes your place.']}}
                </div>
                <div class="form-group">
                    {{Form::label('address', 'Property Location')}}
                    {{Form::text('Address', '321 Central Avenue'), ['class' => 'form-control', 'placeholder' => 'Write few lines that describes your place.']}}
                </div>
                <div class="form-group">
                    {{Form::label('category', 'Category')}}
                    {{Form::label('category', 'House')}}
                    {{Form::radio('Category', 'House', true), ['class' => 'form-control']}}
                    {{Form::label('category', 'Aparment')}}
                    {{Form::radio('Category', 'Apartment', false), ['class' => 'form-control']}}
                </div>
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection