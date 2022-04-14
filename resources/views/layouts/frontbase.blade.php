<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>OZGUR UNI WEB SITE</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="assets/images/favicon.png">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <!--


    -->
</head>

<body>
@include('home.header')
@include('home.banner')

@include('home.slider')
@include('home.announcements')
@include('home.aboutus')
@include('home.ourfaculties_slider2')
@include('home.ourteam')

{{--@include('home.slidertow')--}}
{{--@include('home.secondannounce')--}}
{{--@include('home.secondaboutus')--}}
{{--@include('home.secondourfaculties')--}}
{{--@include('home.secondourteam')--}}
@include('home.contact_us')
@include('home.footer')

</body>
</html>
