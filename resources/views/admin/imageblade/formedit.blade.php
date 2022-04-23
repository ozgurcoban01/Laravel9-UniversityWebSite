

<div class="content-wrapper">

    <div class="row">

        <div  class="col-lg-12 grid-margin stretch-card">

            <div class="card">

                <div class="card-body">

                    <h2>Editing <strong>{{$images->id}}</strong> Photo in <strong>{{$news->name}}</strong> News</h2>
                    <form method="post" action="{{route('admin.image.update',['nid'=>$news->id,'id'=>$images->id])}}" enctype="multipart/form-data" class="forms-sample">
                    @csrf
                    <!-- TITLE -->
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input required type="text" class="form-control" id="title" name="title" value="{{$images->title}}" placeholder="Image Title" >
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


                </div>
            </div>
        </div>

    </div>
</div>


<!-- main-panel ends -->

