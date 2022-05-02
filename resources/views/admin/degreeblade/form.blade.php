
<div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">ADD DEGREE</h4>
                        <p class="card-description">
                            About Degree
                        </p>
                        <form method="post" action="{{route('admin.degree.store')}}" enctype="multipart/form-data" class="forms-sample">
                            @csrf
                            <!-- Event Name -->
                            <div class="form-group">
                                <label for="name">Degree Name</label>
                                <input required type="text" class="form-control" id="name" name="name" placeholder="Event Name" >
                            </div>

                            <!-- ABOUTEVENT -->
                            <div class="form-group">
                                <label for="description">Description</label><br>
                                <textarea rows = "15" cols = "60" id="description" name="description" placeholder=" This Degree ..."></textarea>
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
