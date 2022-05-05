@extends('layouts.frontpage')

@section('content')
    <link rel="stylesheet" href="{{asset('assets')}}/newspageslider/style.css">

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
                    <h6>Get all details About</h6>
                    <h2>{{$data->name}}</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="meetings-page" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="meeting-single-item">
                                <div style="overflow: hidden" class="thumb" >
                                    <!-- Основной блок слайдера -->
                                    <div class="slider">
                                        @foreach($image as $rs)
                                            @if($rs->news_id==$data->id)

                                                <div class="item">
                                                    <img  src="{{Storage::url($rs->image)}}">
                                                </div>

                                        @endif
                                    @endforeach


                                        <!-- Кнопки-стрелочки -->
                                        <a class="previous" onclick="previousSlide()">&#10094;</a>
                                        <a class="next" onclick="nextSlide()">&#10095;</a>
                                    </div>



                                </div>
                                <div class="down-content">
                                    <a ><h2>{{$data->name}}</h2></a><br>

                                    <p>{{$data->description}}</p>
                                    <p class="description">
                                        {{$data->aboutnews}}

                                    </p>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="hours">
                                                <h5>Date</h5>
                                                <p>{{$data->date}}</p>

                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="location">
                                                <h5>Location</h5>
                                                <p>{{$data->location}}</p>
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
    <script src="{{asset('assets')}}/newspageslider/script.js"></script>
@endsection

