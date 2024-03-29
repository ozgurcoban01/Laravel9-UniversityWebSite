<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Ozgur Coban">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="icon" href="@yield('icon')">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/owl.css">
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/lightbox.css">
    <link rel="stylesheet" href="{{asset('assets')}}/burger/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/headerdropdown/style.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>


    <!--

    TemplateMo 569 Edu Meeting

    https://templatemo.com/tm-569-edu-meeting

    -->
</head>

<body>
<div class="sub-header">
    @yield('subheader')
    @include('home.subheader')
</div>
@include('home.header')
@yield('content')
@include('home.footer')
</body>
</html>
