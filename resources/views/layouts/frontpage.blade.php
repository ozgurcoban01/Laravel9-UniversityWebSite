<!doctype html>
<html lang="en">
<head>
    <link rel="icon" href="@yield('icon')">
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Ecology Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ozgur Coban">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{asset('assets')}}/images/favicon.ico" type="image/x-icon">

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <!-- Goole Font -->
    <link href="{{asset('assets')}}/https://fonts.googleapis.com/css?family=Rubik:400,500,700" rel="stylesheet">
    <link href="{{asset('assets')}}/https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="{{asset('assets')}}/https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/assets/bootstrap.min.css">
    <!-- Font awsome CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/assets/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/assets/flaticon.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/assets/magnific-popup.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/assets/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/assets/owl.theme.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/assets/animate.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/assets/slick.css">

    @yield('head')
</head>
<body>
@yield('header')
@include('home.loginslider')
@yield('content')
@include('home.footer')
@yield('scripts')
</body>
</html>
