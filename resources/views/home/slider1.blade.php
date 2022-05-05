<section class="services">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">

                <div style="text-align: center" class="section-heading">
                    <h2>Our Teachers</h2>
                </div>

                <div class="owl-service-item owl-carousel">
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
                                    <h3 style="margin: 0 0 20px 0">{{$rs->fname}} {{$rs->lname}}</h3>
                                </div>
                                </p>
                                <p><h5 >{{$rs->lessons}}</h5></p>
                            </div>
                        </div>
                    </a>
                    @endforeach


                </div>


            </div>
        </div>
    </div>
</section>
