<footer class="footer_2">
    <div class="container">
        <div class="footer_top">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer_single_col footer_intro">
                        <img src="{{asset('assets')}}/images/logo2.png" alt="" class="f_logo">
                        <p>{{$settings->description}}</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-2">
                    <div class="footer_single_col information">
                        <h3>Information</h3>
                        <ul class="quick_inf0">
                            <li><a href="{{route('faqs')}}">FAQS</a></li>
                            <li><a href="{{route('termsofuse')}}">Terms of Use</a></li>
                            <li><a href="{{route('privacy')}}">Privacy</a></li>
                            <li><a href="{{route('aboutus')}}">About us</a></li>
                            <li><a href="{{route('contact')}}">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer_single_col contact">
                        <h3>Contact Us</h3>
                        <p>{{$settings->address}}</p>
                        <div class="contact_info">
                            <span>+9{{$settings->phone}}</span>
                            <span class="email">{{$settings->email}}</span>
                        </div>
                        <ul class="social_items d-flex list-unstyled">
                            <li><a href="#"><i class="fab fa-facebook-f fb-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter twitt-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in link-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram ins-icon"></i></a></li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="shapes_bg">
        <img src="{{asset('assets')}}/images/shapes/testimonial_2_shpe_1.png" alt="" class="shape_3">
        <img src="{{asset('assets')}}/images/shapes/footer_2.png" alt="" class="shape_1">
    </div><br><br><br>
</footer><!-- End Footer -->
<section id="scroll-top" class="scroll-top">
    <h2 class="disabled">Scroll to top</h2>
    <div class="to-top pos-rtive">
        <a href="#"><i class = "flaticon-right-arrow"></i></a>
    </div>
</section>

