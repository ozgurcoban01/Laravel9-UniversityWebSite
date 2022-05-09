
<div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">ADD EVENT</h4>
                        <p class="card-description">
                            About Event
                        </p>
                        <form method="post" action="{{route('admin.events.store')}}" enctype="multipart/form-data" class="forms-sample">
                            @csrf
                            <!-- Event Name -->
                            <div class="form-group">
                                <label for="name">Event Name</label>
                                <input required type="text" class="form-control" id="name" name="name" placeholder="Event Name" >
                            </div>

                            <!-- START DATE -->
                            <div class="form-group">
                                <label for="sdate">Event Start Date</label>
                                <input required type="date" class="form-control" id="sdate" name="sdate" >
                            </div>

                            <!-- END DATE -->
                            <div class="form-group">
                                <label for="edate">Event End Date</label>
                                <input required type="date" class="form-control" id="edate" name="edate" >
                            </div>

                            <!-- START TIME -->
                            <div class="form-group">
                                <label for="stime">Event Start Time</label>
                                <input required type="time" class="form-control" id="stime" name="stime">
                            </div>

                            <!-- END TIME -->
                            <div class="form-group">
                                <label for="etime">Event End Time</label>
                                <input required type="time" class="form-control" id="etime" name="etime" >
                            </div>

                            <div class="form-group">
                                <label>Location</label>
                                <select required name="location" class="js-example-basic-single w-100">
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

                            <!-- sDESCRIPTION -->
                            <div class="form-group">
                                <label for="description">Short Description</label>
                                <input type="text" class="form-control" id="sdescription" placeholder="Short Description" name="sdescription">
                            </div>

                            <!-- ABOUTEVENT -->
                            <div class="form-group">
                                <label for="aboutevent">About Event</label><br>
                                <textarea id="aboutevent" name="aboutevent" placeholder=" This aboutevent ..."></textarea>

                                <script>
                                    ClassicEditor
                                        .create( document.querySelector( '#aboutevent' ) )
                                        .then( editor => {
                                            console.log( editor );
                                        } )
                                        .catch( error => {
                                            console.error( error );
                                        } );
                                </script>
                            </div>

                            <!-- IMAGE -->
                            <div class="form-group">
                                <label for="description">Image</label>
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
