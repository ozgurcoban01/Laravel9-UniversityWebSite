
<section class="our-courses" id="courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Our Popular Courses</h2>
                </div>
            </div>
            <div  class="col-lg-12">
                <div class="owl-courses-item owl-carousel">

                    @foreach($announcedata as $rs)
                        <a href="">
                            <div  class="item">
                                <div style="border-radius: 20%" class="down-content">
                                    <h4>{{$rs->description}}</h4>
                                    <div class="info">
                                        <div class="row">
                                            <div class="col-8">
                                                <ul>
                                                    {{$rs->sdate}}
                                                </ul>
                                            </div>
                                            <div class="col-4">
                                                <span>{{$rs->udate}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
