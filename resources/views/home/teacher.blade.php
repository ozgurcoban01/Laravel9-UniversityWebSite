@extends('layouts.frontpage')

@section('title','Teacher Detail')
@section('desciption',$settings->desciption)
@section('keywords',$settings->keywords)
@section('icon',\Illuminate\Support\Facades\Storage::url($settings->icon))

@section('content')


    <!-- ***** Header Area Start ***** -->
    @include('home.header')
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

                                <div class="down-content">
                                    <a href="meeting-details.html"><h4>{{$data->degree}} {{$data->fname}} {{$data->lname}}</h4></a>
                                    <p>From <a href="{{route('faculty',['id'=>$data->faculties->id])}}">{{$data->faculties->name}}</a> </p>
                                    <br><br>

                                    {!! $data->description !!}

                                    <br><br>
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

