@include('pages.web.includes.header')

<section class="page-header page-header--bg-two" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
    <div class="page-header__bg jarallax-img"></div><!-- /.page-header-bg -->
    <div class="page-header__overlay"></div><!-- /.page-header-overlay -->
    <div class="container text-center">
        <h2 class="page-header__title">{{ $outlet->outlet_name }}</h2><!-- /.page-title -->
        <ul class="page-header__breadcrumb list-unstyled">
            <li><a href="index.php">Home</a></li>
            <li><span>Course</span></li>
        </ul><!-- /.page-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<!-- course-details-start -->
<section class="course-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="course-details__thumb">
                    <img src="{{ \App\Http\Helpers\BlogHelper::getOutletImagePath($outlet->image) }}" alt="greenveel" />
                </div><!-- details-thumb -->
                <div class="course-two__time">{{ $outlet->outlet_code }}</div>
                <h3 class="course-details__title mb-2">{{ $outlet->outlet_name }}</h3><!-- details-title -->
                <div class="course-details__meta">
                    <div class="course-details__meta__author p-0">
                        <p class="course-details__meta__designation mb-2">{{ $outlet->district }}</p>

                        <h5 class="course-details__meta__name"> {{ $outlet->address }}</h5>
                    </div>

                </div><!-- details-meta -->
                <div class="course-details__tabs tabs-box">
                    <div class="course-details__overview">
                        <p class="course-details__overview__text">
                            {!! $outlet->amenities !!}
                        </p>
                        <ul class="list-unstyled course-details__overview__lists">
                            <li><span class="icon-check"></span>Relax in our comfy seating area with fans to keep you
                                cool.</li>
                            <li><span class="icon-check"></span>Enjoy clean washrooms and convenient mobile charging
                                ports.</li>
                            <li><span class="icon-check"></span>Experience hassle-free EV charging at GreenVeel.</li>
                            <li><span class="icon-check"></span>Enjoy newspapers and magazines while you wait.</li>
                            <li><span class="icon-check"></span>Stay secure with 24/7 camera surveillance.</li>
                            <li><span class="icon-check"></span>Convenient access to a supermarket and coffee shop.</li>
                            <li><span class="icon-check"></span>Visit FirstCry and Cucumba beauty parlor in the same
                                building.</li>
                        </ul>
                    </div>
                    <div class="tabs-content">
                        <div class="tab fadeInUp animated" id="overview">

                        </div><!-- tab-content-overview -->

                    </div><!-- tab-content -->
                </div><!-- tabs -->
            </div>
            <div class="col-xl-4 wow fadeInRight" data-wow-delay="300ms">
                <div class="course-details__sidebar">
                    <div class="course-details__sidebar__item">
                        <h3 class="course-details__sidebar__title">Station Details</h3>
                        <ul class="course-details__sidebar__lists clerfix socket-list">
                            <li>
                                <div class="mb-2"><img src="{{ asset('home/images/icons/socket.png') }}"
                                        class="me-2 " width="25">Socket Type:</div>
                                <h5> {!! $outlet->socket_type !!}</h5>
                            </li>
                            <li>
                                <div class="mb-2"><img src="{{ asset('home/images/icons/wheel.png') }}" width="25"
                                        class="me-2">Vehicles:</div>
                                <h5>{{ $outlet->vehicles }}</h5>
                            </li>


                        </ul>

                    </div>
                    <div class="course-details__sidebar__item">
                        <ul class="course-details__sidebar__lists clerfix">
                            <li style="border:none;padding-bottom:10px;"><i class="icon-Location"></i></i>Map:</li>
                            <span>
                                <h6><a href="https://maps.app.goo.gl/1tivjL1XMZma8HWt9">{{ $outlet->map }}</a></h6>
                            </span>
                        </ul>
                    </div>


                    <div class="course-details__sidebar__item">
                        <h3 class="course-details__sidebar__title">Other Stations</h3>
                        <ul class="course-details__sidebar__post">
                            @foreach ($stations as $station)
                                <li>
                                    <div class="course-details__sidebar__post__image">
                                        <img src="{{ asset('home/images/outlet.jpeg') }}" alt="greenveel">
                                    </div>
                                    <div class="course-details__sidebar__post__content">
                                        <span class="course-details__sidebar__post__meta"> <a
                                                href="{{ route('outlets') }}">{{ $station->district }}</a></span>
                                        <h3 class="course-details__sidebar__post__title"><a
                                                href="{{ route('outlet-detail', $station->id) }}">{{ $station->address }}</a>
                                        </h3>

                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- course-details-end -->
@include('pages.web.includes.footer')
