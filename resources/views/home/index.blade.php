@extends('layouts.frontpage')

@section('content')
    @include('home.banner')
    @include('home.slider1')
    @include('home.date1')
    @include('home.slider2')
    @include('home.date2')
    @include('home.slider3')

    @include('home.animated')

    @include('home.contactus')
@endsection
