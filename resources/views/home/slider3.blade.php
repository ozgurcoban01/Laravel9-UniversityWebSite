<section class="our-courses" id="courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Our Popular Courses</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="owl-courses-item owl-carousel">
                    @foreach($news as $rs)
                        <a href="{{route('news',['id'=>$rs->id])}}">
                            <div class="item">
                                <img src="{{Storage::url($rs->image)}}" alt="Course One">
                                <div class="down-content">
                                    <h4>{{$rs->name}}</h4>
                                    <div class="info">
                                        <div class="row">
                                            <div class="col-8">
                                                <ul>
                                                    {{$rs->date }}
                                                </ul>
                                            </div>
                                            <div class="col-4">
                                                <span>{{$rs->location}}</span>
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
