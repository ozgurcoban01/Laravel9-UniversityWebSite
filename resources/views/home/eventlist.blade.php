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
                            <h1>Event Page</h1>
                            <div class="pages_links">
                                <a href="#" title="">Home</a>
                                <a href="#" title="" class="active">Events Page</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header> <!-- End header -->
@endsection

@section('content')

    <section class="events-area">
        <div class="container">
            <div class="row">
                @foreach($data as $rs)
                    @if($rs->id%2==1)
                        <div class="col-sm-12 events_full_box">
                            <div class="events_single">
                                <div class="event_banner">
                                    <a href="{{route('event',['id'=>$rs->id])}}"><img src="{{Storage::url($rs->image)}}" alt="" class="img-fluid"></a>
                                </div>
                                <div class="event_info">
                                    <h3><a href="{{route('event',['id'=>$rs->id])}}" title="">{{$rs->name}}</a></h3>
                                    <div class="events_time">
                                        <span class="time"><i class="far fa-clock"></i>{{$rs->date}}</span>
                                        <span><i class="fas fa-map-marker-alt"></i>{{$rs->location}}</span>
                                    </div>
                                    <p>{{$rs->description}}</p>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-sm-12 events_full_box">
                            <div class="events_single events_single_left">
                                <div class="event_info">
                                    <h3><a href="{{route('event',['id'=>$rs->id])}}" title="">{{$rs->name}}</a></h3>
                                    <div class="events_time">
                                        <span class="time"><i class="far fa-clock"></i>{{$rs->date}}</span>
                                        <span><i class="fas fa-map-marker-alt"></i>{{$rs->location}}</span>
                                    </div>
                                    <p>{{$rs->description}}</div>
                                <div class="event_banner">
                                    <a href="{{route('event',['id'=>$rs->id])}}"><img src="{{Storage::url($rs->image)}}" alt="" class="img-fluid"></a>
                                </div>

                            </div>
                        </div>
                    @endif
                @endforeach



                <div class="pagination_blog">
                    <ul>
                        <li><a href="#">1</a></li>
                        <li class="current"><a href="#">2</a></li>
                        <li><a href="#" class=""><i class='flaticon-right-arrow'></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- ./ End Events Area section -->

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
