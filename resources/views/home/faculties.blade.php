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
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{asset('assets')}}/newspageslider/style.css">
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
                            <h1>{{$data->name}} Details</h1>
                            <div class="pages_links">
                                <a href="#" title="">Home</a>
                                <a href="#" title="">Faculties</a>

                                @foreach($pdata as $rs)
                                    <a href="#" title="">{{$rs->name}}</a>
                                    @if($rs->id==$data->id)
                                        @break
                                    @else
                                        @if(count($rs->children))
                                            @include('home.subfaculty',['children'=>$rs->children])
                                        @endif
                                    @endif
                                @endforeach

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header> <!-- End header -->
@endsection

@section('content')

    <<section class="blog_wrapper" id="courses_details_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="courses_details">
                        <div class="single-curses-contert">
                            <h2>WordPress: Step by Step for Beginners</h2><br>

                            <div class="details-img-bxo">
                                <img src="{{Storage::url($data->image)}}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="courses_tab_wrapper">
                            <div class="courses_details_nav_tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" href="#information" role="tab" data-toggle="tab">About Faculty</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#instructor" role="tab" data-toggle="tab">Related Peoples</a></li>
                                </ul>
                            </div>

                            <!-- Tab panes -->
                            <div class="tab_contents tab-content">
                                <div role="tabpanel" class="tab-pane fade in active show" id="information">
                                    {!! $data->aboutfaculty !!}
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="instructor">
                                    <div class="courses_teacher">

                                        @foreach($teac as $rs)
                                            <div class="tutor_signle">
                                                <div class="tutor_pro">
                                                    <a href="#" title=""><img src="{{Storage::url($rs->image)}}" alt="" class="img-fluid"></a>
                                                </div>
                                                <div class="teachers_name">
                                                    <h5><a href="{{route('teacher',['id'=>$rs->id])}}" title="">{{$rs->fname}} {{$rs->lname}}</a></h5>
                                                    <span>{{$rs->degree}}</span>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--End Blog Siderbar Left-->


                <div class="col-12 col-sm-12 col-md-4 col-lg-4 blog_wrapper_right ">
                    <div class="blog-right-items">
                        <div class="archives widget_single">
                            <div class="items-title">

                                <h3 class="title">All Faculties</h3>

                            </div>
                            <div class="archives-items">
                                <ul class="list-unstyled">
                                    @foreach($allfaculties as $rs)
                                        <li><a href="{{route('faculty',['id'=>$rs->id])}}" title="">{{$rs->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Right Sidebar-->

            </div>
        </div>
    </section><!-- ./ End  Blog Wrapper-->


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
