@extends('layouts.frontpage')

@section('title','FAQS')
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
                    <h6>Questions and Answers</h6>
                    <h2>FAQS</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="meetings-page" id="meetings">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="accordions is-first-expanded">
                        @foreach($data as $rs)
                            <article class="accordion">
                                <div class="accordion-head">
                                    <span>{{$rs->question}}</span>
                                    <span class="icon">
                                   <i class="icon fa fa-chevron-right"></i>
                                </span>
                                </div>
                                <div class="accordion-body">
                                    <div class="content">{!! $rs->answer !!}</div>
                                </div>
                            </article>
                        @endforeach
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

