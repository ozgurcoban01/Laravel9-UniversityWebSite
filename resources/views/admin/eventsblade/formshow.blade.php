


<div class="content-wrapper">

    <div style="justify-content: center;align-items: center" class="row">
        <div  class="col-lg-6 grid-margin stretch-card">

            <div class="card">


                <div class="card-body">

                    <h4 style="font-size:xx-large" class="card-title">#{{$data->id}} {{$data->name}} </h4>
                    <h4>{{$data->description}}</h4>

                    <div class="table-responsive">
                        <table style="font-size:medium" class="table table-hover">

                            <tbody>
                            <tr>
                                <td style="font-weight:bold">Event Id</td>
                                <td>#{{$data->id}}</td>

                            </tr>
                            <tr>
                                <td style="font-weight:bold">Name</td>
                                <td>{{$data->name}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Location</td>
                                <td>{{$data->location}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Start Date</td>
                                <td>{{$data->sdate}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">End Time</td>
                                <td>{{$data->edate}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">End Date</td>
                                <td>{{$data->stime}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">End Time</td>
                                <td>{{$data->etime}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Description</td>
                                <td>{{$data->description}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Short Description</td>
                                <td>{{$data->sdescription}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">About Event</td>
                                <td><a onclick="return !window.open(this.href,'','top=50 left=100 height=700,width=1100')" href="{{route('admin.events.description',['id'=>$data ->id])}}"><i style="cursor: pointer;font-size: xx-large" class="nav-link mdi mdi-message-text menu-icon-right"></i></a></td>
                            </tr>
                            @if($data->image)
                                <tr>
                                    <td style="font-weight:bold;vertical-align: top;">Banner Image</td>
                                    <td><img style="height: 100px;width: 100px" src="{{Storage::url($data->image)}}" alt="image"></td>
                                </tr>
                            @endif
                            <tr>
                                <td style="font-weight:bold">Created</td>
                                <td>{{$data->created_at}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Updated</td>
                                <td >{{$data->updated_at}}</td>
                            </tr>


                            </tbody>
                        </table>

                        {{--BOTTOM BUTTONS--}}
                        <div style="margin: 5px">
                            <a href="{{route('admin.events.sedit',['id'=>$data->id])}}" style="text-decoration:none;color: inherit;">
                                <div class="btn btn-warning btn-rounded btn-fw" style="margin: 5px">Edit Event</div>
                            </a>

                            <a href="{{route('admin.events.destroy',['id'=>$data->id])}}"  style="text-decoration:none;color: inherit;">
                                <div class="btn btn-danger btn-rounded btn-fw" style="margin: 5px">Delete Event</div>
                            </a>

                            <a href="{{route('admin.events.list')}}"  style="text-decoration:none;color: inherit;">
                                <div class="btn btn-success btn-rounded btn-fw" style="margin: 5px">List Page</div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
<!-- content-wrapper ends -->
<!-- partial:../../partials/_footer.html -->

<!-- main-panel ends -->
