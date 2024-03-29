@section('title','Announces')
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
    <link rel="stylesheet" href="{{asset('assets')}}/teacherstar/style.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{asset('assets')}}/newspageslider/style.css">
    <script src="{{asset('assets')}}/teacherstar/script.js"></script>
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
                            <h1>News Details Page</h1>
                            <div class="pages_links">
                                <a href="#" title="">Home</a>
                                <a href="{{route('newslist')}}" title="">News</a>
                                <a href="#" title="" class="active">News Details</a>
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
                    <div class="blog_post">
                        <h3>{{$data->name}}</h3>
                        <div class="post_by d-flex">
                            <span>Location - {{$data->location}}</span>
                            <span>Posted On : {{$data->date}}</span>

                        </div>
                        <img src="{{Storage::url($data->image)}}" alt="" class="img-fluid">
                        <div class="postpage_content_wrapper">
                            <div class="social_wrapper">

                            </div>
                            <div class="blog_post_content">
                                {{$data->description}}
                                <div style="overflow: hidden" class="thumb" >
                                    <!-- Основной блок слайдера -->
                                    <div class="slider">
                                        @foreach($images as $rs)
                                            @if($rs->content_id==$data->id)
                                                @if($rs->status=='True')
                                                    <div class="item">
                                                        <div class="banner">
                                                            <img src="{{Storage::url($rs->image)}}" alt="" class="img-fluid">
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif
                                        @endforeach


                                    <!-- Кнопки-стрелочки -->
                                        <a class="previous" onclick="previousSlide()">&#10094;</a>
                                        <a class="next" onclick="nextSlide()">&#10095;</a>
                                    </div>

                                    {!! $data->aboutcontent !!}

                                </div>

                            </div>
                        </div>
                    </div>
                </div> <!-- End Blog Left Side-->

                <div class="col-12 col-sm-12 col-md-4 col-lg-4 blog_wrapper_right ">
                    <div class="blog-right-items">

                        <div class="recent_post_wrapper widget_single">
                            <div class="items-title">
                                <h3 class="title">Recent News</h3>
                            </div>
                            @foreach($othernews as $rs)
                                @if($rs->id!=$data->id)
                                    @if($rs->status=='True')
                                        <div class="single-post">
                                            <div class="recent_img">
                                                <a href="{{route('news',['id'=>$rs->id])}}" title=""><img src="{{Storage::url($rs->image)}}" alt="" class="img-fluid"></a>
                                            </div>
                                            <div class="post_title">
                                                <a href="{{route('news',['id'=>$rs->id])}}" title="">{{$rs->name}}</a>
                                                <div class="post-date">
                                                    <span>{{$rs->date}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            @endforeach


                        </div>

                    </div>
                </div><!-- ./ End  Blog Right Side-->

            </div>
        </div>
    </section> <!-- ./ End Blog Area Wrapper-->


@endsection

@section('scripts')
    <script src="{{asset('assets')}}/newspageslider/script.js"></script>
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
