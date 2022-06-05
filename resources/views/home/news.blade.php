<section class="popular_courses" id="popular_courses_2">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h2>News</h2>
                </div><!-- ends: .section-header -->
            </div>
        @foreach($content as $rs)
            @if($rs->type=='News')

                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="single-courses">
                            <div class="courses_banner_wrapper">
                                <div class="courses_banner"><a href="{{route('news',['id'=>$rs->id])}}"><img src="{{Storage::url($rs->image)}}" alt="" class="img-fluid"></a></div>
                            </div>
                            <div class="courses_info_wrapper">
                                <div class="courses_title">
                                    <h3><a href="#">{{$rs->faculties->name}}</a></h3>
                                </div>

                            </div>
                        </div><!-- Ends: .single courses -->
                    </div><!-- Ends: . -->
            @endif
        @endforeach

        </div>
    </div>
    <div class="shape_bg">
        <span class="shape_1"></span>
        <span class="shape_2"></span>
        <span class="shape_3"></span>
    </div>
</section> <!-- ./ End Courses Area section -->
