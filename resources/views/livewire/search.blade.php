<div>
    <div style="width: 100px">
        <form>
            <input wire:model="search" name="search" type="text">
        </form>
            @if($contents && $contents->count() > 0)
                @foreach($contents as $rs)

                    @if($rs->type=='News')
                    <a href="{{route('news',['id'=>$rs->id])}}">{{$rs->name}}</a>
                    @endif

                    @if($rs->type=='Announce')
                        <a href="{{route('announce',['id'=>$rs->id])}}">{{$rs->name}}</a>
                    @endif

                    @if($rs->type=='Event')
                        <a href="{{route('event',['id'=>$rs->id])}}">{{$rs->name}}</a>
                    @endif

                @endforeach
            @else
                <a href="">SONUC BULUNAMADI</a>
            @endif
    </div>

</div>
