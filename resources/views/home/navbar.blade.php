@php
 $faculties=\App\Http\Controllers\HomeController::mainCategoryList(0);
@endphp
<div class="edu_nav">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-faded">
            <a class="navbar-brand" href="{{route('index')}}"><img src="{{asset('assets')}}/images/logo.png" alt="logo"></a>
            @livewire('search')

            <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                <ul class="navbar-nav nav lavalamp ml-auto menu">

                    <li class="nav-item"><a href="#" class="nav-link active">Faculties</a>
                        <ul class="navbar-nav nav mx-auto">
                            @foreach($faculties as $rs)
                                @if($rs->status=='True')
                                    @if(count($rs->children))
                                        <li class="nav-item"><a href="{{route('faculty',['id'=>$rs->id])}}"class="nav-link dropdown_icon" >{{$rs->name}}</a>
                                            @include('home.navbarforeach',['children'=>$rs->children])
                                        </li>
                                    @else
                                        <li class="nav-item"><a href="{{route('faculty',['id'=>$rs->id])}}"class="nav-link">{{$rs->name}}</a></li>
                                    @endif
                                @endif
                            @endforeach

                        </ul>
                    </li>
                    <li class="nav-item"><a href="{{route('index')}}" class="nav-link active">Home</a></li>
                    <li class="nav-item"><a href="{{route('contact')}}" class="nav-link active">Contact</a></li>
                    <li class="nav-item"><a href="{{route('faqs')}}" class="nav-link active">FAQS</a></li>

                    <li class="nav-item"><a href="{{route('aboutus')}}" class="nav-link active">About Us</a>
                        <ul class="navbar-nav nav mx-auto">
                            <li class="nav-item"><a href="{{route('termsofuse')}}" class="nav-link ">Terms of Use</a></li>
                            <li class="nav-item"><a href="{{route('privacy')}}" class="nav-link">Privacy</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a href="#" class="nav-link active">List Pages</a>
                        <ul class="navbar-nav nav mx-auto">
                            <li class="nav-item"><a href="{{route('teacherlist')}}" class="nav-link ">Teachers</a></li>
                            <li class="nav-item"><a href="{{route('newslist')}}" class="nav-link ">News</a></li>
                            <li class="nav-item"><a href="{{route('eventlist')}}" class="nav-link " >Events</a></li>
                            <li class="nav-item"><a href="{{route('announcelist')}}" class="nav-link ">Announces</a></li>
                        </ul>
                    </li>


                </ul>
            </div>


        </nav><!-- END NAVBAR -->
    </div>
</div>
