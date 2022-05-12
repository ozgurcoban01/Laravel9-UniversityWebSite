@php
    $mainFaculties=\App\Http\Controllers\HomeController::mainCategoryList(0);
@endphp
<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">

                    <!-- ***** Logo Start ***** -->
                    <a href="{{route('index')}}" class="logo">
                        Edu Meeting
                    </a>

                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->

                    <div class="menu">
                        <ul class="nav">
                            <li class="link"><a href="{{route('index')}}">Home</a></li>
                            <li class="link"><a href="{{route('ourteachers')}}">Teachers</a></li>
                            <li>
                                <a href="{{asset('assets')}}/javascript:void(0)">Pages</a>
                                <ul>
                                    <li class="link"><a href="{{route('aboutus')}}">About Us</a></li>
                                    <li class="link"><a href="{{route('contact')}}">Contact Us</a></li>
                                    <li class="link"><a href="{{route('references')}}">References</a></li>
                                </ul>
                            </li>
                            @foreach($mainFaculties as $rs)
                                @if(count($rs->children))
                                    <li><a href="{{route('faculty',['id'=>$rs->id])}}">{{$rs->name}}</a>
                                        @include('home.subtree',['children'=>$rs->children])
                                    </li>
                                @else
                                    <li class="link"><a href="{{route('faculty',['id'=>$rs->id])}}">{{$rs->name}}</a></li>
                                @endif
                            @endforeach

                        </ul>
                    </div>

                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
