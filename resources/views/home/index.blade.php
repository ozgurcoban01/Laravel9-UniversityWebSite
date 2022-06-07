@section('title',$settings->title)
@section('desciption',$settings->desciption)
@section('keywords',$settings->keywords)
@section('icon',\Illuminate\Support\Facades\Storage::url($settings->icon))


@extends('layouts.frontpage')

{{--@section('title',$settings->title)--}}
{{--@section('desciption',$settings->desciption)--}}
{{--@section('keywords',$settings->keywords)--}}
{{--@section('icon',\Illuminate\Support\Facades\Storage::url($settings->icon))--}}
@section('head')

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/assets/revolution/layers.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/assets/revolution/navigation.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/assets/revolution/settings.css">
    <!-- Mean Menu-->
    <link rel="stylesheet" href="{{asset('assets')}}/css/assets/meanmenu.css">
    <!-- main style-->
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/demo.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('assets')}}/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="{{asset('assets')}}/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    @livewireStyles
    <![endif]-->
@endsection

@section('header')
    <header class="header_tow">
        <!-- Preloader -->
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
    @include('home.headertop')

    @include('home.navbar')
        <!--==================
            Slider
        ===================-->
        @include('home.slider')
    </header><!--  End header section-->
@endsection
@section('content')

    @include('home.news')

    @include('home.professors')



    @include('home.announcesindex')



@endsection
@section('scripts')
    <!-- JavaScript -->
    <script src="{{asset('assets')}}/js/jquery-3.2.1.min.js"></script>
    <script src="{{asset('assets')}}/js/popper.min.js"></script>
    <script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
    <!-- Revolution Slider -->
    <script src="{{asset('assets')}}/js/assets/revolution/jquery.themepunch.revolution.min.js"></script>
    <script src="{{asset('assets')}}/js/assets/revolution/jquery.themepunch.tools.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('assets')}}/js/slick.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.meanmenu.min.js"></script>
    <script src="{{asset('assets')}}/js/wow.min.js"></script>
    <!-- Counter Script -->
    <script src="{{asset('assets')}}/js/waypoints.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.counterup.min.js"></script>

    <!-- Revolution Extensions -->
    <script src="{{asset('assets')}}/js/assets/revolution/extensions/revolution.extension.actions.min.js"></script>
    <script src="{{asset('assets')}}/js/assets/revolution/extensions/revolution.extension.carousel.min.js"></script>
    <script src="{{asset('assets')}}/js/assets/revolution/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="{{asset('assets')}}/js/assets/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="{{asset('assets')}}/js/assets/revolution/extensions/revolution.extension.migration.min.js"></script>
    <script src="{{asset('assets')}}/js/assets/revolution/extensions/revolution.extension.navigation.min.js"></script>
    <script src="{{asset('assets')}}/js/assets/revolution/extensions/revolution.extension.parallax.min.js"></script>
    <script src="{{asset('assets')}}/js/assets/revolution/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="{{asset('assets')}}/js/assets/revolution/extensions/revolution.extension.video.min.js"></script>
    <script src="{{asset('assets')}}/js/assets/revolution/revolution.js"></script>
    <script src="{{asset('assets')}}/js/custom.js"></script>
    @livewireScripts
@endsection
