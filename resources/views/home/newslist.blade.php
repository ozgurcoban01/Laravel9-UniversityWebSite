@section('title','News')
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
                            <h1>News</h1>
                            <div class="pages_links">
                                <a href="/" title="">Home</a>
                                <a href="#" title="" class="active">News</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header> <!-- End header -->
@endsection

@section('content')

    <section class="blog_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8">

                    @foreach($data as $rs)
                        @if($rs->status=='True')
                            <div class="single_blog">
                                <div class="blog_banner">
                                    <a href="{{route('news',['id'=>$rs->id])}}" title=""><img src="{{Storage::url($rs->image)}}" alt="" class="img-fluid"></a>
                                </div>
                                <div class="post_content_wrapper">
                                    <div class="post_date"><p>{{$rs->date}} - {{$rs->faculties->name}}</p></div>
                                    <h3><a href="{{route('news',['id'=>$rs->id])}}" title="">{{$rs->name}}</a></h3>
                                    <p>{{$rs->description}}</p>
                                    <div class="post_by d-flex justify-content-between">
                                        <a href="{{route('news',['id'=>$rs->id])}}" title="">Read More <i class="flaticon-login-button"></i></a>
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
                </div> <!-- End Blog Right Side--->

                <div class="col-12 col-sm-12 col-md-4 col-lg-4 blog_wrapper_right ">
                    <div class="blog-right-items">

                        <div class="recent_post_wrapper widget_single">
                            <div class="items-title">
                                <h3 class="title">Can You Interest With These Events?</h3>
                            </div>

                            @foreach($events as $rs)
                                @if($rs->status=='True')
                                    <div class="single-post">
                                        <div class="recent_img">
                                            <a href="{{route('event',['id'=>$rs->id])}}" title=""><img src="{{Storage::url($rs->image)}}" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="post_title">
                                            <a href="{{route('event',['id'=>$rs->id])}}" title="">{{$rs->name}}</a>
                                            <div class="post-date">
                                                <span>{{$rs->date}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>

                    </div>
                </div><!-- ./ End  Blog Right Wrapper-->

            </div>
        </div>
    </section><!-- ./ End  Blog Wrapper-->
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
