<section class="popular_courses" id="popular_courses_2">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h2>News</h2>
                </div><!-- ends: .section-header -->
            </div>


            @foreach($news as $rs)
                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="single-courses">
                        <div class="courses_banner_wrapper">
                            <div class="courses_banner"><a href="{{route('news',['id'=>$rs->id])}}"><img src="{{Storage::url($rs->image)}}" alt="" class="img-fluid"></a></div>
                        </div>
                        <div class="courses_info_wrapper">
                            <div class="courses_title">
                                <h3><a href="{{route('news',['id'=>$rs->id])}}">{{$rs->name}}</a></h3>
                                <div class="teachers_name">{{$rs->description}}</div>
                            </div>
                            <div class="courses_info">
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-calendar-alt"></i>{{$rs->location}}</li>
                                    <li><i class="fas fa-user"></i>{{$rs->date}}</li>
                                </ul>
                                <a href="{{route('news',['id'=>$rs->id])}}" class="cart_btn">Get Detail</a>
                            </div>
                        </div>
                    </div><!-- Ends: .single courses -->
                </div><!-- Ends: . -->
            @endforeach
        </div>
    </div>
    <div class="shape_bg">
        <span class="shape_1"></span>
        <span class="shape_2"></span>
        <span class="shape_3"></span>
    </div>
</section> <!-- ./ End Courses Area section -->
