@extends('layouts.frontpage')

@section('content')

    <!-- ***** Header Area Start ***** -->
    @include('home.header')
    <!-- ***** Header Area End ***** -->

    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>REFERENCES</h2>
                    <h6>Get all details About Us</h6>
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
                                <div class="down-content">{!! $settings->references !!}</div>
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

