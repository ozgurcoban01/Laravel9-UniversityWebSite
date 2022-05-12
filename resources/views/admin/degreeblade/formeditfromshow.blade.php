
<div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit {{$data->name}} Id {{$data->id}}</h4>
                        <p class="card-description">
                            Form For Change <span style="font-weight: bold">Id: {{$data->id}}</span> Event is <span style="font-weight: bold">{{$data->name}}</span>
                        </p>
                        <form method="post" action="{{route('admin.degree.supdate',['id'=>$data->id])}}" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        <!-- Event Name -->
                            <div class="form-group">
                                <label for="name">Event Name</label>
                                <input required type="text" class="form-control" id="name" name="name" placeholder="Event Name" value="{{$data->name}}">
                            </div>

                            <!-- ABOUTEVENT -->
                            <div class="form-group">
                                <label for="description">Description</label><br>
                                <textarea id="description" name="description" placeholder=" This description ...">{!! $data->description !!}</textarea>

                                <script>
                                    $('#description').summernote({

                                        tabsize: 2,
                                        height: 120,
                                        toolbar: [
                                            ['style', ['style']],
                                            ['font', ['bold', 'underline', 'clear']],
                                            ['color', ['color']],
                                            ['para', ['ul', 'ol', 'paragraph']],
                                            ['table', ['table']],
                                            ['insert', ['link', 'picture', 'video']],
                                            ['view', ['fullscreen', 'codeview', 'help']]
                                        ]
                                    });
                                </script>
                            </div>

                            <button type="submit" class="btn btn-primary me-2">Update</button>

                        </form>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->

<!-- main-panel ends -->
