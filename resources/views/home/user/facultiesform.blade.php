@section('title','User Panel')
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
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
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
                            <h1>User Panel</h1>
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

                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                    <div class="contact_form_wrapper">
                        <h3 class="title">User Menu</h3>
                        <div class="leave_comment">
                            @include('home.user.usermenu')
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                    <div class="contact_info">
                        <h3 class="title">User Details</h3>
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="{{route('userpanel.facultiesstore')}}" enctype="multipart/form-data" class="forms-sample">
                                @csrf
                                <!-- Event Name -->

                                    <div class="form-group">
                                        <label for="parent_id">From</label>
                                        <select class="js-example-basic-single w-100" name="parent_id">
                                            <option value="0" selected>Main Categorie</option>
                                            @foreach($data as $rs)
                                                <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\FacultyController::getParentsTree($rs,$rs->name)}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Faculty Name</label>
                                        <input required type="text" class="form-control" id="description" name="name" placeholder="About Faculty" >
                                    </div>



                                    <!-- ABOUTEVENT -->
                                    <div class="form-group">
                                        <label for="aboutfaculty">About Faculty</label><br>
                                        <textarea id="aboutfaculty" name="aboutfaculty" placeholder=" This Faculty ..."></textarea>

                                        <script>
                                            $('#aboutfaculty').summernote({

                                                tabsize: 2,
                                                height: 120,
                                                toolbar: [
                                                    ['style', ['style']],
                                                    ['font', ['bold', 'underline', 'clear']],
                                                    ['color', ['color']],
                                                    ['para', ['ul', 'ol', 'paragraph']],
                                                    ['table', ['table']],
                                                    ['insert', ['link', 'picture', 'video']],
                                                    ['view', ['fullscreen', 'codeview', 'help']]
                                                ]
                                            });
                                        </script>
                                    </div>

                                    <!-- IMAGE -->
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" class="form-control" id="image"name="image">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>

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
