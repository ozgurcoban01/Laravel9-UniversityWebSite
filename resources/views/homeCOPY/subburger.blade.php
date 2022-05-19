@foreach($children as $sb)

    <ul class="text2">
        <div class="text2">
        @if(count($sb->children))
            <li class="text2"><a class="text2" href="#">{{$sb->name}}</a></li>
            <ul class="text2">
                @include('home.subburger',['children'=>$sb->children])
            </ul>
        @else
            <li class="text2"><a class="text2" href="#">{{$sb->name}}</a></li>
        @endif
        </div>
    </ul>

@endforeach
