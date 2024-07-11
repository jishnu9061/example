
@extends('layouts.app')

@section('title', 'Dashboard | Greenveel')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-10 offset-lg-1">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Count</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-10 offset-lg-1">
        <div class="card">
            <div class="card-body">
                <div>
                    <form action="{{ route('count.update',$counts->id) }}" method="post">
                        @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-4">
                                <label for="example-text-input" class="form-label">
                                    CHARGING STATIONS </label>
                                <input class="form-control ron" type="text" name="charging_stations" value="{{ old('charging_stations',$counts->charging_stations) }}" id="example-text-input">
                            </div>
                            @error('charging_stations')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-4">
                                <label for="example-text-input" class="form-label">HOURS OF CHARGING
                                </label>
                                <input class="form-control ron" type="text" name="hours_of_charging" value="{{ old('hours_of_charging',$counts->hours_of_charging) }}" id="example-text-input">
                            </div>
                            @error('hours_of_charging')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-4">
                                <label for="example-text-input" class="form-label">ACTIVE USERS
                                </label>
                                <input class="form-control ron" type="text" name="active_users" value="{{ old('active_users',$counts->active_users) }}" id="example-text-input">
                                @error('active_users')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-4">
                                <label for="example-text-input" class="form-label">CITIES
                                </label>
                                <input class="form-control" type="text" name="cities" value="{{ old('cities',$counts->cities) }}" id="example-text-input">
                                @error('cities')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>

                        <div class="text-right mt-4">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit
                            </button>
                        </div>


                    </div>
                    <!-- end row -->
                </div>
                <!-- Single select input Example -->





            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection
