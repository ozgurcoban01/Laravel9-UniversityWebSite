@extends('layouts.adminwindows')

@section('title', 'Transfer Image Gallery')

@section('content')




        <div id="page-wrapper">
            <div class="row">
                <h2>{{$transfer->title}}</h2>

                <form role="form" action="{{route('admin.image.store',['tid'=>$transfer->id])}}" method="post" enctype="multipart/form-data" >
                    @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title">
                            </div>

                            <div class="form-group">
                                <label>İmage</label>
                                <input type="file" name="image">
                            </div>
                            <div style="margin:0 0 10px 0 "><button type="submit" class="btn btn-primary">Save</button></div>

                </form>

    <div class="panel panel-default">
        <br>Transfer Image List
    </div>
    <div class="panel-body">

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Update</th>
                    <th>Delete</th>

                </tr>
                </thead>
                <tbody>
                @foreach( $images as $rs)
                    <tr>
                        <td>{{$rs -> id}}</td>
                        <td>{{$rs -> title}}</td>


                        <td>
                            @if($rs->image)
                                <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                        @endif

                        <td><a href="{{route('admin.category.edit', ['id'=>$rs ->id])}}" class="btn btn-block btn-info btn=sm">Edit</a></td>
                        <td><a href="{{route('admin.category.destroy', ['id'=>$rs ->id])}}"onclick="return confirm ('Deleting! Are you sure?')"
                               class="btn btn-block btn-danger btn=sm">Delete</a>

                    </tr>
                @endforeach
                </tbody>
            </table>
@endsection
