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
                            <h1>{{$data->name}}</h1>
                            <div class="pages_links">
                                <a href="#" title="">Home</a>
                                <a href="{{route('eventlist')}}" title="">Events</a>
                                <a href="#" title="" class="active">Event Details</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header> <!-- End header -->
@endsection

@section('content')

    <section class="event_details_wrapper blog_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="event_intro">
                        <img src="{{Storage::url($data->image)}}" alt="" class="img-fluid">
                        <div class="post_content">
                            <div class="post_by d-flex justify-content-between">
                                <span  class="date_event">{{$data->sdescription}}</span>

                            </div>
                            <div class="blog_post_content">{!! $data->aboutevent !!}</div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4 blog_wrapper_right ">
                    <div class="blog-right-items">


                        <div class="recent_post_wrapper popular_courses_post widget_single">
                            <div class="items-title">
                                <h3 class="title">Our Other Events</h3>
                            </div>

                            @foreach($otherevent as $rs)
                                @if($rs->id!=$data->id)
                                    <div class="single-post">
                                        <div class="recent_img">
                                            <a href="{{route('event',['id'=>$rs->id])}}" title=""><img src="{{Storage::url($rs->image)}}" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="post_title">
                                            <a href="{{route('event',['id'=>$rs->id])}}" title="">{{$rs->name}}</a>
                                            <div class="post-date">
                                                <span>{{$rs->sdate}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="location_bottom_wrapper">
                        <div class="event_details">
                            <div class="details_title">
                                <h3>Event Details</h3>
                            </div>
                            <div class="event_location_info">
                                <ul class="list-unstyled">
                                    <li><p>Date</p><span><b>{{$data->sdate}}</b> to <b>{{$data->edate}}</b></span></li>
                                    <li><p>Time</p><span><b>{{$data->stime}}</b> to <b>{{$data->etime}}</span></li>


                                </ul>
                                <ul class="list-unstyled">
                                    <li><p class="hall_location">Location</p></li>
                                    <li><p>{{$data->location}}</p></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>




            </div>
        </div>
    </section><!-- End Event Details Wrapper -->

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
