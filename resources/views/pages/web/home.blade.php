@include('pages.web.includes.header')
<!--Hero Banner Start-->
<section class="hero-banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-banner__content">
                    <div class="hero-banner__bg-shape1 wow zoomIn" data-wow-delay="300ms">
                        <div class="hero-banner__bg-round">
                            <div class="hero-banner__bg-round-border"></div>
                        </div>
                    </div>
                    <h2 class="hero-banner__title wow fadeInUp" data-wow-delay="400ms">Let’s build a greener future
                        together</h2>
                    <p class="hero-banner__text wow fadeInUp" data-wow-delay="500ms">
                        Embrace the future of transportation with Greenveel, where every charge powers a cleaner and
                        greener world. Join us in driving innovation and sustainability and Power Up Your Drive.
                    </p>
                    <div class="hero-banner__btn wow fadeInUp" data-wow-delay="600ms">
                        <a href="{{ route('about') }}" class="eduact-btn eduact-btn-second"><span
                                class="eduact-btn__curve"></span>Explore
                            More<i class="icon-arrow"></i></a>
                        <a href="{{ route('outlets') }}" class="eduact-btn"><span class="eduact-btn__curve"></span>Our
                            Outlets<i class="icon-arrow"></i></a>
                    </div><!-- banner-btn -->
                </div><!-- banner-content -->
            </div>
            <div class="col-lg-6">
                <div class="hero-banner__thumb wow fadeInUp" data-wow-delay="700ms">
                    <img src="{{ asset('home/images/greenveel_gif.gif') }}">
                </div>
            </div>
        </div>
    </div>
    <div class="hero-banner__border wow fadeInUp" data-wow-delay="1100ms"></div><!-- banner-border -->
</section>
<!--Hero Banner End-->
<!-- Service Start -->
@if ($partners->isNotEmpty())
<section class="service-one pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3">
                <h2 class="p-0 section-title__tagline">
                    Our Partners
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
            </div>
            <div class="col-md-9">
                <div class="client-carousel @@extraClassName">
                    <div class="container">
                        <div class="client-carousel__one eduact-owl__carousel owl-theme owl-carousel"
                            data-owl-options='{
                                "items": 5,
                                "margin": 25,
                                "smartSpeed": 700,
                                "loop": true,
                                "autoplay": 6000,
                                "nav": false,
                                "dots": false,
                                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                "responsive":{
                                    "0":{
                                        "items":2,
                                        "margin": 5
                                    },
                                    "450":{
                                        "items":2,
                                        "margin": 5
                                    },
                                    "768":{
                                        "items":3,
                                        "margin": 40
                                    },
                                    "992":{
                                        "items": 4,
                                        "margin": 40
                                    },
                                    "1200":{
                                        "items": 5
                                    }
                                }
                            }'>
                            @foreach ($partners as $partner)
                                <div class="client-carousel__one__item">
                                    <img class="client-carousel__normal"
                                        src="{{ \App\Http\Helpers\PartnerHelper::getPartnerImagePath($partner->image) }}"
                                        alt="">
                                    <img class="client-carousel__hover"
                                        src="{{ \App\Http\Helpers\PartnerHelper::getPartnerImagePath($partner->image) }}"
                                        alt="">
                                </div><!-- /.owl-slide-item-->
                            @endforeach
                        </div><!-- /.thm-owl__slider -->
                    </div><!-- /.container -->
                </div><!-- /.client-carousel -->
            </div>
        </div>
    </div>
</section>
@endif
<!-- Service End -->
<!-- About Start -->
<section class="about-three">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="100ms">
                <div class="about-three__content"><!-- about content start-->
                    <div class="section-title">
                        <h5 class="section-title__tagline">
                            About Us
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
                        </h5>
                        <h2 class="section-title__title">Join the movement towards a greener future.</h2>
                    </div><!-- section-title -->
                    <p class="about-three__content__text">
                        Welcome to Greenveel, your partner in the electric vehicle revolution. With cutting-edge
                        EV charging stations for all types of vehicles, we are committed to promoting
                        sustainable mobility. In our potential as Charging Network Operators, we supervise and
                        run an extensive network of chargers to provide simple and accessible access.

                    </p>

                    <div class="fact-two__inner">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-6 wow fadeInUp" data-wow-delay="100ms">
                                <div class="fact-two__item text-center">
                                    <div class="fact-two__icon"><img src="{{ asset('home/images/icons/2.png') }}">
                                    </div>
                                    <div class="fact-two__count">
                                        <span class="count-box">
                                            <span class="count-text" data-stop="{{ $counts->charging_stations }}"
                                                data-speed="1500"></span>
                                        </span>
                                    </div><!-- /.fact-two__count -->
                                    <h3 class="fact-two__title">Charging stations</h3><!-- /.fact-two__title -->
                                </div><!-- /.fact-item -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-6 wow fadeInUp" data-wow-delay="200ms">
                                <div class="fact-two__item fact-two__item--smnone text-center">
                                    <div class="fact-two__icon"><img src="{{ asset('home/images/icons/3.png') }}">
                                    </div>
                                    <div class="fact-two__count">
                                        <span class="count-box">
                                            <span class="count-text" data-stop="{{ $counts->hours_of_charging }}"
                                                data-speed="1500"></span>
                                        </span>
                                    </div><!-- /.fact-two__count -->
                                    <h3 class="fact-two__title">Hours of charging</h3><!-- /.fact-two__title -->
                                </div><!-- /.fact-item -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-6 wow fadeInUp" data-wow-delay="300ms">
                                <div class="fact-two__item text-center">
                                    <div class="fact-two__icon"><img src="{{ asset('home/images/icons/4.png') }}">
                                    </div>
                                    <div class="fact-two__count">
                                        <span class="count-box">
                                            <span class="count-text" data-stop="{{ $counts->active_users }}"
                                                data-speed="1500"></span>
                                        </span>
                                    </div><!-- /.fact-two__count -->
                                    <h3 class="fact-two__title">Active users</h3><!-- /.fact-two__title -->
                                </div><!-- /.fact-item -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-6 wow fadeInUp" data-wow-delay="400ms">
                                <div class="fact-two__item fact-two__item--noborder text-center">
                                    <div class="fact-two__icon"><img src="{{ asset('home/images/icons/1.png') }}">
                                    </div>
                                    <div class="fact-two__count">
                                        <span class="count-box">
                                            <span class="count-text" data-stop="{{ $counts->cities }}"
                                                data-speed="1500"></span>
                                        </span>
                                    </div><!-- /.fact-two__count -->
                                    <h3 class="fact-two__title">Cities</h3><!-- /.fact-two__title -->
                                </div><!-- /.fact-item -->
                            </div>
                        </div>
                    </div>
                    <div class="about-three__br"></div>
                    <a href="{{ route('about') }}" class="eduact-btn"><span
                            class="eduact-btn__curve"></span>Discover More<i class="icon-arrow"></i></a><!-- /.btn -->
                </div><!-- about content end -->
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="100ms">
                <div class="about-three__thumb"><!-- about thumb start -->
                    <div class="about-three__thumb__one eduact-tilt"
                        data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 2, "speed": 700, "scale": 1 }'>
                        <img src="{{ asset('home/images/abt.jpg') }}">
                    </div><!-- /.about-thumb-one -->
                    <div class="about-three__thumb__shape-one"></div><!-- /.about-shape-one -->
                    <div class="about-three__thumb__shape-two"></div><!-- /.about-shape-two -->
                    <div class="about-three__thumb__shape-three">
                        <span></span><span></span><span></span><span></span><span></span>
                    </div>

                    <!-- /.about-shape-three -->

                    <div class="about-three__thumb__shape-four hero-banner__video wow zoomIn" data-wow-delay="950ms"
                        style="background-image: url(home/images/resources/banner-video.png);">
                        <a href="https://www.youtube.com/watch?v=FTOS6cwJNCs" class="video-popup"><span
                                class="icon-play"></span></a>
                    </div><!-- banner-video -->
                    <div class="about-three__thumb__shape-five">

                        <span></span><span></span><span></span><span></span><span></span>
                    </div>
                    <!-- /.about-shape-five -->
                    <div class="about-three__thumb__shape-six">
                        <span></span><span></span><span></span><span></span><span></span>
                    </div>
                    <!-- /.about-shape-six -->
                    <div class="about-three__thumb__shape-seven"></div><!-- /.about-shape-seven -->
                </div><!-- about thumb end -->
            </div>
        </div>
    </div>
</section>
<!-- About End -->
<section class="course-details pt-2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <h3 class="course-details__title">Invest in the EV Revolution with Greenveel</h3><!-- details-title -->
                <div class="course-details__tabs tabs-box">
                    <ul class="course-details__tabs__lists tab-buttons list-unstyled">
                        <li data-tab="#overview" class="tab-btn active-btn"><span>Corporate Owned and Operated
                            </span></li>
                        <li data-tab="#curriculum" class="tab-btn"><span>Franchisee Owned Corporate Operated</span>
                        </li>
                        <li data-tab="#reviews" class="tab-btn"><span>Invest in Corporate Owned and Operated
                            </span></li>

                    </ul><!-- tab-title -->
                    <div class="tabs-content">
                        <div class="tab active-tab fadeInUp animated" id="overview">
                            <div class="course-details__overview">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="course-details__curriculum__title">Corporate Owned and Operated</h4>
                                        <p class="course-details__overview__text">
                                            Effortless integration, zero hassle, and a boost to your business with our
                                            company-operated system!
                                        </p>
                                        <p class="course-details__overview__text">
                                            <b>Installation : </b> We install the EV supercharging station at your
                                            premises at no cost.
                                        </p>
                                        <p class="course-details__overview__text">
                                            <b>Management : </b> We handle all operations, maintenance, and customer
                                            support.
                                        </p>
                                        <p class="course-details__overview__text">
                                            <b>Revenue Sharing : </b> Benefit from a share of the charging revenue
                                            generated.
                                        </p>
                                        <h5>Who can adopt?</h5>
                                        <p class="course-details__overview__text"> Restaurants, supermarkets, malls,
                                            theaters, petrol pumps, and hospitals can all
                                            boost their business by attracting high-value EV customers with our
                                            supercharging stations.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{ asset('home/images/gvl1.jpeg') }}" class="img-fluid"
                                            style="border-radius:5px">
                                    </div>
                                </div>


                            </div>
                        </div><!-- tab-content-overview -->
                        <div class="tab fadeInUp animated" id="curriculum">
                            <div class="course-details__curriculum">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="course-details__curriculum__title">Franchisee Owned Corporate
                                            Operated</h4>
                                        <p class="course-details__overview__text">
                                            Transform your land into a profit powerhouse with Greenveel’s EV
                                            supercharging stations.
                                        </p>
                                        <h5>Who can adopt?</h5>
                                        <p class="course-details__overview__text"> Perfect for landowners near roads
                                            looking for maximum returns. Attract premium
                                            EV users, rake in charging revenue, and sweeten the deal with extra
                                            amenities. It's your ticket to double-dipping in the EV revolution!</p>
                                        <p class="course-details__overview__text">
                                            <b>Ownership : </b>Own a Greenveel EV supercharging station and control your
                                            profit hub!
                                        </p>
                                        <p class="course-details__overview__text">
                                            <b>Management : </b> We handle all operations, maintenance, and customer
                                            support.
                                        </p>
                                        <p class="course-details__overview__text">
                                            <b>Marketing : </b>: Attract high-value EV users with convenience and
                                            reliability.
                                        </p>

                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{ asset('home/images/outlet.jpeg') }}" class="img-fluid"
                                            style="border-radius:5px">
                                    </div>
                                </div>

                            </div>
                        </div><!-- tab-content-curriculum -->
                        <div class="tab fadeInUp animated" id="reviews">
                            <div class="course-details__comment">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="course-details__curriculum__title">Invest in Corporate Owned and
                                            Operated</h4>
                                        <p class="course-details__overview__text">
                                            Invest in our strategically located EV Super Charging Stations and tap into
                                            high returns with COO!
                                        </p>
                                        <h5>Who can Invest?</h5>
                                        <ol>
                                            <li class="course-details__overview__text">Investors seeking sustainable
                                                ventures can opt for Company Owned and
                                                Operated EV Charging stations, tapping into the booming electric vehicle
                                                market. From individuals to corporations, anyone passionate about clean
                                                energy can power up their portfolio with these charging stations</li>
                                            <li class="course-details__overview__text">Charge up your portfolio with
                                                Company Owned and Operated EV Charging
                                                stations, a sustainable investment in the booming electric vehicle
                                                market.
                                                Whether you're an individual or a corporation, ride the wave of clean
                                                energy and power up your profits!
                                            </li>
                                        </ol>
                                        <p class="course-details__overview__text">
                                            <b>Ownership : </b>Own one of our stations, managed and maintained by us.
                                        </p>
                                        <p class="course-details__overview__text">
                                            <b>Profit Sharing : </b> Individuals contribute a tiny fraction of their
                                            earnings to the operating company.
                                        </p>
                                        <p class="course-details__overview__text">
                                            <b>Marketing : </b>: Maximize revenue with our targeted marketing support!
                                        </p>

                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{ asset('home/images/outlet.jpeg') }}" class="img-fluid"
                                            style="border-radius:5px">
                                    </div>
                                </div>

                            </div><!-- tab-content-reviews -->

                        </div><!-- tab-content -->
                    </div><!-- tabs -->
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Testimonial Start -->
<section class="team-one" style="background-image: url(home/images/greenveelbg.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="section-title">

                    <h2 class="section-title__title">Start Your EV Station with <br>Greenveel and Start Profiting </h2>
                </div><!-- section-title -->
            </div>
            <div class="col-md-7">

                <div class="testimonial-one__area">
                    <div class="testimonial-one__carousel eduact-owl__carousel owl-with-shadow owl-theme owl-carousel"
                        data-owl-options='{
                "items": 1,
                "margin": 0,
                "smartSpeed": 700,
                "loop":true,
                "autoplay": true,
                "nav":true,
                "dots":false,
                "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow\"></span>"]
                }'>
                        <!-- Testimonial Item -->
                        <div class="item">
                            <div class="testimonial-one__item">
                                <div class="testimonial-one__author">
                                    <img src="{{ asset('home/images/img/g1.jpg') }}" alt="eduact">
                                </div><!-- testimonial-author -->
                                <div class="testimonial-one__content">
                                    <div class="testimonial-one__meta mb-3">
                                        <h5 class="testimonial-one__title">Turnkey solutions</h5>

                                    </div><!-- testimonial-meta -->
                                    <div class="testimonial-one__quote">
                                        From setup to operation, we've got you covered. Enjoy seamless implementation
                                        and high returns, effortlessly.
                                    </div><!-- testimonial-quote -->

                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Item -->
                        <!-- Testimonial Item -->
                        <div class="item">
                            <div class="testimonial-one__item">
                                <div class="testimonial-one__author">
                                    <img src="{{ asset('home/images/img/g2.jpg') }}" alt="eduact">
                                </div><!-- testimonial-author -->
                                <div class="testimonial-one__content">
                                    <div class="testimonial-one__meta mb-3">
                                        <h5 class="testimonial-one__title">Digital Marketing & 24/7 Support</h5>

                                    </div><!-- testimonial-meta -->
                                    <div class="testimonial-one__quote">
                                        Boost your EV station's visibility with Greenveel's expert digital marketing!
                                        Enjoy round-the-clock customer support to keep your business running smoothly.
                                    </div><!-- testimonial-quote -->

                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Item -->
                        <!-- Testimonial Item -->
                        <div class="item">
                            <div class="testimonial-one__item">
                                <div class="testimonial-one__author">
                                    <img src="{{ asset('home/images/img/g3.jpg') }}" alt="eduact">
                                </div><!-- testimonial-author -->
                                <div class="testimonial-one__content">
                                    <div class="testimonial-one__meta mb-3">
                                        <h5 class="testimonial-one__title">OCPP Compliant Chargers</h5>

                                    </div><!-- testimonial-meta -->
                                    <div class="testimonial-one__quote">
                                        Discover Greenveel's cutting-edge EV chargers, OCPP compliant for seamless
                                        integration and efficiency.
                                    </div><!-- testimonial-quote -->

                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Item -->
                        <!-- Testimonial Item -->
                        <div class="item">
                            <div class="testimonial-one__item">
                                <div class="testimonial-one__author">
                                    <img src="{{ asset('home/images/img/g4.jpg') }}" alt="eduact">
                                </div><!-- testimonial-author -->
                                <div class="testimonial-one__content">
                                    <div class="testimonial-one__meta mb-3">
                                        <h5 class="testimonial-one__title">Master Station Management with Greenveel CMS
                                        </h5>

                                    </div><!-- testimonial-meta -->
                                    <div class="testimonial-one__quote">
                                        Optimize your station management with Greenveel's intuitive CMS. Easily monitor,
                                        control, and maximize efficiency with our comprehensive platform.
                                    </div><!-- testimonial-quote -->

                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Item -->
                        <div class="item">
                            <div class="testimonial-one__item">
                                <div class="testimonial-one__author">
                                    <img src="{{ asset('home/images/img/g5.jpg') }}" alt="eduact">
                                </div><!-- testimonial-author -->
                                <div class="testimonial-one__content">
                                    <div class="testimonial-one__meta mb-3">
                                        <h5 class="testimonial-one__title">Charge hassle-free with Greenveel</h5>

                                    </div><!-- testimonial-meta -->
                                    <div class="testimonial-one__quote">
                                        Enjoy seamless access and control at your fingertips, ensuring a smooth and
                                        efficient charging experience wherever you are.
                                    </div><!-- testimonial-quote -->

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial End -->
<!-- Category Start -->
@if ($outlets->isNotEmpty())
<section class="category-three">
    <div class="container wow fadeInUp" data-wow-delay="200ms">
        <div class="section-title text-center">
            <h5 class="section-title__tagline" style="color:white">
                Our Outlets
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
            </h5>
            <h2 class="section-title__title" style="color:white">Recent Outlets</h2>
        </div><!-- section-title -->
        <div class="row">
            @foreach ($outlets as $outlet)
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="category-three__item category-three__item-two">
                        <div class="category-three__thumb">
                            <img src="{{ asset('home/images/pro4.jpg') }}" alt="{{ $outlet->city }}" />
                        </div><!-- /.category-thumb -->
                        <div class="category-three__icon">
                            <span class="icon-Location"></span>
                        </div><!-- /.category-icon -->
                        <h3 class="category-three__title"><a
                                href="{{ route('outlet-detail', $outlet->id) }}">{{ $outlet->city }}</a></h3>
                        <!-- /.category-title -->
                    </div><!-- /.category-card-one -->
                </div>
            @endforeach
        </div>
        <div class="section-title text-center">
            <a href="{{ route('outlets') }}" class="eduact-btn eduact-btn-second"><span
                    class="eduact-btn__curve"></span>Discover More<i class="icon-arrow"></i></a><!-- /.btn -->
        </div>
    </div>
</section>
@endif
<!-- Category End -->
<!-- Service Start -->
<section class="service-one">

    <div class="container">
        <div class="section-title wow fadeInLeft" data-wow-delay="100ms">
            <h5 class="section-title__tagline">
                App usage
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
            </h5>
            <h2 class="section-title__title">How to charge your EV with Chargezone App</h2>
        </div><!-- section-title -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="service-one__item">
                    <div class="service-one__wrapper">
                        <div class="service-one__icon">
                            <img src="{{ asset('home/images/app/1.png') }}" />
                        </div><!-- /.service-icon -->
                        <h3 class="service-one__title">
                            <a href="#">Locate your nearest charging station from the Chargezone App.</a>
                        </h3><!-- /.service-title -->

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 118 129" fill="none">
                            <path
                                d="M0.582052 143.759C135.395 113.682 145.584 0.974413 145.584 0.974413L173.881 89.6286C173.881 89.6286 0.582054 322.604 0.582052 143.759Z"
                                fill="#F1F2FD" />
                        </svg>
                    </div>
                </div><!-- /.service-card-one -->
            </div>
            <div class="col-lg-3 col-md-6 col-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="service-one__item">
                    <div class="service-one__wrapper">
                        <div class="service-one__icon">
                            <img src="{{ asset('home/images/app/2.png') }}" />
                        </div><!-- /.service-icon -->
                        <h3 class="service-one__title">
                            <a href="#">Connect the charger to your EV</a>
                        </h3><!-- /.service-title -->

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 118 129" fill="none">
                            <path
                                d="M0.582052 143.759C135.395 113.682 145.584 0.974413 145.584 0.974413L173.881 89.6286C173.881 89.6286 0.582054 322.604 0.582052 143.759Z"
                                fill="#F1F2FD" />
                        </svg>
                    </div>
                </div><!-- /.service-card-one -->
            </div>
            <div class="col-lg-3 col-md-6 col-6 wow fadeInUp" data-wow-delay="300ms">
                <div class="service-one__item">
                    <div class="service-one__wrapper">
                        <div class="service-one__icon">
                            <img src="{{ asset('home/images/app/3.png') }}" />
                        </div><!-- /.service-icon -->
                        <h3 class="service-one__title">
                            <a href="#">Use the Chargezone App / rfid card to start charging.</a>
                        </h3><!-- /.service-title -->

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 118 129" fill="none">
                            <path
                                d="M0.582052 143.759C135.395 113.682 145.584 0.974413 145.584 0.974413L173.881 89.6286C173.881 89.6286 0.582054 322.604 0.582052 143.759Z"
                                fill="#F1F2FD" />
                        </svg>
                    </div>
                </div><!-- /.service-card-one -->
            </div>
            <div class="col-lg-3 col-md-6 col-6 wow fadeInUp" data-wow-delay="400ms">
                <div class="service-one__item">
                    <div class="service-one__wrapper">
                        <div class="service-one__icon">
                            <img src="{{ asset('home/images/app/4.png') }}" />
                        </div><!-- /.service-icon -->
                        <h3 class="service-one__title">
                            <a href="about.php">Charge and pay conveniently.</a>
                        </h3><!-- /.service-title -->

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 118 129" fill="none">
                            <path
                                d="M0.582052 143.759C135.395 113.682 145.584 0.974413 145.584 0.974413L173.881 89.6286C173.881 89.6286 0.582054 322.604 0.582052 143.759Z"
                                fill="#F1F2FD" />
                        </svg>
                    </div>
                </div><!-- /.service-card-one -->
            </div>
        </div>
    </div>
</section>
<!-- Service End -->
<section class="become-team">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 wow fadeInUp animated" data-wow-delay="300ms">
                <div class="become-team__content">
                    <h3 class="become-team__title">Who we are!</h3>

                    <p class="become-team__text">
                        At Greenveel, we're not just about providing charging stations; we're driving sustainable
                        mobility. Our mission is to innovate and redefine how electric vehicles are used. With our
                        reliable, cutting-edge charging solutions, we empower drivers to switch to electric vehicles
                        confidently. Committed to customer satisfaction and environmental responsibility, Greenveel
                        leads the way to a cleaner, greener future. Join us on this electrifying journey towards a
                        brighter, cleaner, and more sustainable future for all.</p>
                    <ul class="become-team__list">
                        <li>Unwavering focus on innovation and sustainability</li>
                        <li>Innovative Charging Solutions</li>
                        <li>Community-Centric Approach</li>

                    </ul>

                </div>
            </div>
            <div class="col-lg-5 wow fadeInUp animated" data-wow-delay="400ms">
                <div class="become-team__form-box">
                    <h3 class="become-team__form-box__title">For Enquiry</h3>
                    <form id="enquiryForm" action="{{ route('store-enquiry') }}"
                        class="row become-team__form contact-form-validated" method="post" novalidate="novalidate">
                        @csrf
                        <div class="become-team__input-box col-md-6">
                            <input type="text" placeholder="Your Name" name="name">
                        </div>
                        <div class="become-team__input-box col-md-6">
                            <input type="text" placeholder="Phone Number" name="phone">
                        </div>
                        <div class="become-team__input-box col-md-12">
                            <input type="email" placeholder="Email Address" name="email">
                        </div>
                        <div class="become-team__input-box text-message-box col-md-12">
                            <textarea name="message" placeholder="Comment"></textarea>
                        </div>
                        <div class="become-team__btn-box">
                            <button type="button" id="submitForm" class="eduact-btn eduact-btn-second"><span
                                    class="eduact-btn__curve"></span>Submit Now<i class="icon-arrow"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Start -->
@if ($blogs->isNotEmpty())
<section class="blog-three" style="background-image: url({{ asset('home/images/shapes/blog-bg-3.jpg') }});">
    <div class="container">
        <div class="section-title text-center wow fadeInUp" data-wow-delay="100ms">
            <h5 class="section-title__tagline">
                Latest Blog
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
            </h5>
            <h2 class="section-title__title">Latest Updates & Articles</h2>
        </div><!-- section-title -->
        <div class="row">
            @foreach ($blogs as $post)
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="{{ $loop->iteration * 100 }}ms">
                    <div class="blog-three__item">
                        <div class="blog-three__image">
                            <img src="{{ \App\Http\Helpers\BlogHelper::getBlogImagePath($post->images) }}"
                                alt="{{ $post->title }}">
                            <a href="{{ route('blog-detail', $post->id) }}"></a>
                        </div><!-- /.blog-image -->
                        <div class="blog-three__content">
                            <div class="blog-three__top-meta">
                                <div class="blog-three__date">{{ $post->created_at->format('d M, Y') }}</div>
                                <!-- /.blog-date -->
                            </div>
                            <h3 class="blog-three__title">
                                <a href="{{ route('blog-detail', $post->id) }}">{{ $post->title }}</a>
                            </h3><!-- /.blog-title -->
                            <div class="blog-three__meta d-flex">
                                <div class="blog-three__meta__author">
                                    <p>{{ strip_tags($post->blog_details) }}</p>
                                </div>
                                <a class="blog-three__rm" href="{{ route('blog-detail', $post->id) }}"><span
                                        class="icon-arrow"></span></a><!-- /.read-more-btn -->
                            </div><!-- /.blog-meta -->
                        </div><!-- /.blog-content -->
                    </div><!-- /.blog-card-one -->
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif
<!-- Blog End -->

<!-- Call To Action Start -->
<section class="cta-two" id="download">
    <div class="container">
        <div class="cta-two__bg">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInLeft mobileappcontnet" data-wow-delay="200ms">
                    <h3 class="cta-two__title mb-4">Let’s download free from <br>apple and play store</h3>

                    <div>
                        <a href="https://play.google.com/store/apps/details?id=com.chargezone&hl=en_IN"
                            target="_blank"><img src="{{ asset('home/images/play-store.png') }}" class="mb-1"></a>
                        <a href="https://apps.apple.com/in/app/charge-zone-ev-charging-india/id1627426498"
                            target="_blank"><img src="{{ asset('home/images/apple-stroe.png') }}"
                                class="mb-1"></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mobileapp wow fadeInRight" data-wow-delay="200ms"
                        style="background-image: url(home/images/mobile-bg.png);background-repeat: no-repeat;
    background-position: center;">
                        <img class="floating" src="{{ asset('home/images/mobile1.png') }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call To Action End -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRsN/hYZyoD1t3R2TgC8X5dB2T2syuYrO6+rLdU5e" crossorigin="anonymous">
</script>
<script src="{{ asset('admin/libs/jquery/jquery.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#submitForm').click(function(e) {
            e.preventDefault();

            // Serialize form data
            var formData = $('#enquiryForm').serialize();

            // Submit via AJAX
            $.ajax({
                url: $('#enquiryForm').attr('action'),
                type: 'POST',
                data: formData,
                success: function(response) {
                    // Handle success response
                    console.log(response); // Log response for debugging
                    toastr.success(
                    'Enquiry submitted successfully'); // Show toastr success message
                    $('#enquiryForm')[0].reset(); // Reset form
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.error(xhr.responseText); // Log error response for debugging
                    toastr.error('Failed to submit enquiry'); // Show toastr error message
                }
            });
        });
    });
</script>



@include('pages.web.includes.footer')
