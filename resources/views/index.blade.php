@extends('layouts.app')

@section('content')
<section id="bg-row">
    <booking-component></booking-component>
</section>
<section class="row pt-4">
    <div class="col">
        <div class="card">
        <img src="{{ asset('images/placeholder-apartment.jpg') }}" class="card-img-top" alt="property image">
            <div class="card-body">
                <h5 class="card-title">Studio Apartment</h5>
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
                        <p>RICHMOND ST.</p>
                    </div>
                    <div class="d-inline-flex col justify-content-center">
                        <i class="far fa-star fa-stack-1x"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="d-inline-flex col justify-content-center">
                        <img src="{{ asset('icons/bed.svg') }}" alt="number of bathrooms icon">
                        <p>1 Bathroom</p>
                    </div>
                    <div class="d-inline-flex col justify-content-center">
                        <img src="{{ asset('icons/bed.svg') }}" alt="number of bedrooms icon">
                        <p>1 Bedroom</p>
                    </div>
                </div>
                <div class="row">
                    <div class="d-inline-flex col justify-content-center">
                        <img src="{{ asset('icons/plumber.svg') }}" alt="number of bed-rooms icon">
                        <p>with Utilities</p>
                    </div>
                    <div class="d-inline-flex col justify-content-center">
                        <img class="icon-sub" src="{{ asset('icons/bed.svg') }}" alt="number of bed-rooms icon">
                        <p>1 Bedroom</p>
                    </div>
                </div>      
            </div>
        </div>
    </div>
</section>
<section class="row pt-4">
    <div class="col-sm p-4">
        <div class="card text-center">
            <div class="card-body">
                <img class="icon-size pb-3" src="{{ asset('icons/security.svg') }}" alt="security icon">
                <h5 class="card-title">Safety in every step</h5>
            </div>
        </div>
    </div>
    <div class="col-sm p-4">    
        <div class="card text-center">
            <div class="card-body">
                <img class="icon-size pb-3" src="{{ asset('icons/document.svg') }}" alt="document icon">
                <h5 class="card-title">No Background Checks required</h5>
            </div>
        </div>
    </div>
    <div class="col-sm p-4">
        <div class="card text-center">
            <div class="card-body">
                <img class="icon-size pb-3" src="{{ asset('icons/reward.svg') }}" alt="reward icon">
                <h5 class="card-title">Certificate of Accommodation</h6>
            </div>    
        </div>
    </div>
</section>
<section id="gradient-row">
    <h2>Yes</h2>
</section>
@endsection
