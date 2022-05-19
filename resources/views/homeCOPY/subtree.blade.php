<ul>
    @foreach($children as $rs)
        @if(count($rs->children))
            <li><a href="{{route('faculty',['id'=>$rs->id])}}">{{$rs->name}}</a>
                @include('home.subtree',['children'=>$rs->children])
            </li>
        @else
            <li class="link"><a href="{{route('faculty',['id'=>$rs->id])}}">{{$rs->name}}</a></li>
        @endif
    @endforeach
</ul>
