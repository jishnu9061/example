@extends('layouts.app')

@section('title', 'Dashboard | Greenveel')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Dashboard</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card card-h-100 cardColora">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-7">
                            <span class="text-muted mb-3 lh-2 d-block text-truncate"
                                style="color: #EEEEEE !important;">Outlets</span>
                            <h4 class="mb-3" style="color: #EEEEEE !important;">
                                <span class="counter-value" data-target="{{ $counts['outlets'] }}">0</span>
                            </h4>
                        </div>
                        <div class="col-5">
                            <div class="dashicon">
                                <i class="bx bx-layer"></i>
                            </div>
                        </div>
                    </div>
                    <div class="text-nowrap">
                        <span class="ms-1 text-muted font-size-13" style="color: #EEEEEE !important;">Since last week</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-h-100 cardColorb">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-7">
                            <span class="text-muted mb-3 lh-2 d-block text-truncate"
                                style="color: #EEEEEE !important;">Blogs</span>
                            <h4 class="mb-3" style="color: #EEEEEE !important;">
                                <span class="counter-value" data-target="{{ $counts['blogs'] }}">0</span>
                            </h4>
                        </div>
                        <div class="col-5">
                            <div class="dashicon">
                                <i class="bx bx-rupee"></i>
                            </div>
                        </div>
                    </div>
                    <div class="text-nowrap">
                        <span class="ms-1 text-muted font-size-13" style="color: #EEEEEE !important;">Since last week</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-h-100 cardColorc">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-7">
                            <span class="text-muted mb-3 lh-2 d-block text-truncate"
                                style="color: #EEEEEE !important;">Enquiries</span>
                            <h4 class="mb-3" style="color: #EEEEEE !important;">
                                <span class="counter-value" data-target="{{ $counts['enquiries'] }}">0</span>
                            </h4>
                        </div>
                        <div class="col-5">
                            <div class="dashicon">
                                <i class="bx bx-line-chart"></i>
                            </div>
                        </div>
                    </div>
                    <div class="text-nowrap">
                        <span class="ms-1 text-muted font-size-13" style="color: #EEEEEE !important;">Since last week</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-h-100 cardColord">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-7">
                            <span class="text-muted mb-3 lh-2 d-block text-truncate"
                                style="color: #EEEEEE !important;">Contact mails</span>
                            <h4 class="mb-3" style="color: #EEEEEE !important;">
                                <span class="counter-value" data-target="{{ $counts['contactMails'] }}">0</span>
                            </h4>
                        </div>
                        <div class="col-5">
                            <div class="dashicon">
                                <i class="bx bx-bar-chart-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="text-nowrap">
                        <span class="ms-1 text-muted font-size-13" style="color: #EEEEEE !important;">Since last week</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-3">Outlets List</h5>
                    <div class="table-responsive mb-0" data-pattern="priority-columns">
                        <table id="datatable-buttons" class="table table-bordered nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Sl.No</th>
                                    <th>Outlet Code</th>
                                    <th>Outlet Name</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>District</th>
                                    <th>State</th>
                                    <th>Socket type</th>
                                    <th>Vehicles</th>
                                    <th>Amenities</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($outlets as $outlet)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $outlet->outlet_code }}</td>
                                        <td>{{ $outlet->outlet_name }}</td>
                                        <td>{{ $outlet->address }}</td>
                                        <td>{{ $outlet->city }}</td>
                                        <td>{{ $outlet->district }}</td>
                                        <td>{{ $outlet->state }}</td>
                                        <td>{{ $outlet->socket_type }}</td>
                                        <td>{{ $outlet->vehicles }}</td>
                                        <td>{{ strip_tags($outlet->amenities) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        {{ $outlets->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
