<ul class="navbar-nav nav mx-auto">
    @foreach($children as $rs)
        @if(count($rs->children))
            <li class="nav-item"><a class="nav-link dropdown_icon" href="{{route('faculty',['id'=>$rs->id])}}">{{$rs->name}}</a>
                @include('home.navbarforeach',['children'=>$rs->children])
            </li>
        @else
            <li class="nav-item"><a class="nav-link" href="{{route('faculty',['id'=>$rs->id])}}">{{$rs->name}}</a></li>
        @endif
    @endforeach
</ul>
