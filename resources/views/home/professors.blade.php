<section class="our_instructors">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h2>Meet Our Professors</h2></div><!-- ends: .section-header -->
            </div>
            @foreach($teachers as $rs)
               @if($rs->degree=='Professor')
                    <div class="single-wrappe col-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="team-single-item">
                            <figure>
                                <div class="member-img">
                                    <div class="teachars_pro">
                                        <img src="{{Storage::url($rs->image)}}" alt="member img" class="img-fluid">
                                    </div>
                                </div>
                                <figcaption>
                                    <div class="member-name">
                                        <h4><a href="{{route('teacher',['id'=>$rs->id])}}" title="">{{$rs->fname}} {{$rs->lname}}</a></h4>
                                        <span>From {{$rs->faculties->name}}</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
               @endif
            @endforeach
        </div>
    </div>
</section><!-- ./ End Our Instructiors -->
