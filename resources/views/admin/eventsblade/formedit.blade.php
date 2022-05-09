
<div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit {{$data->name}} Id {{$data->id}}</h4>
                        <p class="card-description">
                            Form For Change <span style="font-weight: bold">Id: {{$data->id}}</span> Event is <span style="font-weight: bold">{{$data->name}}</span>
                        </p>
                        <form method="post" action="{{route('admin.events.update',['id'=>$data->id])}}" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        <!-- Event Name -->
                            <div class="form-group">
                                <label for="name">Event Name</label>
                                <input required type="text" class="form-control" id="name" name="name" placeholder="Event Name" value="{{$data->name}}">
                            </div>

                            <!-- START DATE -->
                            <div class="form-group">
                                <label for="sdate">Event Start Date</label>
                                <input required type="date" class="form-control" id="sdate" name="sdate" value="{{$data->sdate}}">
                            </div>

                            <!-- END DATE -->
                            <div class="form-group">
                                <label for="edate">Event End Date</label>
                                <input required type="date" class="form-control" id="edate" name="edate"value="{{$data->edate}}" >
                            </div>

                            <!-- START TIME -->
                            <div class="form-group">
                                <label for="stime">Event Start Time</label>
                                <input required type="time" class="form-control" id="stime" name="stime"value="{{$data->stime}}">
                            </div>

                            <!-- END TIME -->
                            <div class="form-group">
                                <label for="etime">Event End Time</label>
                                <input required type="time" class="form-control" id="etime" name="etime" value="{{$data->etime}}">
                            </div>

                            <div class="form-group">
                                <label>Location</label>
                                <select required name="location" class="js-example-basic-single w-100">
                                    <option selected value="Istanbul">{{$data->location}}</option>
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
                                <input type="text" class="form-control" id="description" placeholder="Description" name="description"value="{{$data->description}}">
                            </div>

                            <!-- DESCRIPTION -->
                            <div class="form-group">
                                <label for="description">Short Description</label>
                                <input type="text" class="form-control" id="sdescription" placeholder="Description" name="sdescription"value="{{$data->sdescription}}">
                            </div>

                            <!-- ABOUTEVENT -->
                            <div class="form-group">
                                <label for="aboutevent">About Event</label><br>
                                <textarea id="aboutevent" name="aboutevent" placeholder=" This aboutevent ...">{!! $data->aboutevent !!}</textarea>

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
                                <label for="image">Image</label>
                                <input type="file" class="form-control" id="image"  name="image">
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
