@extends('layouts.frontpage')

@section('title','Contact Us')
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
                    <h2>CONTACT US</h2>
                    <h6>Get Contact With Us For Everything!!!</h6>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us" id="contact">
        <div class="container">
            <div class="row">
                <div style="margin: 0 0 20px 0" class="col-lg-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="contact" action="" method="post">
                                <div class="row">
                                    <div >{!! $settings->terms !!}</div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
                <div class="col-lg-9 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">

                            <form id="contact" action="{{route('storemessage')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Let's get in touch</h2>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="name" type="text" id="name" placeholder="YOURNAME...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="subject" type="text" id="subject" placeholder="SUBJECT...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <div class="form-group">
                                                <label for="message"></label><br>
                                                <textarea id="message" name="message" placeholder="YOUR MESSAGE..."></textarea>

                                                <script>
                                                    ClassicEditor
                                                        .create( document.querySelector( '#message' ) )
                                                        .then( editor => {
                                                            console.log( editor );
                                                        } )
                                                        .catch( error => {
                                                            console.error( error );
                                                        } );
                                                </script>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="button">SEND MESSAGE NOW</button>
                                        </fieldset>
                                    </div>
                                    <h1>{{\Illuminate\Support\Facades\Session::get('info')}}</h1>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-info">
                        <ul>
                            <li>
                                <h6>Phone Number</h6>
                                <span>{{$settings->phone}}</span>
                            </li>
                            <li>
                                <h6>Email Address</h6>
                                <span>{{$settings->email}}</span>
                            </li>
                            <li>
                                <h6>Street Address</h6>
                                <span>{{$settings->address}}</span>
                            </li>
                            <li>
                                <h6>FAX</h6>
                                <span>{{$settings->fax}}</span>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="justify-content-center text-center">
                        <div class="main-button-red">
                            <a href="{{route('index')}}">Back To Meetings List</a>
                        </div></div>
                </div>



            </div>
        </div>



        <div class="footer">
            <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved.
                <br>Design: <a href="{{asset('assets')}}/https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p>
        </div>
    </section>


@endsection

