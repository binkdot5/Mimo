@extends('layouts.index')

@section('content')       
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
<section class="gradient-row">
</section>
@endsection
