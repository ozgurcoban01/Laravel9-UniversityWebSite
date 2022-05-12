
<div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">ADD Faculty</h4>
                        <p class="card-description">
                            About Faculty
                        </p>
                        <form method="post" action="{{route('admin.faculty.store')}}" enctype="multipart/form-data" class="forms-sample">
                            @csrf
                            <!-- Event Name -->

                                <div class="form-group">
                                    <label for="parent_id">Faculty Name</label>
                                    <select class="js-example-basic-single w-100" name="parent_id">
                                        <option value="0" selected>Main Categorie</option>
                                        @foreach($data as $rs)
                                            <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\FacultyController::getParentsTree($rs,$rs->name)}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            <div class="form-group">
                                <label for="name">Faculty Name</label>
                                <input required type="text" class="form-control" id="description" name="name" placeholder="About Faculty" >
                            </div>



                            <!-- ABOUTEVENT -->
                            <div class="form-group">
                                <label for="aboutfaculty">About Faculty</label><br>
                                <textarea id="aboutfaculty" name="aboutfaculty" placeholder=" This Faculty ..."></textarea>

                                <script>
                                    $('#aboutfaculty').summernote({

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
                                <input type="file" class="form-control" id="image"name="image">
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
