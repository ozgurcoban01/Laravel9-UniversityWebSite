@foreach($children as $rs)
    @if(count($rs->children))
        @include('home.subfaculty',['children'=>$rs->children])
    @endif
@endforeach
