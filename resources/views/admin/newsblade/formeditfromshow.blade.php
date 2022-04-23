
<div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit {{$data->name}} Id {{$data->id}}</h4>
                        <p class="card-description">
                            Form For Change <span style="font-weight: bold">Id: {{$data->id}}</span> News is <span style="font-weight: bold">{{$data->name}}</span>
                        </p>
                        <form method="post" action="{{route('admin.news.supdate',['id'=>$data->id])}}" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        <!-- Event Name -->
                            <div class="form-group">
                                <label for="name">News Name</label>
                                <input required type="text" class="form-control" id="name" name="name" placeholder="Event Name" value="{{$data->name}}">
                            </div>

                            <!-- DATE -->
                            <div class="form-group">
                                <label for="sdate">Date</label>
                                <input required type="date" class="form-control" id="date" name="date" value="{{$data->sdate}}">
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
                                <input type="text" class="form-control" id="description" placeholder="Description" name="description"value="{{$data->description}}">
                            </div>

                            <!-- ABOUTEVENT -->
                            <div class="form-group">
                                <label for="aboutevent">About Event</label><br>
                                <textarea value="{{$data->aboutnews}}" rows = "5" cols = "33" id="aboutnews" name="aboutnews" placeholder=" This Event ...">{{$data->aboutnews}}</textarea>
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