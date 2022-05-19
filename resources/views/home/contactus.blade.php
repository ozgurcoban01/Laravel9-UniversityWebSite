@section('title','Events')
@section('desciption',$settings->desciption)
@section('keywords',$settings->keywords)
@section('icon',\Illuminate\Support\Facades\Storage::url($settings->icon))


@extends('layouts.frontpage')
@section('head')
    <link rel="stylesheet" href="{{asset('assets')}}/css/assets/slick.css">
    <!-- Mean Menu-->
    <link rel="stylesheet" href={{asset('assets')}}/"css/assets/meanmenu.css">
    <!-- main style-->
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/demo.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

@endsection

@section('header')
    <header class="header_inner event_page">
        <!-- Preloader -->
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>

        @include('home.headertop')

        @include('home.navbar')

        <div class="intro_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <div class="intro_text">
                            <h1>Contact Page</h1>
                            <div class="pages_links">
                                <a href="#" title="">Home</a>
                                <a href="#" title="" class="active">Contact Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header> <!-- End header -->
@endsection

@section('content')

    <section class="contact_info_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="contact_info">
                        <h3 class="title">Contact Details</h3>
                        <p>You need to be sure there isn't anything embarrassing hidden in the repeat predefined chunks as nessing hidden in the repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                        <div class="event_location_info">
                            <ul class="list-unstyled">
                                <li>
                                    <h4 class="info_title">Address : </h4>
                                    <ul class="list-unstyled">
                                        <li>{{$settings->address}}</li>

                                    </ul>
                                </li>
                                <li>
                                    <h4 class="info_title">Phone Numbers :</h4>
                                    <ul class="list-unstyled">
                                        <li>{{$settings->phone}}</li>

                                    </ul>
                                </li>
                                <li>
                                    <h4 class="info_title">Our E-mails :</h4>
                                    <ul class="list-unstyled">
                                        <li>{{$settings->email}}</li>
                                    </ul>
                                </li>
                            </ul>
                            <img src="{{asset('assets')}}/images/banner/map_shape.png" alt="" class="contact__info_shpae">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="contact_form_wrapper">
                        <h3 class="title">Get In Touch</h3>
                        <div class="leave_comment">
                            <div class="contact_form">
                                <form action="{{route('storemessage')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6 form-group">
                                            <input type="text" class="form-control" id="name" name="name"  placeholder="Your Name">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 form-group">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Your E-mail">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 form-group">
                                            <input type="text" class="form-control" id="subject"  name="subject"placeholder="Pick Your Subject">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 form-group">
                                            <textarea class="form-control" id="message" name="message" placeholder="Your Comment Wite Here ..."></textarea>
                                            <script>
                                                ClassicEditor
                                                    .create( document.querySelector( '#message' ) )
                                                    .then( editor => {
                                                        console.log( editor );
                                                    } )
                                                    .catch( error => {
                                                        console.error( error );
                                                    } );
                                            </script>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 submit-btn">
                                            <button type="submit" class="text-center">Send Massage</button>
                                        </div>
                                        <h1>{{\Illuminate\Support\Facades\Session::get('info')}}</h1>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- Contact Info Wrappper-->


@endsection

@section('scripts')
    <!-- JavaScript -->
    <script src="{{asset('assets')}}/js/jquery-3.2.1.min.js"></script>
    <script src="{{asset('assets')}}/js/popper.min.js"></script>
    <script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('assets')}}/js/slick.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.meanmenu.min.js"></script>
    <script src="{{asset('assets')}}/js/wow.min.js"></script>
    <!-- Counter Script -->
    <script src="{{asset('assets')}}/js/waypoints.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.counterup.min.js"></script>
    <script src="{{asset('assets')}}/js/custom.js"></script>
@endsection
