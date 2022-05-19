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
                                    <li data-filter="*"  class="active">All Teachers</li>

                                    @foreach($faculties as $rz)
                                            @if(count($rz->teachers))
                                                <li data-filter=".{{$rz->id}}">{{$rz->name}}</li>
                                            @endif
                                    @endforeach

                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="row grid">

                                @foreach($teachers as $rs)


                                        <div class="col-lg-4 templatemo-item-col all {{$rs->faculties_id}}">
                                            <div class="meeting-item">
                                                <div class="thumb">

                                                    <a href="{{route('teacher',['id'=>$rs->id])}}"><img src="{{Storage::url($rs->image)}}" alt=""></a>
                                                </div>
                                                <div style="text-align: center" class="down-content">
                                                    <a  href="{{route('teacher',['id'=>$rs->id])}}"><h4>{{$rs->degree}} <span style="font-weight: normal">{{$rs->fname}} {{$rs->lname}}</span></h4></a>
                                                    <p style="margin: 0">From <a href="{{route('faculty',['id'=>$rs->faculties->id])}}">{{$rs->faculties->name}}</a></p>
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

