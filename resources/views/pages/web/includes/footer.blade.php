<footer class="main-footer" style="background-image: url(home/images/pro2.jpg);">
    <div class="main-footer__bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-md-5 wow fadeInUp" data-wow-delay="100ms">
                <div class="main-footer__about">
                    <a href="index.html" class="main-footer__logo">
                        <img src="{{ asset('home/images/greenveel_logo.svg') }}" alt="" width="213"
                            height="55">
                    </a><!-- /.footer-logo -->
                    <p class="main-footer__about__text">Welcome to Greenveel, your partner in the electric vehicle
                        revolution. With cutting-edge
                        EV charging stations for all types of vehicles, we are committed to promoting
                        sustainable mobility.</p>
                    <div class="main-footer__social">
                        <a href="https://www.facebook.com/people/GreenVeel/61560037572517/?mibextid=ZbWKwL"><i
                                class="fab fa-facebook-f"></i></a>

                        <a href="https://www.instagram.com/greenveel_official?igsh=ZGtpanptZ2lhdml5"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://youtube.com/@greenveel?si=n1Pv_M-hPPU_N9iA"><i class="fab fa-youtube"></i></a>
                    </div><!-- /.footer-social -->
                </div><!-- footer-top -->
            </div>
            <div class="col-xl-2 col-md-4 wow fadeInUp" data-wow-delay="200ms">
                <div class="main-footer__navmenu main-footer__widget01">
                    <h3 class="main-footer__title">Quick Links</h3>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About us </a></li>
                        <li><a href="{{ route('outlets') }}">Outlets</a></li>
                        <li><a href="{{ route('blogs') }}">Blogs</a></li>
                        <li><a href="{{ route('contacts') }}">Contact us</a></li>
                    </ul><!-- /.list-unstyled -->
                </div><!-- /.footer-menu -->
            </div>
            <div class="col-xl-3 col-md-4 wow fadeInUp" data-wow-delay="200ms">
                <div class="main-footer__navmenu main-footer__widget01">
                    <h3 class="main-footer__title">Our Outlets</h3>
                    <ul>
                        @foreach ($outLetNames as $outlet)
                            <li><a href="{{ route('outlet-detail', $outlet->id) }}">{{ $outlet->outlet_name }}</a></li>
                        @endforeach
                    </ul><!-- /.list-unstyled -->
                </div><!-- /.footer-menu -->
            </div>

            <div class="col-xl-4 col-md-12 wow fadeInUp" data-wow-delay="400ms">
                <div class="main-footer__newsletter">
                    <h3 class="main-footer__title">Contact Us</h3>
                    <ul class="main-footer__info-list">
                        <li><span class="icon-Location"></span>GreenVeel, Room No: 34/119/C1, Second Floor, P. T. Scaria
                            Pazhukkaniyil Memorial Tower, Thodupuzha-Pala Road, Thodupuzha, Idukki, Kerala. Pin:685584
                        </li>
                        <li><span class="icon-Telephone"></span><a href="tel:9074280494">+91 9074280494</a></li>
                        <li><span class="icon-Email"></span><a
                                href="mailto:greenveelindia@gmail.com">greenveelindia@gmail.com</a></li>
                    </ul>
                </div><!-- /.footer-mailchimp -->
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</footer><!-- /.main-footer -->

<section class="copyright text-center">
    <div class="container wow fadeInUp" data-wow-delay="400ms">
        <p class="copyright__text">Copyright <span class="dynamic-year"></span><!-- /.dynamic-year --> | Greenveel. All
            Rights Reserved</p>
    </div><!-- /.container -->
</section><!-- /.copyright -->

</div><!-- /.page-wrapper -->

<div class="whatsappDiv">
    <a target="_blank" href="https://api.whatsapp.com/send?phone=919074280494"
        data-url="https://api.whatsapp.com/send?phone=919074280494" data-tab-setting="hover"><img
            src="{{ asset('home/images/whatsapp.png') }}"></a>
</div>

<div class="mobile_view">
    <ul>
        <li>
            <a href="tel:9074280494"><i class="fa fa-phone-alt"></i></a>
        </li>
        <li>
            <a target="_blank" href="https://api.whatsapp.com/send?phone=919074280494"
                data-url="https://api.whatsapp.com/send?phone=919074280494" data-tab-setting="hover"><i
                    class="fab fa-whatsapp"></i></a>
        </li>
        <li>
            <a href="outlets.php"><i class="fa fa-store"></i></a>
        </li>
        <li>
            <a href="https://play.google.com/store/apps/details?id=com.chargezone&hl=en_IN"><i
                    class="fa fa-download"></i></a>
        </li>
    </ul>
</div>

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
        <div class="logo-box">
            <a href="index.php" aria-label="logo image"><img src="{{ asset('home/images/greenveel_logo.svg') }}"
                    width="183" height="48" alt="greenveel" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->
        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fas fa-envelope"></i>
                <a href="mailto:greenveelindia@gmail.com">greenveelindia@gmail.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:919074280494">+91 9074280494</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__social">
            <a href="https://www.facebook.com/profile.php?id=61558689990036&mibextid=ZbWKwL"><i
                    class="fab fa-facebook-f"></i></a>

            <a href="https://www.instagram.com/greenveel_official?igsh=ZGtpanptZ2lhdml5"><i
                    class="fab fa-instagram"></i></a>
            <a href="https://youtube.com/@greenveel?si=n1Pv_M-hPPU_N9iA"><i class="fab fa-youtube"></i></a>
        </div><!-- /.mobile-nav__social -->
    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->



<!-- back-to-top-start -->
<a href="#" class="scroll-top">
    <svg class="scroll-top__circle" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</a>
<!-- back-to-top-end -->


<script src="{{ asset('home/vendors/jquery/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('home/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('home/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('home/vendors/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('home/vendors/jarallax/jarallax.min.js') }}"></script>
<script src="{{ asset('home/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('home/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('home/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
<script src="{{ asset('home/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('home/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('home/vendors/nouislider/nouislider.min.js') }}"></script>
<script src="{{ asset('home/vendors/odometer/odometer.min.js') }}"></script>
<script src="{{ asset('home/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
<script src="{{ asset('home/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('home/vendors/wnumb/wNumb.min.js') }}"></script>
<script src="{{ asset('home/vendors/jquery-circleType/jquery.circleType.js') }}"></script>
<script src="{{ asset('home/vendors/jquery-lettering/jquery.lettering.min.js') }}"></script>
<script src="{{ asset('home/vendors/tilt/tilt.jquery.js') }}"></script>
<script src="{{ asset('home/vendors/wow/wow.js') }}"></script>
<script src="{{ asset('home/vendors/isotope/isotope.js') }}"></script>
<script src="{{ asset('home/vendors/countdown/countdown.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- template js -->
<script src="{{ asset('home/js/et.js') }}"></script>
@include('includes.toastr')

</body>

</html>
