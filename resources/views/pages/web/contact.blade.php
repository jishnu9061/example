@include('pages.web.includes.header')

<section class="page-header page-header--bg-two" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
    <div class="page-header__bg jarallax-img"></div><!-- /.page-header-bg -->
    <div class="page-header__overlay"></div><!-- /.page-header-overlay -->
    <div class="container text-center">
        <h2 class="page-header__title">Contact</h2><!-- /.page-title -->
        <ul class="page-header__breadcrumb list-unstyled">
            <li><a href="index.php">Home</a></li>
            <li><span>Contact</span></li>
        </ul><!-- /.page-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->
<!-- Info Start -->
<section class="contact-info">
    <div class="container">
        <ul class="contact-info__wrapper">
            <li>
                <div class="contact-info__icon"><span class="icon-Call"></span></div>
                <p class="contact-info__title">Have any question?</p>
                <h4 class="contact-info__text">Free <a href="tel:9074280494">+91 9074280494</a></h4>
            </li>
            <li class="active">
                <div class="contact-info__icon"><span class="icon-Email"></span></div>
                <p class="contact-info__title">Send Email</p>
                <h4 class="contact-info__text"><a href="mailto:greenveelindia@gmail.com">greenveelindia@gmail.com</a>
                </h4>
            </li>
            <li>
                <div class="contact-info__icon"><span class="icon-Location"></span></div>
                <p class="contact-info__title">Visit us</p>
                <h4 class="contact-info__text">GreenVeel, Room No: 34/119/C1, Second Floor, P. T. Scaria Pazhukkaniyil
                    Memorial Tower, Thodupuzha-Pala Road, Thodupuzha, Idukki, Kerala. Pin:685584</h4>
                <h5 class="contact-info__title mt-3">Office time : 9 am - 5 pm</h5>

            </li>
        </ul>
    </div>
</section>
<!-- Info End -->
<!-- Contact Start -->
<section class="contact-one pt-0">
    <div class="container wow fadeInUp" data-wow-delay="300ms">
        <div class="section-title  text-center">
            <h5 class="section-title__tagline">
                Contact with Us
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
            <h2 class="section-title__title">Feel Free to Write us Anytime</h2>
        </div><!-- section-title -->
        <div class="contact-one__form-box text-center">
            <form id="contactForm" action="{{ route('send-mail') }}" method="post"
                class="contact-one__form contact-form-validated" novalidate="novalidate">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-one__input-box">
                            <input type="text" placeholder="Your Name" name="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-one__input-box">
                            <input type="email" placeholder="Email Address" name="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-one__input-box">
                            <input type="text" placeholder="Phone" name="phone">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-one__input-box">
                            <input type="text" placeholder="Subject" name="subject">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="contact-one__input-box text-message-box">
                            <textarea name="message" placeholder="Write a Message"></textarea>
                        </div>
                        <div class="contact-one__btn-box">
                            <button type="submit" class="eduact-btn eduact-btn-second">
                                <span class="eduact-btn__curve"></span>Send a Message<i class="icon-arrow"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Contact End -->

<!--Google Map Start-->
<section class="google-map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3930.4463983291676!2d76.7076072750298!3d9.896728490203426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOcKwNTMnNDguMiJOIDc2wrA0MiczNi43IkU!5e0!3m2!1sen!2sin!4v1717494272222!5m2!1sen!2sin"
        width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<!--Google Map End-->

@include('pages.web.includes.footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRsN/hYZyoD1t3R2TgC8X5dB2T2syuYrO6+rLdU5e" crossorigin="anonymous">
</script>
<script src="{{ asset('admin/libs/jquery/jquery.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#contactForm').submit(function(e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                success: function(response) {
                    console.log(response);
                    toastr.success('Message sent successfully');
                    $('#contactForm')[0].reset();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    toastr.error('Failed to send message');
                }
            });
        });
    });
</script>
