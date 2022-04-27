<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/feather/feather.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('assets')}}/images/favicon.png" />
    @yield('header')
</head>

<body>
    <div class="container-scroller">
        @include('admin.header')
        <div class="container-fluid page-body-wrapper">

            @include('admin.circlebar')
            @include('admin.sidebar')
            <div class="main-panel">
                @yield('content')
                @include('admin.footer')
            </div>


        </div>
    </div>
@include('admin.scripts')
</body>
</html>
