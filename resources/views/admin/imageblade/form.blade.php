

<div class="content-wrapper">

    <div class="row">

        <div  class="col-lg-12 grid-margin stretch-card">

            <div class="card">

                <div class="card-body">
                    <h2>Photo for <strong>{{$news->name}}</strong>News</h2>
                    <form method="post" action="{{route('admin.image.store',['nid'=>$news->id])}}" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        <!-- TITLE -->
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input required type="text" class="form-control" id="title" name="title" placeholder="Image Title" >
                            </div>

                        <!-- IMAGE -->
                        <div class="form-group">
                            <label for="date">Image</label>
                            <input required type="file" class="form-control" id="image" name="image" >
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form>



                    <p class="card-description">

                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>
                                    Image Id
                                </th>
                                <th>
                                    Image Title
                                </th>
                                <th>
                                    Image
                                </th>
                                <th>
                                    Edit
                                </th>
                                <th>
                                    Delete
                                </th>
{{--                                @if ($images->teacher_id)--}}
{{--                                    <td>--}}
{{--                                        {{$rs->teacher_id}}--}}
{{--                                    </td>--}}
{{--                                @endif--}}

{{--                                @if ($images->event_id)--}}
{{--                                    <td>--}}
{{--                                        {{$rs->event_id}}--}}
{{--                                    </td>--}}
{{--                                @endif--}}

{{--                                @if ($images->announce_id)--}}
{{--                                    <td>--}}
{{--                                        {{$rs->announce_id}}--}}
{{--                                    </td>--}}
{{--                                @endif--}}

{{--                                @if ($images->news_id)--}}
{{--                                    <td>--}}
{{--                                        {{$rs->news_id}}--}}
{{--                                    </td>--}}
{{--                                @endif--}}


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $rs)
                                <tr>
                                    <td>
                                        #{{$rs->id}}
                                    </td>
                                    <td>
                                        {{$rs->title}}
                                    </td>
                                    <td>
                                        @if($rs->image)
                                            <img style="border-radius:15px;width: 200px;height: auto " src="{{Storage::url($rs->image)}}">
                                        @endif
                                    </td>
                                    <td>
                                        <div  ><a class="btn btn-warning btn-rounded btn-fw" href="{{route('admin.image.edit',['nid'=>$news->id,'id'=>$rs->id])}}">Edit</a></div>
                                    </td>

                                    <td>
                                        <div  ><a class="btn btn-danger btn-rounded btn-fw" href="{{route('admin.image.destroy',['nid'=>$news->id,'id'=>$rs->id])}}">Delete</a></div>
                                    </td>
{{--                                    @if ($images->teacher_id)--}}
{{--                                        <td>--}}
{{--                                            {{$rs->teacher_id}}--}}
{{--                                        </td>--}}
{{--                                    @endif--}}

{{--                                    @if ($images->event_id)--}}
{{--                                        <td>--}}
{{--                                            {{$rs->event_id}}--}}
{{--                                        </td>--}}
{{--                                    @endif--}}

{{--                                    @if ($images->announce_id)--}}
{{--                                        <td>--}}
{{--                                            {{$rs->announce_id}}--}}
{{--                                        </td>--}}
{{--                                    @endif--}}

{{--                                    @if ($images->news_id)--}}
{{--                                        <td>--}}
{{--                                            {{$rs->news_id}}--}}
{{--                                        </td>--}}
{{--                                    @endif--}}

                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>


<!-- main-panel ends -->

