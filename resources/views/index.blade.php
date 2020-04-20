@extends('layouts.index')

@section('content')       
<section class="row pt-4">
    <div class="col-sm p-4">
        <div class="card text-center">
            <div class="card-body">
                <img class="icon-size pb-3" src="{{ asset('icons/security.svg') }}" alt="security icon">
                <h5 class="neo card-title">Safety in every step</h5>
            </div>
        </div>
    </div>
    <div class="col-sm p-4">    
        <div class="card text-center">
            <div class="card-body">
                <img class="icon-size pb-3" src="{{ asset('icons/document.svg') }}" alt="document icon">
                <h5 class="neo card-title">No Background Checks required</h5>
            </div>
        </div>
    </div>
    <div class="col-sm p-4">
        <div class="card text-center">
            <div class="card-body">
                <img class="icon-size pb-3" src="{{ asset('icons/reward.svg') }}" alt="reward icon">
                <h5 class="neo card-title">Certificate of Accommodation</h6>
            </div>    
        </div>
    </div>
</section>
<section id="landlord">
    <div class="row justify-content-md-center">
        <div class="col">
            <h3 class="white">Are you a landlord looking for tenants?</h3>
            <h6 class="white">Don't worry we've got your back</h6>
            <a href="#" class="btn btn-primary">Register Now</a>
        </div>
    </div>
</section>
@endsection
