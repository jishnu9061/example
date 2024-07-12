@extends('layouts.app')

@section('title', 'Dashboard | Greenveel')

@section('content')
    <div class="row">
        <div class="col-10 offset-lg-1">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Edit Outlet</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <div class="card">
                <div class="card-body">
                    <div>
                        <form action="{{ route('outlet.update',$outlet->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-lg-4 col-md-4">
                                    <div class="mb-4">
                                        <label for="example-text-input" class="form-label">Outlet Code</label>
                                        <input class="form-control ron" type="text" name="outlet_code" value="{{ old('outlet_code',$outlet->outlet_code) }}"
                                            id="example-text-input">
                                    </div>
                                    @error('outlet_code')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="mb-4">
                                        <label for="example-text-input" class="form-label">Outlet Name</label>
                                        <input class="form-control ron" type="text" name="outlet_name" value="{{ old('outlet_name',$outlet->outlet_name) }}"
                                            id="example-text-input">
                                    </div>
                                    @error('outlet_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="mb-4">
                                        <label for="example-text-input" class="form-label">Address</label>
                                        <input class="form-control ron" type="text" name="address" value="{{ old('address',$outlet->address) }}"
                                            id="example-text-input">
                                    </div>
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="mb-4">
                                        <label for="example-text-input" class="form-label">City</label>
                                        <input class="form-control" type="text" name="city" value="{{ old('city',$outlet->city) }}" id="example-text-input">
                                    </div>
                                    @error('city')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="mb-4">
                                        <label for="example-text-input" class="form-label">District</label>
                                        <input class="form-control" type="text"  name="district" value="{{ old('district',$outlet->district) }}" id="example-text-input">
                                    </div>
                                    @error('district')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="mb-4">
                                        <label for="example-text-input" class="form-label">State</label>
                                        <input class="form-control" type="text"  name="state" value="{{ old('state',$outlet->state) }}" id="example-text-input">
                                    </div>
                                    @error('state')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="mb-4">
                                        <label for="example-text-input" class="form-label">Map</label>
                                        <input class="form-control" type="url" name="map" value="{{ old('map',$outlet->map) }}" id="example-text-input">
                                    </div>
                                    @error('map')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="mb-4">
                                        <label for="example-text-input" class="form-label">Vehicles</label>
                                        <input class="form-control" type="text" name="vehicles" value="{{ old('vehicles',$outlet->vehicles) }}" id="example-text-input">
                                    </div>
                                    @error('vehicles')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="mb-4">
                                        <label for="example-text-input" class="form-label">Image</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>

                                        <span class="text-danger"></span>

                                </div>
                                @if ($outlet->image)
                                <img src="{{ \App\Http\Helpers\BlogHelper::getOutletImagePath($outlet->image) }}" style="float:left; left:73%; width:20%;"
                                    alt="Outlet Image">
                            @else
                                <p>No image available</p>
                            @endif

                                <div class="col-lg-12 col-md-12">
                                    <div class="mb-4">
                                        <label for="example-text-input" class="form-label">Socket Type</label>
                                        <textarea class="form-control ckeditor-classic-class" type="text" name="socket_type" id="example-text-input">{{ old('socket_type',$outlet->socket_type) }}</textarea>
                                    </div>
                                    @error('socket_type')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="mb-4">
                                        <label for="ckeditor-classic" class="form-label">Amenities</label>
                                        <textarea name="amenities" id="ckeditor-classic">{{ old('amenities',$outlet->amenities) }}</textarea>
                                    </div>
                                    @error('amenities')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="text-right mt-4">
                                    <button type="submit"
                                        class="btn btn-primary waves-effect waves-light">Submit</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
