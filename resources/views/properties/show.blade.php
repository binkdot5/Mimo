@extends('layouts.app')

@section('title', 'View Property')
@section('content')
<div class="col">
    <div class="card">
        <div class="card-body">
            <div class="col">
            <img src="{{ asset("images/{$property->gallery}") }}" class="card-img-top" alt="property image">
            </div>
            <h5 class="card-title">{{$property->title}}</h5>
            <div class="row">
                <div class="d-inline-flex col">
                    <h5>$1400</h5>
                </div>
                <div class="d-inline-flex col">
                    <img src="{{ asset('icons/mimo-badge.svg') }}" alt="mimo badge">
                </div>
            </div>  
            <div class="row">
                <div class="d-inline-flex col justify-content-center">
                    <p>{{$property->address}}</p>
                </div>
                <div class="d-inline-flex col justify-content-center">
                    <i class="far fa-star fa-stack-1x"></i>
                </div>
            </div>
            <div class="row">
                <div class="d-inline-flex col justify-content-center">
                    <img src="{{ asset('icons/bed.svg') }}" alt="number of bathrooms icon">
                    <p><b>{{$property->bed_room}}</b> Bedroom</p>
                </div>
                <div class="d-inline-flex col justify-content-center">
                    <img src="{{ asset('icons/bed.svg') }}" alt="number of bedrooms icon">
                    <p><b>{{$property->bath_room}}</b> Bathroom</p>
                </div>
            </div>
            <div class="row">
                <div class="col justify-content-center">
                    <h6>Description</h6>
                    <p>{{$property->description}}</p>
                </div>
            </div>
            <div class="row">
            </div>      
        </div>
    </div>
</div>
<section class="row">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Apartment</a>
    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Kitchen</a>
    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Bathroom</a>
    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Room</a>
    </div>
    <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <div class="col justify-content-center">
            <div>
                <img src="{{asset ('icons/heating.svg')}}" alt="heating icon">  
                <h6>Heating {{$property->utility_heating}}</h6> 
            </div>
            <div>
                <img src="{{asset ('icons/heating.svg')}}" alt="wifi icon">  
                <h6>Wifi {{$property->utility_wifi}}</h6> 
            </div>
            <div>
                <img src="{{asset ('icons/patio.svg')}}" alt="patio icon">  
                <h6>Outdoor Access {{$property->utility_patio}}</h6> 
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        <div class="row">
            <div class="col">
                <div>
                    <img src="{{asset ('icons/heating.svg')}}" alt="fridge icon">  
                    <h6>Fridge {{$property->kitchen_fridge}}</h6> 
                </div>
                <div>
                    <img src="{{asset ('icons/heating.svg')}}" alt="freezer icon">  
                    <h6>Freezer {{$property->kitchen_freezer}}</h6> 
                </div>
                <div>
                    <img src="{{asset ('icons/patio.svg')}}" alt="oven icon">  
                    <h6>Oven {{$property->kitchen_oven}}</h6> 
                </div>
            </div>
            <div class="col">
                <div>
                    <img src="{{asset ('icons/heating.svg')}}" alt="fridge icon">  
                    <h6>Stove {{$property->kitchen_stove}}</h6> 
                </div>
                <div>
                    <img src="{{asset ('icons/heating.svg')}}" alt="freezer icon">  
                    <h6>Pots & Pans {{$property->kitchen_potspans}}</h6> 
                </div>
                <div>
                    <img src="{{asset ('icons/patio.svg')}}" alt="oven icon">  
                    <h6>Microwave {{$property->kitchen_microwave}}</h6> 
                </div>
            </div>
            <div class="col">
                <div>
                    <img src="{{asset ('icons/dishwasher.svg')}}" alt="dishwasher icon">  
                    <h6>Stove {{$property->kitchen_dishwasher}}</h6> 
                </div>
            </div>
        </div>
    </div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
            <div class="row">
                <div class="col">
                    <div>
                        <img src="{{asset ('icons/heating.svg')}}" alt="fridge icon">  
                        <h6>Fridge {{$property->bathroom_shower}}</h6> 
                    </div>
                    <div>
                        <img src="{{asset ('icons/heating.svg')}}" alt="freezer icon">  
                        <h6>Freezer {{$property->bathroom_sink}}</h6> 
                    </div>
                    <div>
                        <img src="{{asset ('icons/patio.svg')}}" alt="oven icon">  
                        <h6>Oven {{$property->bathroom_toilet}}</h6> 
                    </div>
                </div>
                <div class="col">
                    <div>
                        <img src="{{asset ('icons/heating.svg')}}" alt="fridge icon">  
                        <h6>Stove {{$property->bathroom_bathtub}}</h6> 
                    </div>
                    <div>
                        <img src="{{asset ('icons/heating.svg')}}" alt="freezer icon">  
                        <h6>Pots & Pans {{$property->bathroom_window}}</h6> 
                    </div>
                </div>
            </div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
        </div>
    </section>
</div>
@endsection