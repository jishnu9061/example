@include('pages.web.includes.header')

<section class="page-header page-header--bg-two" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
    <div class="page-header__bg jarallax-img"></div><!-- /.page-header-bg -->
    <div class="page-header__overlay"></div><!-- /.page-header-overlay -->
    <div class="container text-center">
        <h2 class="page-header__title">Outlets</h2><!-- /.page-title -->
        <ul class="page-header__breadcrumb list-unstyled">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><span>Outlets</span></li>
        </ul><!-- /.page-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<!-- Course Start -->

    <section class="course-two course-two--page pb-0">
        <div class="container">
            <h2 class="p-0 section-title__tagline">
                Find Our Location
                <svg class="arrow-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55 13">
                    <g clip-path="url(#clip0_324_36194)">
                        <path
                            d="M10.5406 6.49995L0.700562 12.1799V8.56995L4.29056 6.49995L0.700562 4.42995V0.819946L10.5406 6.49995Z" />
                        <path
                            d="M25.1706 6.49995L15.3306 12.1799V8.56995L18.9206 6.49995L15.3306 4.42995V0.819946L25.1706 6.49995Z" />
                        <path
                            d="M39.7906 6.49995L29.9506 12.1799V8.56995L33.5406 6.49995L29.9506 4.42995V0.819946L39.7906 6.49995Z" />
                        <path
                            d="M54.4206 6.49995L44.5806 12.1799V8.56995L48.1706 6.49995L44.5806 4.42995V0.819946L54.4206 6.49995Z" />
                    </g>
                </svg>
            </h2>
            <p>Worked with world’s famous brands and partners</p>
            <form id="filter-form" action="{{ route('outlets') }}" method="GET">
                <div class="row bg-set">
                    <div class="col-md-12 mb-3">
                        <input type="text" name="city_search" placeholder="Search by city" class="form-control"
                            value="{{ request('city_search') }}" />
                    </div>
                    <div class="col-md-3">
                        <select name="vehicle_sort" class="form-control">
                            <option value="">Sort by vehicle</option>
                            <option value="4 wheeler" {{ request('vehicle_sort') == '4 wheeler' ? 'selected' : '' }}>4
                                wheeler</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select name="socket_sort" class="form-control">
                            <option value="">Sort by Socket</option>
                            <option value="4 wheeler" {{ request('socket_sort') == '4 wheeler' ? 'selected' : '' }}>4
                                wheeler</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select name="city_sort" class="form-control">
                            <option value="">City</option>
                            <option value="Kozhikode" {{ request('city_sort') == 'Kozhikode' ? 'selected' : '' }}>
                                Kozhikode</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select name="state_sort" class="form-control">
                            <option value="">State</option>
                            <option value="Kerala" {{ request('state_sort') == 'Kerala' ? 'selected' : '' }}>Kerala
                            </option>
                        </select>
                    </div>
                </div>
            </form>

        </div>
    </section>

    @if ($outlets->isNotEmpty())
    <section class="course-two course-two--page pb-0">
        <div class="container">
            @foreach ($outlets->chunk(3) as $chunk)
                <div class="row">
                    @foreach ($chunk as $outlet)
                        <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="course-two__item">
                                <div class="course-two__thumb">
                                    <img src="{{ asset('home/images/gvl2.jpeg') }}" alt="">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 353 177">
                                        <path
                                            d="M37 0C16.5655 0 0 16.5655 0 37V93.4816C0 103.547 4.00259 113.295 11.7361 119.737C54.2735 155.171 112.403 177 176.496 177C240.589 177 298.718 155.171 341.261 119.737C348.996 113.295 353 103.546 353 93.4795V37C353 16.5655 336.435 0 316 0H37Z" />
                                    </svg>
                                </div><!-- /.course-thumb -->
                                <div class="course-two__content">
                                    <div class="course-two__time">{{ $outlet->outlet_code }}</div>
                                    <p class="course-details__meta__designation mb-2">{{ $outlet->district }}</p>
                                    <h3 class="course-two__title">
                                        <a
                                            href="{{ route('outlet-detail', $outlet->id) }}">{{ $outlet->outlet_name }}</a>
                                    </h3>
                                    <p>{{ $outlet->address }}</p>
                                    <div class="course-two__bottom">
                                        <div class="course-two__authors">
                                            <div class="">
                                                <h5 class="course-two__author__name d-flex justify-content-between"><a
                                                        href="{{ route('outlet-detail', $outlet->id) }}">View
                                                        Details</a> <i class="icon-double-arrow-right"></i></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.course-content -->
                            </div><!-- /.course-card-two -->
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>
@else
    <div class="container py-5">
        <div class="text-center">
            <h2>No outlets found</h2>
            <p>There are currently no outlets available.</p>
        </div>
    </div>
@endif
@include('pages.web.includes.footer')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Handle form submission on select change
        $('select[name="vehicle_sort"], select[name="socket_sort"], select[name="city_sort"], select[name="state_sort"]')
            .change(function() {
                $('#filter-form').submit();
            });
    });
</script>
