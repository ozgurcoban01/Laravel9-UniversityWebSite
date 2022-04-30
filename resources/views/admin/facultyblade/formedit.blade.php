
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">ADD Faculty</h4>
                    <p class="card-description">
                        About Faculty
                    </p>
                    <form method="post" action="{{route('admin.faculty.update',['id'=>$data->id])}}" enctype="multipart/form-data" class="forms-sample">
                    @csrf
                    <!-- Event Name -->

                        <div class="form-group">
                            <label for="parent_id">Faculty Name</label>
                            <select class="js-example-basic-single w-100" name="parent_id">
                                <option disabled selected>{{\App\Http\Controllers\AdminPanel\FacultyController::getParentsTree($data,$data->name)}}</option>
                                <option value="0" selected>Main Categorie</option>
                                @foreach($datalist as $rs)
                                    <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\FacultyController::getParentsTree($rs,$rs->name)}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">Faculty Name</label>
                            <input required type="text" class="form-control" id="description" name="name" placeholder="About Faculty" value="{{$data->name}}">
                        </div>


                        <!-- ABOUTEVENT -->
                        <div class="form-group">
                            <label for="aboutevent">About Faculty</label><br>
                            <textarea rows = "15" cols = "60" id="aboutfaculty" name="aboutfaculty" placeholder=" This Faculty ...">{{$data->aboutfaculty}}</textarea>
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
