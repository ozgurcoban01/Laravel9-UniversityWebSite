@if(count($data->parent))
    @include('home.getparent',['data'=>$data->parent])

@else
    <a href="#" title="">{{$data->name}}</a>
@endif

