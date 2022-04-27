@extends('layouts.adminbase')
@section('header')

    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

@endsection
@section('content')
    <div class="content-wrapper">

        <div style="justify-content: center;align-items: center" class="row">
            <div  class="col-lg-12 grid-margin stretch-card">

                <div class="card">


                    <div class="card-body">

                        <h4 style="font-size:xx-large" class="card-title">{{$data->fname}} {{$data->fname}}`s Description</h4>


                        <div>

                                    {!! $data->description !!}


                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection
