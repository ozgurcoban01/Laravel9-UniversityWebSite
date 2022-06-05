
<div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">ADD Announcement</h4>
                        <p class="card-description">
                            About Announcement
                        </p>
                        <form method="post" action="{{route('admin.comment.store')}}" enctype="multipart/form-data" class="forms-sample">
                            @csrf
                            <!-- Event Name -->
                            <div class="form-group">
                                <label for="name">Announcement Description</label>
                                <input required type="text" class="form-control" id="description" name="description" placeholder="About Announcement" >
                            </div>

                            <!-- START DATE -->
                            <div class="form-group">
                                <label for="sdate">Announcement Start Date</label>
                                <input required type="date" class="form-control" id="sdate" name="sdate" >
                            </div>

                            <!-- ABOUTEVENT -->
                            <div class="form-group">
                                <label for="aboutevent">About Announcement</label><br>
                                <textarea rows = "15" cols = "60" id="aboutannounce" name="aboutannounce" placeholder=" This Annoucement ..."></textarea>
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
