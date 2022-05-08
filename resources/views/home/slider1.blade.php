<section class="services">
    <div class="container" >
        <div class="row">

            <div class="col-lg-12">

                <div style="text-align: center" class="section-heading ">
                    <div class="main-button-red">
                        <h2 ><a href="{{route('ourteachers')}}">Our Teachers</a></h2>
                    </div>

                </div>

                <div class="owl-service-item owl-carousel" >
                    @foreach($sliderdata as $rs)

                    <a href="{{route('teacher',['id'=>$rs->id])}}">
                        <div style="cursor:pointer" class="item">
                            <div  class="icon">
                                <img src="{{secure_asset('assets')}}/assets/images/service-icon-01.png" alt="">
                                <img style="border-radius: 35px;width: 70px;height: 70px;margin: 0 0 20px 0" src="{{Storage::url($rs->image)}}" alt="">
                            </div>
                            <div class="down-content">
                                <p>
                                <div>
                                    <h7 >{{$rs->degree}}</h7>
                                    <h3 >{{$rs->fname}} {{$rs->lname}}</h3>
                                    <h5 >{{$rs->faculties->name}}</h5>
                                </div>
                                </p>

                            </div>
                        </div>
                    </a>
                    @endforeach


                </div>


            </div>
        </div>
    </div>
</section>
