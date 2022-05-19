
<section class="upcoming-meetings" id="meetings">
    <div class="container" style="padding: 60px 0 0 0">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Upcoming Meetings</h2>
                </div>
            </div>
{{--            <div class="col-lg-4">--}}
{{--                <div class="categories">--}}
{{--                    <h4>Meeting Catgories</h4>--}}
{{--                    <ul>--}}
{{--                        <li><a href="{{asset('assets')}}/#">Sed tempus enim leo</a></li>--}}
{{--                        <li><a href="{{asset('assets')}}/#">Aenean molestie quis</a></li>--}}
{{--                        <li><a href="{{asset('assets')}}/#">Cras et metus vestibulum</a></li>--}}
{{--                        <li><a href="{{asset('assets')}}/#">Nam et condimentum</a></li>--}}
{{--                        <li><a href="{{asset('assets')}}/#">Phasellus nec sapien</a></li>--}}
{{--                    </ul>--}}
{{--                    <div class="main-button-red">--}}
{{--                        <a href="{{asset('assets')}}/meetings.html">All Upcoming Meetings</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col-lg-12" >
                <div class="col-lg-12">
                    <div class="row">
                        @foreach($eventdata as $rs)


                                <div class="col-lg-4">
                                    <a href="{{route('event',['id'=>$rs->id])}}">
                                        <div class="meeting-item">
                                            <div class="thumb">
                                                <div class="price">
                                                    <span>{{$rs->location}}</span>
                                                </div><img src="{{Storage::url($rs->image)}}" alt="New Lecturer Meeting">
                                            </div>
                                            <div class="down-content">
                                                <div class="date">
                                                    <h6>NOV<span>10</span></h6>
                                                </div>
                                                <h4>{{$rs->name}}</h4>
                                                <p style="height: 40px" >{{$rs->description}}...</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
