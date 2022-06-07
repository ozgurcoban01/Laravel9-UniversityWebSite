@section('title','Events')
@section('desciption',$settings->desciption)
@section('keywords',$settings->keywords)
@section('icon',\Illuminate\Support\Facades\Storage::url($settings->icon))

@php
    $average=$data->comments->average('rate');
@endphp
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

    <section class="blog_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="blog_post">
                        <h3>{{$data->name}}</h3>
                        <div class="post_by d-flex">
                            <span><a href="{{route('faculty',['id'=>$data->faculties->id])}}" title="">{{$data->faculties->name}}</a></span>
                        </div>

                        <div class="slider">
                            <div class="item">
                                <div class="banner">
                                    <img src="{{Storage::url($data->image)}}" alt="" class="img-fluid">
                                </div>
                            </div>
                            @foreach($images as $rs)
                                @if($rs->content_id==$data->id)

                                        <div class="item">
                                            <div class="banner">
                                                <img src="{{Storage::url($rs->image)}}" alt="" class="img-fluid">
                                            </div>
                                        </div>

                                @endif
                            @endforeach


                        <!-- Кнопки-стрелочки -->
                            <a class="previous" onclick="previousSlide()">&#10094;</a>
                            <a class="next" onclick="nextSlide()">&#10095;</a>
                        </div>


                        <div class="postpage_content_wrapper">
                            <div class="blog_post_content">
                                {!! $data->aboutcontent !!}
                                <div class="post_response_count d-flex justify-content-between">
                                    <ul class="d-flex comnent_count">
                                        <li><i class="fas fa-comment"></i>{{count($data->comments)}} Comments</li>

                                    </ul>
                                </div>

                                <!-- Blog Comment Wrappper-->
                                <div class="commnet-wrapper">
                                    <div class="items_title">
                                        <h3 class="title">{{count($data->comments)}} Comments</h3>
                                        <span style="font-weight: bold">Avarage Rating:</span>
                                        @if($average<2)
                                            <span style="color: orange">★</span><span>★★★★</span>
                                        @elseif($average<3)
                                            <span style="color: orange">★★</span><span>★★★</span>
                                        @elseif($average<4)
                                            <span style="color: orange">★★★</span><span>★★</span>
                                        @elseif($average<5)
                                            <span style="color: orange">★★★★</span><span>★</span>
                                        @else
                                            <span style="color: orange">★★★★★</span>
                                        @endif
                                    </div>
                                    <div class="comment-list-items">

                                    @foreach($reviews as $rs)
                                        <div class="comment-list-wrapper">
                                            <div class="comment-list">
                                                <div>
                                                    @if($rs->rate==1)
                                                        <span style="color: orange">★</span><span>★★★★</span>
                                                    @elseif($rs->rate==2)
                                                        <span style="color: orange">★★</span><span>★★★</span>
                                                    @elseif($rs->rate==3)
                                                        <span style="color: orange">★★★</span><span>★★</span>
                                                    @elseif($rs->rate==4)
                                                        <span style="color: orange">★★★★</span><span>★</span>
                                                    @else
                                                        <span style="color: orange">★★★★★</span>
                                                    @endif
                                                </div>
                                                <div class="comment-text">
                                                    <div class="author_info">
                                                        <div class="author_name">
                                                            <a href="#" class="">{{$rs->user->name}} <span style="font-weight: normal">says</span> {{$rs->subject}}</a>
                                                            <span>{{$rs->created_at}}</span>
                                                        </div>

                                                    </div>
                                                    <p>{{$rs->review}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    </div>
                                    <!--  Leave Commnent Wrapper -->
                                    <div class="leave_comment_wrapper">
                                        <div class="items_title">
                                            <h3 class="title">Leave A Comment</h3>
                                            <p>You need to be sure there isn't anything embarrassing hidden in the repeat predefined</p>
                                        </div>
                                        <div class="leave_comment">
                                            <div class="contact_form">
                                                <form action="{{{route('storeeventcomment')}}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="content_id" value="{{$data->id}}">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-12 col-md-6 form-group">
                                                            <input type="text" class="form-control" id="subject"  name="subject" placeholder="Your Subject">
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-md-6 form-group"></div>
                                                        <div class="col-12 col-sm-12 col-md-12 form-group">
                                                            <textarea class="form-control" id="review" name="review" placeholder="Your Comment"></textarea>
                                                        </div>

                                                        <div class="star-rating">
                                                            <input type="radio" id="5-stars" name="rate" value="5" />
                                                            <label for="5-stars" class="star">&#9733;</label>
                                                            <input type="radio" id="4-stars" name="rate" value="4" />
                                                            <label for="4-stars" class="star">&#9733;</label>
                                                            <input type="radio" id="3-stars" name="rate" value="3" />
                                                            <label for="3-stars" class="star">&#9733;</label>
                                                            <input type="radio" id="2-stars" name="rate" value="2" />
                                                            <label for="2-stars" class="star">&#9733;</label>
                                                            <input type="radio" id="1-star" name="rate" value="1" />
                                                            <label for="1-star" class="star">&#9733;</label>
                                                        </div>

                                                        <div class="col-12 col-sm-12 col-md-12 submit-btn">
                                                            @auth()
                                                                <button type="submit" class="text-center">Post Comment</button>
                                                            @else
                                                                <a class="btn btn-danger" href="/login">For Review, Please Login!!!</a>
                                                            @endauth
                                                            @include('home.warningmessages')
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Blog Left Side-->

                <div class="col-12 col-sm-12 col-md-4 col-lg-4 blog_wrapper_right ">
                    <div class="blog-right-items">

                        <div class="recent_post_wrapper widget_single">
                            <div class="items-title">
                                <h3 class="title">Recent Post</h3>
                            </div>
                            @foreach($otherevent as $rs)
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


{{--    <section class="event_details_wrapper blog_wrapper">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12 col-sm-12 col-md-8 col-lg-8">--}}
{{--                    <div class="event_intro">--}}
{{--                        <div style="overflow: hidden" class="thumb" >--}}
{{--                            <!-- Основной блок слайдера -->--}}
{{--                            <div class="slider">--}}
{{--                                <div class="item">--}}
{{--                                    <div class="banner">--}}
{{--                                        <img src="{{Storage::url($data->image)}}" alt="" class="img-fluid">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                @foreach($images as $rs)--}}
{{--                                    @if($rs->content_id==$data->id)--}}

{{--                                        <div class="item">--}}
{{--                                            <div class="banner">--}}
{{--                                                <img src="{{Storage::url($rs->image)}}" alt="" class="img-fluid">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    @endif--}}
{{--                                @endforeach--}}


{{--                            <!-- Кнопки-стрелочки -->--}}
{{--                                <a class="previous" onclick="previousSlide()">&#10094;</a>--}}
{{--                                <a class="next" onclick="nextSlide()">&#10095;</a>--}}
{{--                            </div>--}}



{{--                        </div>--}}
{{--                        <div class="post_content">--}}
{{--                            <div class="post_by d-flex justify-content-between">--}}
{{--                                <span  class="date_event">{{$data->description}}</span>--}}

{{--                            </div>--}}
{{--                            <div class="blog_post_content">{!! $data->aboutcontent !!}</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-12 col-sm-12 col-md-4 col-lg-4 blog_wrapper_right ">--}}
{{--                    <div class="blog-right-items">--}}


{{--                        <div class="recent_post_wrapper popular_courses_post widget_single">--}}
{{--                            <div class="items-title">--}}
{{--                                <h3 class="title">Our Other Events</h3>--}}
{{--                            </div>--}}

{{--                            @foreach($otherevent as $rs)--}}
{{--                                @if($rs->id!=$data->id)--}}
{{--                                    <div class="single-post">--}}
{{--                                        <div class="recent_img">--}}
{{--                                            <a href="{{route('event',['id'=>$rs->id])}}" title=""><img src="{{Storage::url($rs->image)}}" alt="" class="img-fluid"></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="post_title">--}}
{{--                                            <a href="{{route('event',['id'=>$rs->id])}}" title="">{{$rs->name}}</a>--}}
{{--                                            <div class="post-date">--}}
{{--                                                <span>{{$rs->sdate}}</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endif--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-12 col-sm-12 col-md-12 col-lg-12">--}}
{{--                    <div class="location_bottom_wrapper">--}}
{{--                        <div class="event_details">--}}
{{--                            <div class="details_title">--}}
{{--                                <h3>Event Details</h3>--}}
{{--                            </div>--}}
{{--                            <div class="event_location_info">--}}
{{--                                <ul class="list-unstyled">--}}
{{--                                    <li><p>Date</p><span><b>{{$data->date}}</b></span></li>--}}
{{--                                </ul>--}}
{{--                                <ul class="list-unstyled">--}}
{{--                                    <li><p class="hall_location">Location</p></li>--}}
{{--                                    <li><p>{{$data->location}}</p></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}




{{--            </div>--}}
{{--        </div>--}}
{{--    </section><!-- End Event Details Wrapper -->--}}

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
