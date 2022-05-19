<section class="latest_news_2">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h2>Announces</h2></div><!-- ends: .section-header -->
            </div>



            @foreach($announces as $rs)
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="single_item">
                        <div class="item_wrapper">
                            <h3><a href="{{route('announce',['id'=>$rs->id])}}" title="">{{$rs->description}}</a></h3>
                        </div>
                        <div class="blog_title">
                            <ul class="post_bloger">
                                {{$rs->sdate}}
                                -
                                {{$rs->udate}}
                            </ul>
                        </div>
                        <div class="twitter_post">
                            <div class="blog_title">
                                <div class="icon_wrapper">
                                    <i class="fab fa-twitter twitt-icon"></i>
                                </div><a href="{{route('announce',['id'=>$rs->id])}}" title="">{{$rs->description}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section><!-- End Blog -->
