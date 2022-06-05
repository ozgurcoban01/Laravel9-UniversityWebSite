
<div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">ADD COURSE</h4>
                        <p class="card-description">

                        </p>
                        <form method="post" action="{{route('admin.courses.store')}}" enctype="multipart/form-data" class="forms-sample">
                            @csrf
                            <!-- Event Name -->
                            <div class="form-group">
                                <label for="name">Course Name</label>
                                <input required type="text" class="form-control" id="name" name="name" placeholder="Course Name" >
                            </div>

                            <div class="form-group">
                                <label>Degree</label>
                                <select required name="teachers_id" class="js-example-basic-single w-100">
                                    @foreach($teachers as $rs)
                                        <option value="{{$rs->id}}">{{$rs->fname}} {{$rs->lname}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="price">Course Price</label>
                                <input required type="number" class="form-control" id="price" name="price">
                            </div>

                            <!-- ABOUTEVENT -->
                            <div class="form-group">
                                <label for="aboutcourse">About Course</label><br>
                                <textarea id="aboutcourse" name="aboutcourse" placeholder=" News Course ..."></textarea>

                                <script>
                                    $('#aboutcourse').summernote({

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

                            <!-- IMAGE -->
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" id="image"  name="image">
                            </div>

                            <button type="submit" class="btn btn-primary me-2">Submit</button>

                        </form>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->

    <!-- partial -->

<!-- main-panel ends -->
