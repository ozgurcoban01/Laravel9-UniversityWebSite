@extends('layouts.frontpage')

@section('title','Teachers')
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
                    <h2>OUR TEACHERS</h2>
                    <h6></h6>
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
                            <div class="filters">
                                <ul>
                                    <li data-filter="*"  class="active">All Meetings</li>
                                    @foreach($degrees as $rs)
                                        <li data-filter=".{{$rs->name}}">{{$rs->name}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="row grid">

                                @foreach($teachers as $rs)
                                    <div class="col-lg-4 templatemo-item-col all {{$rs->degree}}">
                                        <div class="meeting-item">
                                            <div class="thumb">

                                                <a href="{{route('teacher',['id'=>$rs->id])}}"><img src="{{Storage::url($rs->image)}}" alt=""></a>
                                            </div>
                                            <div class="down-content">
                                                <a href="{{route('teacher',['id'=>$rs->id])}}"><h4>{{$rs->degree}} {{$rs->fname}} {{$rs->lname}}</h4></a>
                                                <p>From {{$rs->faculties->name}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach



                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved.
                <br>Design: <a href="https://templatemo.com/page/1" target="_parent" title="website templates">TemplateMo</a></p>
        </div>
    </section>

@endsection

