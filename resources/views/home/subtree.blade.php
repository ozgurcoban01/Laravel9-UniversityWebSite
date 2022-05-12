<ul>
    @foreach($children as $rs)
        @if(count($rs->children))
            <li><a href="{{route('index')}}">Home</a>
                @include('home.subtree',['children'=>$rs->children])
            </li>
        @else
            <li class="link"><a href="{{route('index')}}">{{$rs->name}}</a></li>
        @endif
    @endforeach
</ul>
