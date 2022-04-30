@extends('layouts.frontpage')
@section('subheader')

    @if(count($flist))
        <div>
            <div class="menu-wrap">
                <input type="checkbox" class="toggler">
                <div class="hamburger"><div></div></div>
                <div class="menu">
                    <div>
                        <div>
                            <ul>
                                @foreach($flist as $rs)
                                    <div class="text1">
                                        <li><a class="text1" href="{{route('faculty',['id'=>$rs->id])}}">{{$rs->name}}</a></li>

                                        {{--                                    @if(count($rs->children))--}}
                                        {{--                                        @include('home.subburger',['children'=>$rs->children])--}}
                                        {{--                                    @endif--}}
                                    </div>

                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection
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
                                <div class="thumb">
                                    <div class="date">
                                        <h6>Nov <span>12</span></h6>
                                    </div>
{{--                                    <a href="meeting-details.html"><img style="width: 1296px;height: 400px;" src="{{asset('assets')}}/assets/images/single-meeting.jpg" alt=""></a>--}}
                                    <a><img style="width: 1296px;height: 400px;" src="{{Storage::url($data->image)}}" alt=""></a>
                                </div>
                                <div class="down-content">
                                    <a ><h4>{{$data->name}}</h4></a>

                                    <p class="description">
                                        @foreach($teac as $rs)
                                            {{$rs->fname}}, {{$rs->lname}},
                                        @endforeach
                                    </p>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="hours">
                                                <h5>Hours</h5>
                                                <p><b>Starts :</b> <br><b>Ends :</b> </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="location">
                                                <h5>Location</h5>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="book now">
                                                <h5>Dates</h5>
                                                <p> to<br></p>
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

