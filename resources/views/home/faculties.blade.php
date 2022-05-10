@extends('layouts.frontpage')

@section('title',$data->name)
@section('desciption',$settings->desciption)
@section('keywords',$settings->keywords)
@section('icon',\Illuminate\Support\Facades\Storage::url($settings->icon))

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
    @include('home.header')
    <!-- ***** Header Area End ***** -->

    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>Get all details About</h6>
                    <h2>{{$data->name}}</h2>
                    @if($data->parent_id!=0)
                        <h6>from <a href="{{route('faculty',['id'=>$pdata->id])}}">{{$pdata->name}}</a></h6>
                    @endif
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

                                    <p class="description">{!! $data->aboutfaculty !!}</p>
                                    <div class="row">
                                        Realeted Peoples <br><br>
                                        @foreach($teac as $rs)
                                           <a href="{{route('teacher',['id'=>$rs->id])}}"><div><span style="font-weight: bold">{{$rs->degree}}</span> {{$rs->fname}} {{$rs->lname}}</div></a>
                                        @endforeach

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

