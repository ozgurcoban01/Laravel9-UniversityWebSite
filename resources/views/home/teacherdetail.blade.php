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

        <<div class="intro_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <div class="intro_text">
                            <h1>{{$data->degree}} {{$data->fname}} {{$data->lname}}</h1>
                            <div class="pages_links">
                                <a href="#" title="">Home</a>
                                <a href="#" title="" class="active">Teacher Detail</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header> <!-- End header -->
@endsection

@section('content')


    <section class="teachers_profile">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 teacher-detail-left">
                    <div style="border-radius: 50px;overflow: hidden"class="teacher_info_wrapper">
                        <div class="teacger-image">
                            <div style="border-radius: 50px;overflow: hidden"><img src="{{Storage::url($data->image)}}" alt="" class="img-fluid"></div>
                        </div>
                        <div  class="social_wraper">
                            <ul class="social-items d-flex list-unstyled">
                                <li><a href="#"><i class="fab fa-facebook-f fb-icon"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter twitt-icon"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in link-icon"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram ins-icon"></i></a></li>
                            </ul>
                        </div>

                        <br>
                    </div>
                </div><!-- Ends: .teacher-detail-left -->
                <div  class="col-sm-8 teacher-detail-right">
                    <div class="row">
                        <div class="col-sm-6">
                            <div style="border-radius: 50px;overflow: hidden"class="teacher-info">
                                <ul class="list-unstyled">
                                    <li>
                                        <h3>Name:</h3>
                                        <span>{{$data->fname}} {{$data->lname}}</span>
                                    </li>
                                    <li>
                                        <h3>Department:</h3>
                                        <span><a href="{{route('faculty',['id'=>$data->faculties->id])}}">{{$data->faculties->name}}</a></span>
                                    </li>
                                    <li>
                                        <h3>Degree:</h3>
                                        <span>{{$data->degree}}</span>
                                    </li>
                                    <li>
                                        <h3>E-mail:</h3>
                                        <span>{{$data->email}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div style="border-radius: 50px;overflow: hidden"class="teacher-contact">
                                <h2>Write a Comment</h2>
                                <form action="{{{route('storecomment')}}}" method="post">
                                    @csrf
                                    <input type="hidden" name="teacher_id" value="{{$data->id}}">
                                    <input type="text" name="subject" placeholder="Your Subject" required>
                                    <textarea name="review" placeholder="Your Comment"></textarea>

                                    <!-- RATE -->
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
                                    @auth()
                                        <button style="border-radius: 20px;overflow: hidden" type="submit">Submit Your Request</button>
                                    @else
                                        <a class="btn btn-danger" href="/login">For Review, Please Login!!!</a>
                                    @endauth
                                    @include('home.warningmessages')
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="courses_tab_wrapper">
                                <div class="courses_details_nav_tabs">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" href="#information" role="tab" data-toggle="tab"><i class="flaticon-info-sign"></i>About Insructor</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#courses" role="tab" data-toggle="tab"><i class="flaticon-portfolio"></i>Comments</a></li>
                                    </ul>
                                </div>

                                <!-- Tab panes -->
                                <div class="tab_contents tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active show" id="information">{!! $data->description !!}</div>
                                    <div role="tabpanel" class="tab-pane fade" id="courses">
                                        <!--Start Courses Area Section-->
                                        <div class="popular_courses">

                                            <section class="blog_wrapper">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="blog_post">
                                                                <div class="postpage_content_wrapper">
                                                                    <div class="blog_post_content">
                                                                        <!-- Blog Comment Wrappper-->
                                                                        <div class="commnet-wrapper">
                                                                            <div class="comment-list-items">
                                                                                @foreach($reviews as $rs)
                                                                                    <div class="comment-list-wrapper">
                                                                                        <div class="comment-list">
                                                                                            <div class="commnet_img">
                                                                                                <img src="{{Storage::url($rs->image)}}" alt="member img" class="img-fluid">
                                                                                            </div>
                                                                                            <div class="comment-text">
                                                                                                <div class="author_info">
                                                                                                    <div class="author_name">
                                                                                                        <a href="#" class="">{{$rs->user->name}} says {{$rs->subject}}</a>
                                                                                                        <span>{{$rs->created_at}}</span><br>
{{--                                                                                                        STARS--}}
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
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p>{{$rs->review}}</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @endforeach
                                                                            </div>
                                                                            <!--  Leave Commnent Wrapper -->

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> <!-- End Blog Left Side-->
                                                    </div>
                                                </div>
                                            </section> <!-- ./ End Blog Area Wrapper-->

                                        </div><!-- Ends: . -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Ends: .teacher-detail-right -->
            </div>
        </div>
    </section><!-- Ends: .teacher-details-wrapper -->




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
