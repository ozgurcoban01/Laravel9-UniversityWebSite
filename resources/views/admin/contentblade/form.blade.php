
<div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">ADD EVENT</h4>
                        <p class="card-description">
                            News Event
                        </p>
                        <form method="post" action="{{route('admin.content.store')}}" enctype="multipart/form-data" class="forms-sample">
                            @csrf
                            <!-- Event Name -->
                            <div class="form-group">
                                <label for="name">Content Name</label>
                                <input required type="text" class="form-control" id="name" name="name" placeholder="News Name" >
                            </div>

                            <!-- DATE -->
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input required type="date" class="form-control" id="date" name="date" >
                            </div>

                            <div class="form-group">
                                <label>Location</label>
                                <select name="location" class="js-example-basic-single w-100">
                                    <option selected value="">Empty</option>
                                    <option value="Istanbul">Istanbul</option>
                                    <option value="Istanbul">Karabük</option>
                                    <option value="Ankara">Ankara</option>
                                    <option value="Izmir">Izmir</option>
                                    <option value="Bursa">Bursa</option>
                                    <option value="Samsun">Samsun</option>
                                </select>
                            </div>



                            <!-- DESCRIPTION -->
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" id="description" placeholder="Description" name="description">
                            </div>

                            <!-- ABOUTEVENT -->
                            <div class="form-group">
                                <label for="aboutcontent">About Content</label><br>
                                <textarea id="aboutcontent" name="aboutcontent" placeholder=" Content About ..."></textarea>

                                <script>
                                    $('#aboutcontent').summernote({

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

                            <div class="form-group">
                                <label>Faculty</label>
                                <select required name="faculties_id" class="js-example-basic-multiple w-100" >
                                    @foreach($facultylist as $rs)
                                        <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\FacultyController::getParentsTree($rs,$rs->name)}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Type</label>
                                <select name="type" class="js-example-basic-single w-100">
                                    <option selected value="News">News</option>
                                    <option value="Event">Event</option>
                                    <option value="Announce">Announce</option>
                                </select>
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
