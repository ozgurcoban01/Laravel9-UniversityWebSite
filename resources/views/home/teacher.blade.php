@extends('layouts.frontpage')

@section('content')


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            Edu Meeting
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="meetings.html" class="active">Meetings</a></li>
                            <li><a href="index.html">Apply Now</a></li>
                            <li class="has-sub">
                                <a href="javascript:void(0)">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="meetings.html">Upcoming Meetings</a></li>
                                    <li><a href="meeting-details.html">Meeting Details</a></li>
                                </ul>
                            </li>
                            <li><a href="index.html">Courses</a></li>
                            <li><a href="index.html">Contact Us</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>Get all details</h6>
                    <h2>{{$data->degree}} {{$data->fname}} {{$data->lname}}</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="meetings-page" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">

                        <img style="border-radius: 250px;width: 500px;height: 500px;margin:auto;" src="{{Storage::url($data->image)}}">

                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="meeting-single-item">
                                <div class="thumb">


                                    <a href="meeting-details.html"><img src="assets/images/single-meeting.jpg" alt=""></a>
                                </div>
                                <div class="down-content">
                                    <a href="meeting-details.html"><h4>{{$data->degree}} {{$data->fname}} {{$data->lname}}</h4></a>
                                    <p>From {{$data->lessons}} </p>
                                    <p class="description">
                                        {{$data->description}}
                                    </p>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="hours">
                                                <h5>Gender</h5><br>
                                                {{$data->gender}}
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="location">
                                                <h5>E-mail</h5><br>
                                                {{$data->email}}
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="book now">
                                                <h5>Age</h5>
                                                <p>{{$data->bdate}}</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="main-button-red">
                                <a href="{{route('index')}}">Back To Meetings List</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved.
                <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p>
        </div>
    </section>



@endsection

