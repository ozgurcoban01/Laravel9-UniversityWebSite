@extends('layouts.frontpage')

@section('title',$settings->title)
@section('desciption',$settings->desciption)
@section('keywords',$settings->keywords)
@section('icon',\Illuminate\Support\Facades\Storage::url($settings->icon))

@section('subheader')


{{--    <div>--}}
{{--        <div class="menu-wrap">--}}
{{--            <input type="checkbox" class="toggler">--}}
{{--            <div class="hamburger"><div></div></div>--}}
{{--            <div class="menu">--}}
{{--                <div>--}}
{{--                    <div>--}}
{{--                        <ul>--}}
{{--                            @foreach($mainFaculties as $rs)--}}
{{--                                <div class="text1">--}}
{{--                                    <li><a class="text1" href="{{route('faculty',['id'=>$rs->id])}}">{{$rs->name}}</a></li>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
@section('content')


    @include('home.banner')

    @include('home.slider1')

    @include('home.date1')

    @include('home.date2')

    @include('home.slider2')

    @include('home.slider3')

    @include('home.animated')

@endsection
