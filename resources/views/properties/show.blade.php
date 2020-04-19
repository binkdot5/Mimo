@extends('layouts.app')

@section('title', 'View Property')
@section('content')
<section class="row justify-content-md-center">
    <div class="propertycard col-md-auto align-self-center pt-5">
        <div class="card">
            <div class="card-body">
                <div class="col">
                <img src="{{ asset("images/{$property->gallery}") }}" class="card-img-top pt-4" alt="property image">
                </div>
                <h5 class="card-title p-4 mb-3">{{$property->title}}</h5>
                <div class="row">
                    <div class="d-inline-flex col justify-content-center">
                        <h6>{{$property->address}}</h6>
                    </div>
                    <div class="d-inline-flex col justify-content-center">
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
                <div class="row">
                    <div class="col p-4 justify-content-center">
                        <h6>Description</h6>
                        <p>{{$property->description}}</p>
                    </div>
                </div>
                <div class="row">
                </div>      
            </div>
        </div>
    </div>
</section>    
<section class="row">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Apartment</a>
    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Kitchen</a>
    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Bathroom</a>
    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Room</a>
    </div>
    <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="row ml-3">
                <div class="col">
                    <div class="iconsUbg">
                        <img src="{{asset ('icons/utility_heating.svg')}}" alt="heating icon" class="iconsU eIcons">  
                        <h6>Heating</h6>
                        <p class="iconVal hidden">{{$property->utility_heating}}</p> 
                    </div>
                    <div class="iconsUbg">
                        <img src="{{asset ('icons/wifi.svg')}}" alt="wifi icon" class="iconsU">  
                        <h6>Wifi</h6>
                        <p class="hidden">{{$property->utility_wifi}}</p> 
                    </div>
                    <div class="iconsUbg">
                        <img src="{{asset ('icons/utility_patio.svg')}}" alt="patio icon" class="iconsU">  
                        <h6>Outdoor Access</h6>
                        <p class="hidden">{{$property->utility_patio}}</p> 
                    </div>
                </div>
            </div>
        </div>    
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <div class="row">
                <div class="col">
                    <div class="iconsUbg">
                        <img src="{{asset ('icons/kitchen_fridge.svg')}}" alt="fridge icon" class="iconsU">  
                        <h6>Fridge</h6>
                        <p class="hidden">{{$property->kitchen_fridge}}</p> 
                    </div>
                    <div class="iconsUbg">
                        <img src="{{asset ('icons/kitchen_freezer.svg')}}" alt="freezer icon" class="iconsU">  
                        <h6>Freezer</h6>
                        <p class="hidden">{{$property->kitchen_freezer}}</p> 
                    </div>
                    <div class="iconsUbg">
                        <img src="{{asset ('icons/kitchen_oven.svg')}}" alt="oven icon" class="iconsU">  
                        <h6>Oven</h6>
                        <p class="hidden">{{$property->kitchen_oven}}</p> 
                    </div>
                </div>
                <div class="col">
                    <div class="iconsUbg">
                        <img src="{{asset ('icons/kitchen_stove.svg')}}" alt="fridge icon" class="iconsU">  
                        <h6>Stove</h6>
                        <p class="iconsU hidden">{{$property->kitchen_stove}}</p> 
                    </div>
                    <div class="iconsUbg">
                        <img src="{{asset ('icons/pots-pans.svg')}}" alt="pots-n-pans icon" class="iconsU">  
                        <h6>Pots & Pans</h6>
                        <p class="iconsU hidden">{{$property->kitchen_potspans}}</p> 
                    </div>
                    <div class="iconsUbg">
                        <img src="{{asset ('icons/kitchen_microwave.svg')}}" alt="oven icon" class="iconsU">  
                        <h6>Microwave</h6>
                        <p class="hidden">{{$property->kitchen_microwave}}</p> 
                    </div>
                </div>
                <div class="col">
                    <div class="iconsUbg">
                        <img src="{{asset ('icons/kitchen_dishwasher.svg')}}" alt="dishwasher icon" class="iconsU">  
                        <h6>Dishwasher</h6>
                        <p class="hidden">{{$property->kitchen_dishwasher}}</p> 
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" class="iconsU">
            <div class="row">
                <div class="col">
                    <div class="iconsUbg">
                        <img src="{{asset ('icons/bathroom_shower.svg')}}" alt="shower icon" class="iconsU">  
                        <h6>Shower</h6>
                        <p class="hidden">{{$property->bathroom_shower}}</p> 
                    </div>
                    <div class="iconsUbg">
                        <img src="{{asset ('icons/bathroom_sink.svg')}}" alt="basin icon" class="iconsU">  
                        <h6>Washbasin</h6>
                        <p class="hidden">{{$property->bathroom_sink}}</p> 
                    </div>
                    <div class="iconsUbg">
                        <img src="{{asset ('icons/bathroom_toilet.svg')}}" alt="toilet icon" class="iconsU">  
                        <h6>Toilet/WC</h6>
                        <p class="hidden">{{$property->bathroom_toilet}}</p> 
                    </div>
                </div>
                <div class="col">
                    <div class="iconsUbg">
                        <img src="{{asset ('icons/bathroom_bath.svg')}}" alt="bathtub icon" class="iconsU">  
                        <h6>Bathtub</h6>
                        <p class="hidden">{{$property->bathroom_bathtub}}</p> 
                    </div>
                    <div class="iconsUbg">
                        <img src="{{asset ('icons/window.svg')}}" alt="window icon" class="iconsU">  
                        <h6>Pots & Pans</h6>
                        <p class="hidden">{{$property->bathroom_window}}</p> 
                    </div>
                </div>
            </div>
        </div>    
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
        </div>
    </div>
</section>
<section>

</section>
@endsection